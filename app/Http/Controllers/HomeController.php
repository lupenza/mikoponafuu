<?php

namespace App\Http\Controllers; 

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('webpages.homepage');
    }

    public function loanOffered(Request $request){
        $title =$request->type;
        return view('webpages.loan_offereds',compact('title'));
    }

    public function loginForm(){
        return view('webpages.login');
    }
}
