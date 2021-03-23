@extends('layouts.admin_master')

@section('title', 'Registered Candidate')

@section('content')
            <!-- start page content -->
            <div class="page-content-wrapper">
                <div class="page-content">
                    <div class="page-bar">
                        <div class="page-title-breadcrumb">
                            
                            <ol class="breadcrumb page-breadcrumb pull-right">
                                <li><i class="fa fa-home"></i>&nbsp;<a class="parent-item" href="{{route('adminDashboard')}}">Dashboard</a>&nbsp;<i class="fa fa-angle-right"></i>
                                </li>
                                
                                <li class="active"> Welfare</li>
                            </ol>
                        </div>
                    </div>
                  

                    <div class="row">
                        <div class="col-md-12">
                            @include('includes.message')
                            <div class="card card-topline-primary">
                                <div class="card-head">
                                    <header>Registered Welfare Candidate</header>
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
                                                        <a href="/candidate/welfare/pdf">
                                                            <i class="fa fa-file-pdf-o"></i> Save as PDF </a>
                                                    </li>
                                                   
                                                </ul>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-sm-12 col-md-6"><div class="dataTables_filter"><label>Search:<input type="search" class="form-control form-control-sm"></label></div></div>

                                    <h4>Total Records: {{$welfares->count()}}</h4>

                                    @if($welfares->count() > 0)

                                    <div class="table-responsive">
                                    <table class="table table-striped table-bordered table-hover table-checkable order-column full-width" id="example4">
                                        <thead>
                                            <tr>
                                               
                                                <th> Name</th>
                                                <th> Email </th>
                                                <th> Department</th>
                                                <th> Level </th>
                                                <th> Matric Number </th>
                                                <th> CGPA </th>
                                                <th>Phone Number</th>
                                                <th>Gender</th>
                                                <th> Reason</th>
                                                <th></th>
                                                <th></th>
                                                <th></th>

                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($welfares as $welfare)
                                                <tr class="odd gradeX">
                                                
                                                <td>{{$welfare->name}} </td>
                                                <td>{{$welfare->email}}</td>
                                                <td> {{$welfare->department}} </td>
                                                <td>{{$welfare->level}}</td>
                                                <td>{{$welfare->matric_number}}</td>
                                                <td>{{$welfare->cgpa}}</td>
                                                <td>{{$welfare->phone_number}}</td>
                                                <td>{{$welfare->gender}}</td>
                                                <td>{{$welfare->reason}}</td>
                                                <td>
                                                    <a href="{{$welfare->candidatePath()}}">
                                                    <button class="btn btn-info"><i class="fa fa-edit">    
                                                       </i>Edit
                                                    </button>
                                                    </a>
                                                </td>

                                                <td>
                                                    @if($welfare->hasSuccessfulStatus())
                                                        <button class="btn btn-success" disabled="true"><i class="fa fa-check">    
                                                       </i>Successful
                                                       </button>
                                                    @else
                                                         <a href="/status/{{$welfare->id}}-{{Str::slug($welfare->name)}}/president">
                                                         <button class="btn btn-success"><i class="fa fa-check">    
                                                         </i>Confirm
                                                         </button>
                                                    </a>
                                                    @endif
                                                   
                                                </td>

                                                 <td>
                                                    <a href="{{route('deleteCandidate', $welfare->id)}}">
                                                    <button class="btn btn-danger">
                                                        <i class="fa fa-trash"></i>Delete
                                                    </button>
                                                    </a>
                                                </td>
                                            </tr>
                                            @endforeach
                                          </tbody>
                                    </table>
                                </div>
                                    @else
                                        <h4 class="text-center">No Candidate Yet!</h4>
                                    @endif

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