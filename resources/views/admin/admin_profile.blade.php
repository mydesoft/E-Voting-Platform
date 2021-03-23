@extends('layouts.admin_master')

@section('title', 'Admin Profile')

@section('content')
            <!-- start page content -->
            <div class="page-content-wrapper">
                <div class="page-content">
                    <div class="page-bar">
                        <div class="page-title-breadcrumb">
                            
                            <ol class="breadcrumb page-breadcrumb pull-right">
                                <li><i class="fa fa-home"></i>&nbsp;<a class="parent-item" href="{{route('adminDashboard')}}">Dashboard</a>&nbsp;<i class="fa fa-angle-right"></i>
                                </li>
                                
                                <li class="active">Add Profile</li>
                            </ol>
                        </div>
                    </div>
                  
                  
                   <div class="row">
                        <div class="col-md-12">
                            @include('includes.message')
                            <div class="card card-box">
                                <div class="card-head">
                                    <header>Change Password</header>
                                    <div class="tools">
                                        <a class="fa fa-repeat btn-color box-refresh" href="javascript:;"></a>
                                        <a class="t-collapse btn-color fa fa-chevron-down" href="javascript:;"></a>
                                        <a class="t-close btn-color fa fa-times" href="javascript:;"></a>
                                    </div>
                                </div>
                                <div class="card-body no-padding height-9">
                                    <div class="row">
                                        

                                        <div class="col-md-6 offset-md-3">
                                            
                                            <form method="POST" action="{{route('updateAdminPassword')}}">
                                                @csrf
                                                <div class="form-group">
                                                    <label for="old_password"><h4>Old Password</h4></label>
                                                    <input type="password" name ="old_password" class="form-control" placeholder="Enter Old Password">
                                                </div>  


                                                <div class="form-group">
                                                    <label for="password"><h4> New Password</h4></label>
                                                    <input type="password" name ="password" class="form-control" placeholder="Enter New Password">
                                                </div> 



                                                <div class="form-group">
                                                    <label for="confirm_password"><h4>Confirm New Password</h4></label>
                                                    <input type="password" name ="password_confirmation" class="form-control" placeholder="Confirm Password">
                                                </div>                                             
                                                <button class="btn btn-info">Change Password</button>
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