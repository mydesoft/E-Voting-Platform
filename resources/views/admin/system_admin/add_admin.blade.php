@extends('layouts.admin_master')

@section('title', 'View Admin')

@section('content')
            <!-- start page content -->
            <div class="page-content-wrapper">
                <div class="page-content">
                    <div class="page-bar">
                        <div class="page-title-breadcrumb">
                            
                            <ol class="breadcrumb page-breadcrumb pull-right">
                                <li><i class="fa fa-home"></i>&nbsp;<a class="parent-item" href="{{route('adminDashboard')}}">Dashboard</a>&nbsp;<i class="fa fa-angle-right"></i>
                                </li>
                                
                                <li class="active">Add Admin</li>
                            </ol>
                        </div>
                    </div>
                  
                  
                   <div class="row">
                        <div class="col-md-12">
                            @include('includes.message')
                            <div class="card card-box">
                                <div class="card-head">
                                    <header>Add Admin Profile</header>
                                    <div class="tools">
                                        <a class="fa fa-repeat btn-color box-refresh" href="javascript:;"></a>
                                        <a class="t-collapse btn-color fa fa-chevron-down" href="javascript:;"></a>
                                        <a class="t-close btn-color fa fa-times" href="javascript:;"></a>
                                    </div>
                                </div>
                                <div class="card-body no-padding height-9">
                                    <div class="row">
                                        

                                        <div class="col-md-6 offset-md-3">
                                            
                                            <form method="POST" action="{{route('addSystemAdmin')}}">
                                                @csrf
                                                <div class="form-group">
                                                    <label for="name"><h4>Name</h4></label>
                                                    <input type="text" name ="name" class="form-control" placeholder="Enter Name">
                                                </div>

                                                 <div class="form-group">
                                                    <label for="email"><h4>Email</h4></label>
                                                    <input type="email" name ="email" class="form-control" placeholder="Enter Email">
                                                </div>

                                                <div class="form-group">
                                                    <label for="username"><h4>Username</h4></label>
                                                    <input type="text" name ="username" class="form-control" placeholder="Enter Username">
                                                </div>  


                                                <div class="form-group">
                                                    <label for="code"><h4>Password</h4></label>
                                                    <input type="password" name ="password" class="form-control" placeholder="Enter Password">
                                                </div> 



                                                <div class="form-group">
                                                    <label for="confirm_password"><h4>Confirm Admin Code</h4></label>
                                                    <input type="password" name ="password_confirmation" class="form-control" placeholder="Confirm Password">
                                                </div>                                             
                                                <button class="btn btn-info">Add Admin</button>
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