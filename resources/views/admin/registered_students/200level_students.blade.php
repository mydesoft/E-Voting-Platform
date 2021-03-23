@extends('layouts.admin_master')

@section('title', 'Registered 200Level Students')

@section('content')
            <!-- start page content -->
            <div class="page-content-wrapper">
                <div class="page-content">
                    <div class="page-bar">
                        <div class="page-title-breadcrumb">
                            
                            <ol class="breadcrumb page-breadcrumb pull-right">
                                <li><i class="fa fa-home"></i>&nbsp;<a class="parent-item" href="{{route('adminDashboard')}}">Dashboard</a>&nbsp;<i class="fa fa-angle-right"></i>
                                </li>
                                
                                <li class="active">Registered 200 Level Students</li>
                            </ol>
                        </div>
                    </div>
                  
                  
                    
                    <div class="row">
                        <div class="col-md-12">
                            @include('includes.message')
                            <div class="card card-topline-red">
                                <div class="card-head">
                                    <header>Registered 200 Level Students</header>
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
                                                        <a href="/download/200level/pdf">
                                                            <i class="fa fa-file-pdf-o"></i> Save as PDF </a>
                                                    </li>
                                                   
                                                </ul>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-sm-12 col-md-6">
                                        <div id="example4_filter" class="dataTables_filter">
                                            <label>Search:
                                                <input type="search" id = "search" class="form-control typeahead form-control-sm" placeholder="" >
                                            </label>
                                        </div>
                                    </div>


                                    @if($_200LevelStudentDatas->count() > 0 )
                                         <div class="table-responsive">
                                            <h3 id="total_records">Total records: </h3>
                                    <table class="table table-striped table-bordered table-hover table-checkable order-column full-width" id="example4">
                                        <thead>
                                            <tr>
                                               
                                                <th> Name</th>
                                                <th> Email </th>
                                                <th> Voting COde </th>
                                                <th> Department </th>
                                                <th> Matric Number </th>
                                                <th> Status </th>
                                                <th> Actions </th>
                                            </tr>
                                        </thead>
                                        <tbody>

                                            @foreach($_200LevelStudentDatas as $_200LevelStudentData)
                                                 <tr class="odd gradeX">
                                                
                                                <td> {{$_200LevelStudentData->name}} </td>

                                                <td>{{$_200LevelStudentData->email}}</td>

                                                <td> {{$_200LevelStudentData->voting_code}}</td>
                                                    
                                                <td> {{$_200LevelStudentData->department}}</td>

                                                <td> {{$_200LevelStudentData->matric_number}}</td>

                                                <td> {{$_200LevelStudentData->status}}</td>


                                                <td class="valigntop">
                                                    <div class="btn-group">
                                                        <button class="btn btn-xs deepPink-bgcolor dropdown-toggle no-margin" type="button" data-toggle="dropdown" aria-expanded="false"> Actions
                                                            <i class="fa fa-angle-down"></i>
                                                        </button>
                                                        <ul class="dropdown-menu pull-left" role="menu">
                                                            <li>
                                                                <a href="{{$_200LevelStudentData->edit()}}" class="text-info">
                                                                    <i class="fa fa-edit"></i> Edit </a>
                                                            </li>
                                                            <li>
                                                                <a href="/registered_student/{{$_200LevelStudentData->id}}/delete" class="text-danger">
                                                                    <i class="fa fa-trash" style="color: red"></i> Delete </a>
                                                                
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </td>
                                            </tr>

                                            @endforeach                
                                        </tbody>
                                    </table>

                                          
                                </div>

                                  <div class="col-md-4 offset-md-9">
                             
                                       {{$_200LevelStudentDatas->links()}}
                              
                                    </div>
                                            
                                    @else
                                        <h4 class="text-center">No Registered Students Yet!</h4>
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


{{-- 
   @section('extra-js')
    <script src="{{asset('js/app.js')}}"></script>
    <script>
       $(document).ready(function(){

            fetch_customer_data();

            function fetch_customer_data(query = '')
            {
                $.ajax({
                    url:"{{route('liveSearch.action')}}",
                    method: 'GET',
                    data:{query:query},
                    dataType:'json',
                    success:function(data)
                    {
                        $('tbody').html(data.table_data);
                        // $('#total_records').text(data.total_data);
                    }
                })
            }
                    $(document).on('keyup', '#search', function(){
                        var query = $(this).val();
                        fetch_customer_data(query);

                    })

            

       });
        
    </script>
   @endsection --}}