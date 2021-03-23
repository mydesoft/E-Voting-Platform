@extends('layouts.admin_master')

@section('title', 'Edit Registered Candidate')

@section('content')
            <!-- start page content -->
            <div class="page-content-wrapper">
                <div class="page-content">
                    <div class="page-bar">
                        <div class="page-title-breadcrumb">
                            
                            <ol class="breadcrumb page-breadcrumb pull-right">
                                <li><i class="fa fa-home"></i>&nbsp;<a class="parent-item" href="{{route('adminDashboard')}}">Dashboard</a>&nbsp;<i class="fa fa-angle-right"></i>
                                </li>
                                
                                <li class="active">Edit Admin Data</li>
                            </ol>
                        </div>
                    </div>
                  
                  
                   <div class="row">
                        <div class="col-md-12">
                            @include('includes.message')
                            <div class="card card-box">
                                <div class="card-head">
                                    <header>Change {{ucfirst($admin->name)}} Details</header>
                                    <div class="tools">
                                        <a class="fa fa-repeat btn-color box-refresh" href="javascript:;"></a>
                                        <a class="t-collapse btn-color fa fa-chevron-down" href="javascript:;"></a>
                                        <a class="t-close btn-color fa fa-times" href="javascript:;"></a>
                                    </div>
                                </div>
                                <div class="card-body no-padding height-9">
                                    <div class="row">
                                        

                                        <div class="col-md-6 offset-md-3">
                                            
                                            <form method="POST" action="{{route('editAdminData', $admin->id)}}">
                                                @csrf
                                                <div class="form-group">
                                                    <label for="name"><h4>Name</h4></label>
                                                    <input type="text" name ="name" value="{{$admin->name}}" class="form-control">
                                                </div>

                                                 <div class="form-group">
                                                    <label for="email"><h4>Email</h4></label>
                                                    <input type="email" name ="email" value="{{$admin->email}}" class="form-control">
                                                </div>

       
                                                <div class="form-group">
                                                    <label for="Username"><h4>Username</h4></label>
                                                    <input type="text" name ="username" value="{{$admin->username}}" class="form-control">
                                                </div>  

                                                <button class="btn btn-info">Edit Admin</button>
                                            </form>
                                        </div>
                                       
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                  
                </div>
            </div>
            <!-- end page content -->
         
        </div>
        <!-- end page container -->
      
    </div>
  @endsection  