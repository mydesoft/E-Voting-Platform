	<!-- start sidebar menu -->
 			<div class="sidebar-container">
 				<div class="sidemenu-container navbar-collapse collapse fixed-menu">
	                <div id="remove-scroll">
	                    <ul class="sidemenu page-header-fixed p-t-20" data-keep-expanded="false" data-auto-scroll="true" data-slide-speed="200">
	                        <li class="sidebar-toggler-wrapper hide">
	                            <div class="sidebar-toggler">
	                                <span></span>
	                            </div>
	                        </li>
	                        <li class="sidebar-user-panel">
	                            <div class="user-panel">
	                                <div class="row">
                                            <div class="sidebar-userpic">
                                                <img src="{{asset('assets/img/dp.jpg')}}" class="img-responsive">
                                            </div>
                                        </div>
                                        <div class="profile-usertitle">
                                            <div class="sidebar-userpic-name"> {{Auth::guard('admin')->user()->name}} </div>
                                            <div class="profile-usertitle-job"> Admin </div>
                                        </div>
                                        <div class="sidebar-userpic-btn">
									        <a class="tooltips" href="{{route('adminProfile')}}" data-placement="top" data-original-title="Profile">
									        	<i class="material-icons">person_outline</i>
									        </a>
									       
									        <a class="tooltips" href="{{route('adminLogout')}}" data-placement="top" data-original-title="Logout">
									        	<i class="material-icons">input</i>
									        </a>
									    </div>
	                            </div>
	                        </li>
	                       
	                        <li class="nav-item start active">
	                            <a href="{{route('adminDashboard')}}" class="nav-link nav-toggle">
	                                <i class="material-icons">dashboard</i>
	                                <span class="title">Dashboard</span>
                                	<span class="selected"></span>
                                	
	                            </a>
	                        
	                        </li>
	                        <li class="nav-item">
	                            <a href="#" class="nav-link nav-toggle">
	                                <i class="fa fa-users"></i>
	                                <span class="title">Registered Students</span>
	                                <span class="arrow"></span>
	                            </a>
	                            <ul class="sub-menu">
	                                <li class="nav-item">
	                                    <a href="{{route('100LevelStudents')}}" class="nav-link ">
	                                    	<i class="fa fa-user-circle"></i>
	                                        <span class="title">100L Students</span>
	                                    </a>
	                                </li>
	                                <li class="nav-item">
	                                    <a href="{{route('200LevelStudents')}}" class="nav-link ">
	                                    	<i class="fa fa-user-circle"></i>
	                                        <span class="title">200L Students</span>
	                                    </a>
	                                </li>
	                                <li class="nav-item">
	                                    <a href="{{route('300LevelStudents')}}" class="nav-link ">
	                                    	<i class="fa fa-user-circle"></i>	                                	<span class="title">300L Students</span>
	                                    </a>
	                                </li>

	                                 <li class="nav-item">
	                                    <a href="{{route('400LevelStudents')}}" class="nav-link ">
	                                    	<i class="fa fa-user-circle"></i>
	                                        <span class="title">400L Students</span>
	                                    </a>
	                                </li>

	                                 <li class="nav-item">
	                                    <a href="{{route('500LevelStudents')}}" class="nav-link ">
	                                    	<i class="fa fa-user-circle"></i>
	                                        <span class="title">500L Students</span>
	                                    </a>
	                                </li>
	                            </ul>
	                        </li>


	                        <li class="nav-item">
	                            <a href="{{route('showVerifiedCandidate')}}" class="nav-link nav-toggle">
	                                <i class="fa fa-user-circle"></i>
	                                <span class="title">Verified Candidates</span>
	                                
	                            </a>
	                          
	                        </li>


	                        <li class="nav-item">
	                            <a href="#" class="nav-link nav-toggle">
	                                <i class="fa fa-users"></i>
	                                <span class="title">Registered Candidates</span>
	                                <span class="arrow"></span>
	                            </a>
	                            <ul class="sub-menu">
	                                <li class="nav-item">
	                                    <a href="{{route('presidentCandidate')}}" class="nav-link ">
	                                    	<i class="fa fa-user-circle-o"></i>
	                                        <span class="title">President</span>
	                                    </a>
	                                </li>
	                                <li class="nav-item">
	                                    <a href="{{route('vicePresidentCandidate')}}" class="nav-link ">
	                                    	<i class="fa fa-user-circle-o"></i>
	                                        <span class="title">Vice-President</span>
	                                    </a>
	                                </li>
	                                <li class="nav-item">
	                                    <a href="{{route('generalSecretaryCandidate')}}" class="nav-link ">
	                                    	<i class="fa fa-user-circle-o"></i>
	                                        <span class="title">General-Secretary</span>
	                                    </a>
	                                </li>
	                                 <li class="nav-item">
	                                    <a href="{{route('treasurerCandidate')}}" class="nav-link ">
	                                    	<i class="fa fa-user-circle-o"></i>
	                                        <span class="title">Treasurer</span>
	                                    </a>
	                                </li>
	                                 <li class="nav-item">
	                                    <a href="{{route('directorOfSportsCandidate')}}" class="nav-link ">
	                                    	<i class="fa fa-user-circle-o"></i>
	                                        <span class="title">Director Of Sports</span>
	                                    </a>
	                                </li>
	                                 <li class="nav-item">
	                                    <a href="{{route('directorOfSocialsCandidate')}}" class="nav-link ">
	                                    	<i class="fa fa-user-circle-o"></i>
	                                        <span class="title">Director of Socials</span>
	                                    </a>
	                                </li>
	                                 <li class="nav-item">
	                                    <a href="{{route('welfareCandidate')}}" class="nav-link ">
	                                    	<i class="fa fa-user-circle-o"></i>
	                                        <span class="title">Welfare Director</span>
	                                    </a>
	                                </li>
	                            </ul>
	                        </li>

	                        @if(Auth::guard('admin')->user()->hasRoleSuperAdmin())
	                        	<li class="nav-item">
	                            <a href="#" class="nav-link nav-toggle">
	                                <i class="material-icons">group</i>
	                                <span class="title">System Admin(s)</span>
	                                <span class="arrow"></span>
	                               		
	                            </a>
	                            <ul class="sub-menu">
	                                <li class="nav-item">
	                                    <a href="{{route('viewAdmin')}}" class="nav-link ">
	                                    	<i class="fa fa-eye"></i>
	                                        <span class="title">View Admin(s)</span>
	                                    </a>
	                                </li>
	                                <li class="nav-item">
	                                    <a href="{{route('addAdmin')}}" class="nav-link ">
	                                    	<i class="fa fa-user-plus"></i>
	                                        <span>Add New Admin(s)</span>
	                                    </a>
	                                </li>
	                            </ul>
	                        </li>
	                        @endif
	                    

	                        <li class="nav-item">
	                            <a href="#" class="nav-link nav-toggle">
	                                <i class="fa fa-check-square"></i>
	                                <span class="title">Successful Candidates</span>
	                                <span class="arrow"></span>
	                            </a>
	                            <ul class="sub-menu">
	                               <li class="nav-item">
	                                    <a href="{{route('successfulPresident')}}" class="nav-link ">
	                                		<i class="fa fa-check"></i>
	                                        <span class="title">President</span>
	                                    </a>
	                                </li>
	                                <li class="nav-item">
	                                    <a href="{{route('successfulVicePresident')}}" class="nav-link ">
	                                		<i class="fa fa-check"></i>
	                                      	<span class="title">Vice-President</span>
	                                    </a>
	                                </li>
	                                <li class="nav-item">
	                                    <a href="{{route('successfulGeneralSecretary')}}" class="nav-link ">
	                                		<i class="fa fa-check"></i>
	                                        <span class="title">General-Secretary</span>
	                                    </a>
	                                </li>
	                                 <li class="nav-item">
	                                    <a href="{{route('successfulTreasurer')}}" class="nav-link ">
	                                		<i class="fa fa-check"></i>
	                                        <span class="title">Treasurer</span>
	                                    </a>
	                                </li>
	                                 <li class="nav-item">
	                                    <a href="{{route('successfulDOSports')}}" class="nav-link ">
	                                		<i class="fa fa-check"></i>
	                                        <span class="title">Director Of Sports</span>
	                                    </a>
	                                </li>
	                                 <li class="nav-item">
	                                    <a href="{{route('successfulDOSocials')}}" class="nav-link ">
	                                		<i class="fa fa-check"></i>
	                                        <span class="title">Director of Socials</span>
	                                    </a>
	                                </li>
	                                 <li class="nav-item">
	                                    <a href="{{route('successfulWelfare')}}" class="nav-link ">
	                                		<i class="fa fa-check"></i>
	                                        <span class="title">Welfare Director</span>
	                                    </a>
	                                </li> 
	                            </ul>
	                        </li>
	                        
	                       <li class="nav-item">
	                            <a href="#" class="nav-link nav-toggle">
	                                <i class="fa fa-file-archive-o"></i>
	                                <span class="title">Voting Results</span>
	                                
	                            </a>
	                          
	                        </li> 

	                         <li class="nav-item">
	                            <a href="{{route('adminLogout')}}" class="nav-link nav-toggle">
	                                <i class="fa fa-sign-out" style="color: red"></i>
	                                <span>Logout</span>
	                                
	                            </a>
	                          
	                        </li> 
	                        
	                        
	                         
	                                       
	                </div>
                </div>
            </div>
            <!-- end sidebar menu --> 