<?php

namespace App\Http\Controllers\Management;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Spatie\Permission\Models\Role;
use Validator;
use App\Models\Management\Permission;
use Str;
use App\Http\Requests\UserRequest;
use App\Http\Requests\UserUpdateRequest;



class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       
        $users =User::with('roles')->whereHas('roles',function($query){
            $query->where('name','Super Admin')
                  ->orWhere('name','Admin');
        })->latest()->get();
        $roles =Role::get();
        return view('backend.users.users',compact('users','roles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request\UserRequest  $UserRequest
     * @return \Illuminate\Http\Response
     */
    public function store(UserRequest $UserRequest)
    {
        $user_data =$UserRequest->validated();

        $user =User::store($user_data);

        $assign_role =$user->assignRole($user_data['user_role']);

        return response()->json([
            'success' =>true,
            'message' =>"User Registered Successfully"
        ],200);


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($user_uuid)
    {
        $user =User::where('uuid',$user_uuid)->first();
        $permissions =Permission::where('permission_category_id',1)->get();
        return view('backend.users.edit_user',compact('user','permissions'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UserUpdateRequest $UserUpdateRequest, $user_uuid)
    {
        $user_data =$UserUpdateRequest->validated();
        $permissions =$UserUpdateRequest->permissions;

        $user =User::where('uuid',$user_data['user_uuid'])->first();
        $user->name =ucwords($user_data['name']);
        $user->phone_number =$user_data['phone_number'];
        $user->save();

        if ($permissions) {
         $assign_permission =$user->givePermissionTo($permissions);

         $unchecked_permissions =$user->permissions->whereNotIn('name',$permissions);

          if ($unchecked_permissions) {
             $revoke_permission =$user->revokePermissionTo($unchecked_permissions);
          }
            
        }else {
            $revoked_permissions =Permission::where('permission_category_id',1)->get();
            if ($revoked_permissions) {
                foreach ($revoked_permissions as $key ) {
                    $revoke_permission =$user->revokePermissionTo($key->name);
                }
            }
        }

        return response()->json([
            'success' =>true,
            'message' =>"Action Done Successfully"
        ],200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }


    public function changeUserStatus(Request $request){
        $user_uuid =$request->input('uuid');
        $action    =$request->input('action');

        if ($action == "activate") {
            $user_status ="Active";
        } else {
            $user_status ="Inactive";
        }

        $user =User::where('uuid',$user_uuid)->first();
        $user->status =$user_status;
        $user->save();

        return response()->json([
            'status' =>true,
            'message' =>'Action Performed Successfully'
        ],200);
    }
}
