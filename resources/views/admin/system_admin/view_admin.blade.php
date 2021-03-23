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
                                
                                <li class="active">View Admin(s)</li>
                            </ol>
                        </div>
                    </div>
                  
                  
                    
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-head">
                                    <header>View Admin(s)</header>
                                    <div class="tools">
                                        <a class="fa fa-repeat btn-color box-refresh" href="javascript:;"></a>
                                        <a class="t-collapse btn-color fa fa-chevron-down" href="javascript:;"></a>
                                        <a class="t-close btn-color fa fa-times" href="javascript:;"></a>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="col-sm-12 col-md-6"><div id="example4_filter" class="dataTables_filter"><label>Search:<input type="search" class="form-control form-control-sm" placeholder="" aria-controls="example4"></label></div></div>

                                   
                                        @if($role->admins->count() > 0)
                                        <div class="table-responsive">
                                        <table class="table table-striped table-bordered table-hover table-checkable order-column full-width" id="example4">
                                         <thead>
                                            <tr>
                                               
                                                <th> Name</th>
                                                <th> Email </th>
                                                <th> Username </th>
                                                <th></th>
                                                <th></th>
                                                <th></th>
                                                
                                            </tr>
                                        </thead>
                                        <tbody>

                                            @foreach($role->admins as $admin)

                                                    <tr class="odd gradeX">
                                                
                                                        <td> {{$admin->name}} </td>

                                                        <td> {{$admin->email}} </td>

                                                        <td> {{$admin->username}} </td>
                                               
                                                        <td>
                                                            <a href="/admin/{{$admin->id}}-{{Str::slug($admin->username)}}/edit">
                                                            <button class="btn btn-info">
                                                                <i class="fa fa-edit"></i>Edit
                                                            </button>
                                                            </a>

                                                        </td>

                                                        <td>
                                                            <a href="/admin/{{$admin->id}}-{{Str::slug($admin->username)}}/password">
                                                            <button class="btn btn-success">
                                                                <i class="fa fa-edit"></i>Change Password
                                                            </button>
                                                            </a>

                                                        </td>

                                                         <td>
                                                            <a href="/admin/{{$admin->id}}-{{Str::slug($admin->name)}}/delete">
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
                                     <h4 class="text-center">No Admins Yet!</h4>
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