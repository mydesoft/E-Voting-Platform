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
                                
                                <li class="active">Edit Registered  Candidate</li>
                            </ol>
                        </div>
                    </div>
                  
                  
                   <div class="row">
                        <div class="col-md-12">
                            @include('includes.message')
                            <div class="card card-box">
                                <div class="card-head">
                                    <header>Change {{$candidate->name}} Details</header>
                                    <div class="tools">
                                        <a class="fa fa-repeat btn-color box-refresh" href="javascript:;"></a>
                                        <a class="t-collapse btn-color fa fa-chevron-down" href="javascript:;"></a>
                                        <a class="t-close btn-color fa fa-times" href="javascript:;"></a>
                                    </div>
                                </div>
                                <div class="card-body no-padding height-9">
                                    <div class="row">
                                        

                                        <div class="col-md-6 offset-md-3">
                                            
                                            <form method="POST" action="{{route('editCandidateData', $candidate->id)}}">
                                                @csrf
                                                <div class="form-group">
                                                    <label for="name"><h4>Name</h4></label>
                                                    <input type="text" name ="name" value="{{$candidate->name}}" class="form-control">
                                                </div>

                                                 <div class="form-group">
                                                    <label for="email"><h4>Email</h4></label>
                                                    <input type="email" name ="email" value="{{$candidate->email}}" class="form-control">
                                                </div>

                                                <div class="form-group">
                                                    <label for="Department"><h4>Department</h4></label>
                                                    <input type="text" name ="department" value="{{$candidate->department}}" class="form-control">
                                                </div>  


                                                <div class="form-group">
                                                    <label for="Level"><h4>Level</h4></label>
                                                    <input type="text" name ="level" value="{{$candidate->level}}" class="form-control">
                                                </div>  

                                                <div class="form-group">
                                                    <label for="Matric Number"><h4>Matric Number</h4></label>
                                                    <input type="text" name ="matric_number" value="{{$candidate->matric_number}}" class="form-control">
                                                </div>

                                                 <div class="form-group">
                                                    <label for="CGPA"><h4>CGPA</h4></label>
                                                    <input type="text" name ="cgpa" value="{{$candidate->cgpa}}" class="form-control">
                                                </div> 

                                                  <div class="form-group">
                                                    <label for="Phone Number"><h4>Phone Number</h4></label>
                                                    <input type="text" name ="phone_number" value="{{$candidate->phone_number}}" class="form-control">
                                                </div> 

                                                  <div class="form-group">
                                                    <label for="Gender"><h4>Gender</h4></label>
                                                    <input type="text" name ="gender" value="{{$candidate->gender}}" class="form-control">
                                                </div> 


                                                <button class="btn btn-info">Edit Candidate</button>
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