@extends('layouts.admin_master')

@section('title', 'Succesful Candidates')

@section('content')
            <!-- start page content -->
            <div class="page-content-wrapper">
                <div class="page-content">
                    <div class="page-bar">
                        <div class="page-title-breadcrumb">
                            
                            <ol class="breadcrumb page-breadcrumb pull-right">
                                <li><i class="fa fa-home"></i>&nbsp;<a class="parent-item" href="{{route('adminDashboard')}}">Dashboard</a>&nbsp;<i class="fa fa-angle-right"></i>
                                </li>
                                
                                <li class="active">Succesful Vice-President</li>
                            </ol>
                        </div>
                    </div>
                  

                    <div class="row">
                        <div class="col-md-12">
                            @include('includes.message')
                            <div class="card card-topline-primary">
                                <div class="card-head">
                                    <header>Successful Candidates for Vice-President</header>
                                    <div class="tools">
                                        <a class="fa fa-repeat btn-color box-refresh" href="javascript:;"></a>
                                        <a class="t-collapse btn-color fa fa-chevron-down" href="javascript:;"></a>
                                        <a class="t-close btn-color fa fa-times" href="javascript:;"></a>
                                    </div>
                                </div>
                                <div class="card-body ">
                                    <div class="row p-b-20">
                                        <div class="col-md-6 col-sm-6 col-6">
                                            <div>
                                                
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-sm-6 col-6">
                                            <div class="btn-group pull-right">
                                                <button class="btn deepPink-bgcolor  btn-outline dropdown-toggle" data-toggle="dropdown">Tools
                                                    <i class="fa fa-angle-down"></i>
                                                </button>
                                                <ul class="dropdown-menu pull-right">
                                                    <li>
                                                        <a href="/successful/vice-president/pdf">
                                                            <i class="fa fa-file-pdf-o"></i> Save as PDF </a>
                                                    </li>
                                                   
                                                </ul>
                                            </div>
                                        </div>
                                    </div>

                                     <div class="table-responsive">
                                        <table class="table table-striped table-bordered table-hover table-checkable order-column full-width" id="example4">
                                        <thead>
                                            <tr>
                                               
                                                <th> Name</th>
                                                <th> Email </th>
                                                <th> Department</th>
                                                <th> Level </th>
                                                <th> Matric Number </th>
                                                <th> Position </th>
                                                <th> CGPA </th>
                                                <th> </th>
                                                <th></th>
                                                

                                            </tr>
                                        </thead>
                                        <tbody>

                                    @foreach($successful->candidates as $candidate)
                                        @if($candidate->position === $vice_president)

                                       
                                                <tr class="odd gradeX">
                                                
                                                    <td> {{$candidate->name}} </td>

                                                    <td> {{$candidate->email}} </td>

                                                    <td> {{$candidate->department}} </td>

                                                    <td> {{$candidate->level}} </td>

                                                    <td> {{$candidate->matric_number}} </td>

                                                    <td> {{$candidate->position}} </td>

                                                    <td> {{$candidate->cgpa}} </td>

                                                <td>
                                                    <a href="/mail/{{$candidate->id}}-{{Str::slug($candidate->name)}}/vice-president">
                                                        <button class="btn btn-info">
                                                            <i class="fa fa-envelope"></i>Send Mail
                                                        </button> 
                                                    </a>
                                                 
                                                </td>

                                                 <td>
                                                    <a href="/admin/delete/{{$candidate->id}}-{{Str::slug($candidate->name)}}/vice-president">
                                                        <button class="btn btn-danger">
                                                            <i class="fa fa-trash"></i>Delete
                                                        </button>
                                                    </a>
                                                </td>
                                              </tr>
                                                @else
                                                @endif
                                                 
                                            @endforeach

                                        
                                        </tbody>
                                    </table>
                                </div>   
                                </div>

                                        <div class="container">
                                    
                                        <div class=" col-md-6 mb-3">  
                                             <h4>To Send Mail to all the Candidates:</h4>
                                             <a href="/mail/candidates/vice-president">
                                             <button class="btn btn-info">
                                                     <i class="fa fa-envelope"></i>
                                                     Send Mail to All
                                            </button> <br> 
                                            </a> 

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