@extends('layouts.admin_master')

@section('title', 'Admin Dashboard')

@section('content')
    
			<!-- start page content -->
            <div class="page-content-wrapper">
                <div class="page-content">
                    <div class="page-bar">
                        <div class="page-title-breadcrumb">
                            <div class=" pull-left">
                                <div class="page-title">Welcome Admin</div>
                            </div>
                            <ol class="breadcrumb page-breadcrumb pull-right">
                                <li><i class="fa fa-home"></i>&nbsp;<a class="parent-item" href="{{route('adminDashboard')}}">Home</a>&nbsp;<i class="fa fa-angle-right"></i>
                                </li>
                                <li class="active">Dashboard</li>
                            </ol>
                        </div>
                    </div>
                   <!-- start widget -->
					<div class="state-overview">
						<div class="row">
					        <div class="col-xl-3 col-md-6 col-12">
					          <div class="info-box bg-blue">
					            <span class="info-box-icon push-bottom"><i class="fa fa-users"></i></span>
					            <div class="info-box-content">
					              <span class="info-box-text">Registered <br>Students</span>
					              <span class="info-box-number">{{$registeredStudents}}</span>
					            </div>
					            <!-- /.info-box-content -->
					          </div>
					          <!-- /.info-box -->
					        </div>
					        <!-- /.col -->
					        <div class="col-xl-3 col-md-6 col-12">
					          <div class="info-box bg-orange">
					            <span class="info-box-icon push-bottom"><i class="fa fa-group"></i></span>
					            <div class="info-box-content">
					              <span class="info-box-text">Registered <br> Candidates</span>
					              <span class="info-box-number">{{$registeredCandidates}}</span> 
					            </div>
					            <!-- /.info-box-content -->
					          </div>
					          <!-- /.info-box -->
					        </div>
					        <!-- /.col -->
					        <div class="col-xl-3 col-md-6 col-12">
					          <div class="info-box bg-purple">
					            <span class="info-box-icon push-bottom"><i class="material-icons">group</i></span>
					            <div class="info-box-content">
					              <span class="info-box-text">All <br> Admins</span>

					              <span class="info-box-number">{{$roleAdmin->admins()->count()}}</span> 
					            </div>
					            <!-- /.info-box-content -->
					          </div>
					          <!-- /.info-box -->
					        </div>
					        <!-- /.col -->
					        <div class="col-xl-3 col-md-6 col-12">
					          <div class="info-box bg-success">
					            <span class="info-box-icon push-bottom"><i class="fa fa-user-circle"></i></span>
					            <div class="info-box-content">
					              <span class="info-box-text">Verified <br> Candidates</span>
					              <span class="info-box-number">{{$verifiedCandidates}}</span>
					            </div>
					            <!-- /.info-box-content -->
					          </div>
					          <!-- /.info-box -->
					        </div>
					        <!-- /.col -->
					      </div>
						</div>
					<!-- end widget -->
                
                    <div class="row">
                       
                        <div class="col-md-4 col-sm-12 col-12">
                        	<div class="card  card-box">
                                <div class="card-head">
                                    <header>Registered Students</header>
                                    <div class="tools">
                                        <a class="fa fa-repeat btn-color box-refresh" href="javascript:;"></a>
	                                    <a class="t-collapse btn-color fa fa-chevron-down" href="javascript:;"></a>
	                                    <a class="t-close btn-color fa fa-times" href="javascript:;"></a>
                                    </div>
                                </div>
                                <div class="card-body no-padding height-9">
                                    <div class="row">
                                        <div class="noti-information notification-menu">
                                            <div class="notification-list mail-list not-list small-slimscroll-style">
                                                <a href="{{route('100LevelStudents')}}" class="single-mail"> <span class="icon bg-primary"> <i class="fa fa-user-o"></i>
												</span> <span class="text-purple">Registerd 100 Level Students</span> <br>Total Number:{{$_100LevelStudents->count()}} 
                                                </a>
                                             
                                                <a href="{{route('200LevelStudents')}}" class="single-mail"> <span class="icon bg-primary"> <i class="fa fa-user-o"></i>
												</span> <span class="text-purple">Registerd 200 Level Students</span><br> Total Number: {{$_200LevelStudents->count()}}   
                                                </a>
                                               
                                                <a href="{{route('300LevelStudents')}}" class="single-mail"> <span class="icon bg-primary"> <i class="fa fa-user-o"></i>
												</span> <span class="text-purple">Registerd 300 Level Students</span><br> Total Number: {{$_300LevelStudents->count()}}   
                                                </a>


                                                 <a href="{{route('400LevelStudents')}}" class="single-mail"> <span class="icon bg-primary"> <i class="fa fa-user-o"></i>
												</span> <span class="text-purple">Registerd 400 Level Students</span><br> Total Number: {{$_400LevelStudents->count()}}  
                                                </a>

                                                 <a href="{{route('500LevelStudents')}}" class="single-mail"> <span class="icon bg-primary"> <i class="fa fa-user-o"></i>
												</span> <span class="text-purple">Registerd 500 Level Students</span><br> Total Number: {{$_500LevelStudents->count()}}  
                                                </a>
                                            </div>
											<div class="full-width text-center p-t-10" >
												<p class="text-dark margin-0"><u>Total Number of Registered Students:{{$registeredStudents}} </u></p>
											</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        

                         <div class="col-md-4 col-sm-12 col-12">
                        	<div class="card  card-box">
                                <div class="card-head">
                                    <header>Registered Candidates</header>
                                    <div class="tools">
                                        <a class="fa fa-repeat btn-color box-refresh" href="javascript:;"></a>
	                                    <a class="t-collapse btn-color fa fa-chevron-down" href="javascript:;"></a>
	                                    <a class="t-close btn-color fa fa-times" href="javascript:;"></a>
                                    </div>
                                </div>
                                <div class="card-body no-padding height-9">
                                    <div class="row">
                                        <div class="noti-information notification-menu">
                                            <div class="notification-list mail-list not-list small-slimscroll-style">
                                                <a href="{{route('presidentCandidate')}}" class="single-mail"> <span class="icon bg-info"> <i class="fa fa-user-o"></i>
												</span> <span class="text-purple">Candidates for President</span> 
                                                <br>
                                                Total Number: {{$president->count()}}  
                                                </a>
                                             
                                                <a href="{{route('vicePresidentCandidate')}}" class="single-mail"> <span class="icon bg-info"> <i class="fa fa-user-o"></i>
												</span> <span class="text-purple">Candidates for Vice-President</span> <br>
                                                Total Number: {{$vicePresident->count()}}    
                                                </a>
                                               
                                                <a href="{{route('generalSecretaryCandidate')}}" class="single-mail"> <span class="icon bg-info"> <i class="fa fa-user-o"></i>
												</span> <span class="text-purple">Candidates for General Secretary</span> <br>
                                                Total Number: {{$general_secretary->count()}}  
                                                </a>


                                                 <a href="{{route('treasurerCandidate')}}" class="single-mail"> <span class="icon bg-info"> <i class="fa fa-user-o"></i>
												</span> <span class="text-purple">Candidates for Treasurer</span><br>
                                                 Total Number: {{$treasurer->count()}}  
                                                </a>

                                                 <a href="{{route('directorOfSportsCandidate')}}" class="single-mail"> <span class="icon bg-info"> <i class="fa fa-user-o"></i>
												</span> <span class="text-purple">Candidates for Director of Sports</span><br>
                                                 Total Number: {{$DO_Sports->count()}}  
                                                </a>

                                                 <a href="{{route('directorOfSocialsCandidate')}}" class="single-mail"> <span class="icon bg-info"> <i class="fa fa-user-o"></i>
												</span> <span class="text-purple">Candidates for Director of Socials</span><br>
                                                 Total Number: {{$DO_Socials->count()}}  
                                                </a>

                                                 <a href="{{route('welfareCandidate')}}" class="single-mail"> <span class="icon bg-info"> <i class="fa fa-user-o"></i>
												</span> <span class="text-purple">Candidates for Director of Welfare</span><br>
                                                 Total Number: {{$welfare->count()}}  
                                                </a>
                                            </div>
											<div class="full-width text-center p-t-10" >
												<p class="text-dark margin-0"><u>Total Number of Registered Candidates: {{$registeredCandidates}}</u></p>
											</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                         <div class="col-md-4 col-sm-12 col-12">
                        	<div class="card  card-box">
                                <div class="card-head">
                                    <header>Verified Candidates</header>
                                    <div class="tools">
                                        <a class="fa fa-repeat btn-color box-refresh" href="javascript:;"></a>
	                                    <a class="t-collapse btn-color fa fa-chevron-down" href="javascript:;"></a>
	                                    <a class="t-close btn-color fa fa-times" href="javascript:;"></a>
                                    </div>
                                </div>
                                <div class="card-body no-padding height-9">
                                    <div class="row">
                                        <div class="noti-information notification-menu">
                                            <div class="notification-list mail-list not-list small-slimscroll-style">
                                                <a href="javascript:;" class="single-mail"> <span class="icon bg-primary"> <i class="fa fa-users"></i>
												</span> <span class="text-purple"></span> Total Number Verified: {{$verifiedCandidates}}  
                                                </a>

                                                @foreach($verifiedCandidateDatas as $verifiedCandidateData)
                                                     <a href="{{route('showVerifiedCandidate')}}" class="            single-mail">
                                                         
                                                        <span class="text-purple">
                                                            Matric Number: {{$verifiedCandidateData->matric_number}}</span><br> View Details...  
                                                     </a>
                                                @endforeach
                                             
                                            </div>
											<div class="full-width text-center p-t-10" >
												<a href="{{route('showVerifiedCandidate')}}" class="btn purple btn-outline btn-circle margin-0">View All</a>
											</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                        <!-- Account Profile start -->
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card card-box">
                                <div class="card-head">
                                    <header>Admin Profile</header>
                                    <div class="tools">
                                        <a class="fa fa-repeat btn-color box-refresh" href="javascript:;"></a>
                                        <a class="t-collapse btn-color fa fa-chevron-down" href="javascript:;"></a>
                                        <a class="t-close btn-color fa fa-times" href="javascript:;"></a>
                                    </div>
                                </div>
                                <div class="card-body no-padding height-9">
                                    <div class="row">
                                        <div class="col-md-6">
                                        <br>
                                            <h4 class="text-center"><u>Account Info</u></h4>
                                            <ul class="list-group">
                                                <li class="list-group-item">
                                                    Name : {{Auth::guard('admin')->user()->name}}
                                                </li>

                                                <li class="list-group-item">
                                                    Email : {{Auth::guard('admin')->user()->email}}
                                                </li>

                                                <li class="list-group-item">
                                                    Username : {{Auth::guard('admin')->user()->username}}
                                                     
                                                </li>

                                                <li class="list-group-item">
                                                    @foreach(Auth::guard('admin')->user()->roles as $role)
                                                        Role : {{$role->name}}
                                                    @endforeach
                                                </li>
                                            </ul>
                                        </div>

                                        <div class="col-md-6">
                                            @include('includes.message')
                                            <h4 class="text-center text-dark"><u>Edit Profile</u></h4>
                                            <form method= "POST" action="{{route('editAdminProfile')}}">
                                                @csrf
                                                   <div class="form-group">
                                                    <label for="name">Name</label>
                                                    <input type="text" name ="name" value= "{{Auth::guard('admin')->user()->name}}" class="form-control" disabled>
                                                </div>

                                                <div class="form-group">
                                                    <label for="email">Email</label>
                                                    <input type="email" name ="email" value= "{{Auth::guard('admin')->user()->email}}" class="form-control" disabled>
                                                </div>

                                                <div class="form-group">
                                                    <label for="username">Username</label>
                                                    <input type="text" name ="username" value= "{{Auth::guard('admin')->user()->username}}" class="form-control" disabled>
                                                </div>  

                                                <button class="btn btn-info invisible" id="edit-button">
                                                    Edit Profile
                                                </button>

                                            </form>

                                            <button class="btn btn-info" id="enable-button">Enable Edit</button>

                                            <button class="btn btn-info float-right invisible" id="cancel-edit">
                                                Cancel Edit
                                            </button>

                                        </div>
                                       
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                     <!-- Account Profile Ends -->
                </div>
            </div>
            <!-- end page content -->
           
       
   @endsection    


   @section('extra-js')
    <script src="{{asset('js/app.js')}}"></script>
    <script>
        (function(){
            const inputs = document.querySelectorAll('input');
            const enabledButton = document.getElementById('enable-button');
            const cancelEditButton = document.getElementById('cancel-edit');


            const showEditProfileButton = () => {
                const editButton = document.getElementById('edit-button');

                editButton.classList.toggle('invisible');
            };

            const enableButton = () => {

                enabledButton.classList.toggle('invisible');
            };

             const cancelEdit = () => {
             
             cancelEditButton.classList.toggle('invisible');

            };

            const enabledInputsHandler = () => {

                for(const input of inputs){
                    input.removeAttribute('disabled');

                }

                enableButton();

                showEditProfileButton();

                cancelEdit();
            };

            const cancelEditButtonHandler = () => {
               for(const input of inputs){
                    input.setAttribute('disabled', true);
                }

                enableButton();

                cancelEdit()

                showEditProfileButton(); 


            };


           enabledButton.addEventListener('click', enabledInputsHandler); 
           cancelEditButton.addEventListener('click', cancelEditButtonHandler); 

        })();
        
    </script>
   @endsection