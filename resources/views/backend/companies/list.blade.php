@extends('backend.layouts.master')
@section('content')

<div class="page-content">
    <div class="container-fluid">

        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                    <h4 class="mb-sm-0 font-size-18">Companies</h4>

                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="javascript: void(0);">List</a></li>
                            <li class="breadcrumb-item active">Companies List</li>
                        </ol>
                    </div>

                </div>
            </div>
        </div>
        <!-- end page title -->

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body ">
                        <h4 class="card-title text-center" >Companies</h4>
                        <div style="display: flex; flex-direction: row; justify-content:flex-end; padding: 5px 0px 5px 0px">
                            <a href="{{ route('companies.create')}}">
                            <button class="btn btn-primary btn-sm waves-effect waves-light" > <span class="fa fa-plus font-size-15"></span> Add Company </button>
                            </a>
                        </div>
                        <div class="table-responsive">
                            <table id="datatable" class="table table-bordered dt-responsive  nowrap w-100">
                                <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Reg Date</th>
                                    <th>Name</th>
                                    <th>Contact</th>
                                    <th>Reg Details</th>
                                    <th>Location</th>
                                    <th>Status</th>
                                    <th>Staff</th>
                                    <th>Products</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                    @foreach ($companies as $company)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ date('d ,M-Y H:i:s',strtotime($company->created_at))}}</td>
                                        <td>{{ $company->name }}</td>
                                        <td>{{ $company->email }} <br>{{ $company->contact}}</td>
                                        <td>{{ $company->licence_number }} <br> {{ $company->tin_number}}</td>
                                        <td>{{ $company->region->name }} <br>{{ $company->district->name }}</td>
                                        <td>
                                            @if ($company->status == "Active")
                                            <span class="badge badge-pill badge-soft-success font-size-13">Active</span>
                                            @else
                                            <span class="badge badge-pill badge-soft-danger font-size-13">Inactive</span>
                                            @endif
                                        </td>
                                        <td>
                                            <button class="btn btn-primary btn-sm"><span class="fa fa-user"></span> Staff</button>
                                        </td>
                                        <td>
                                            <a href="{{ route('products.show',$company->uuid)}}">
                                            <button class="btn btn-info btn-sm"><span class="fa fa-plus"></span> Products</button>
                                            </a>
                                        </td>
                                        <td>
                                            <a href="{{ route('users.show',$company->uuid)}}">
                                                <button class="btn btn-success btn-sm"> <span class="fa fa-edit"></span></button>
                                            </a>
                                             @if ($company->status == "Active")
                                            <button title="Disable" class="btn btn-warning btn-sm" id="{{ $company->uuid}}" onclick="deactivate_user(id)"><span class="fa fa-times"></span></button>
                                             @else
                                            <button title="Enable" class="btn btn-info btn-sm" id="{{ $company->uuid}}" onclick="enable_user(id)"  ><span class="fa fa-check"></span></button>
                                             @endif
                                            
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody> 
                               
                            </table>
                        </div>
                       

                    </div>
                </div>
            </div> <!-- end col -->
        </div> <!-- end row -->
    </div> <!-- container-fluid -->
</div>

    
@endsection

