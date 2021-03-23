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
                                
                                <li class="active">Director of Sports</li>
                            </ol>
                        </div>
                    </div>
                  

                    <div class="row">
                        <div class="col-md-12">
                            @include('includes.message')
                            <div class="card card-topline-primary">
                                <div class="card-head">
                                    <header>Registered Director of Sports Candidate</header>
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
                                                        <a href="/candidate/DO_Sports/pdf">
                                                            <i class="fa fa-file-pdf-o"></i> Save as PDF </a>
                                                    </li>
                                                   
                                                </ul>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-sm-12 col-md-6"><div id="example4_filter" class="dataTables_filter"><label>Search:<input type="search" class="form-control form-control-sm" placeholder="" aria-controls="example4"></label></div></div>

                                    <h4>Total Records: {{$DO_Sports->count()}}</h4>

                                    @if($DO_Sports->count() > 0)

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
                                            @foreach($DO_Sports as $DO_Sport)
                                                <tr class="odd gradeX">
                                                
                                                <td>{{$DO_Sport->name}} </td>
                                                <td>{{$DO_Sport->email}}</td>
                                                <td> {{$DO_Sport->department}} </td>
                                                <td>{{$DO_Sport->level}}</td>
                                                <td>{{$DO_Sport->matric_number}}</td>
                                                <td>{{$DO_Sport->cgpa}}</td>
                                                <td>{{$DO_Sport->phone_number}}</td>
                                                <td>{{$DO_Sport->gender}}</td>
                                                <td>{{$DO_Sport->reason}}</td>
                                                <td>
                                                    <a href="{{$DO_Sport->candidatePath()}}">
                                                    <button class="btn btn-info"><i class="fa fa-edit">    
                                                       </i>Edit
                                                    </button>
                                                    </a>
                                                </td>
                                                <td>
                                                    @if($DO_Sport->hasSuccessfulStatus())
                                                        <button class="btn btn-success" disabled="true"><i class="fa fa-check">    
                                                       </i>Successful
                                                       </button>
                                                    @else
                                                         <a href="/status/{{$DO_Sport->id}}-{{Str::slug($DO_Sport->name)}}/president">
                                                         <button class="btn btn-success"><i class="fa fa-check">    
                                                         </i>Confirm
                                                         </button>
                                                    </a>
                                                    @endif
                                                   
                                                </td>

                                                 <td>
                                                    <a href="{{route('deleteCandidate', $DO_Sport->id)}}">
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