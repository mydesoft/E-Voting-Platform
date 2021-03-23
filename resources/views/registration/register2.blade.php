@extends('layouts.master')

@section('title', 'Register')

@section('content')
	<section class="hero-vote">
		<div style="padding-top: 20px;" class="mb-4">
		<div class="container">
			<div class="row">
				<div class="col-md-6 offset-md-3">
					@include('includes.message')
					<div class="card shadow-lg p-3 bg-white rounded">
						<div><h5 class="text-center text-info"><u>Voting Registration</u></h5></div>
						
						<div class="card-body">

								@if(!(session()->has('image')))
     									<p class="text-danger" data-target="#image" data-toggle="collapse" class=" border-black rounded-pill">Click Here To Upload Your Image</p>
     								@else
     									<div class="row">
     										<div class="col-md-6 offset-md-3">
     											<p>
     												<h6 class="text-info">Uploaded Image</h6>
     												<img src="{{'storage/studentImage/'.session('image')}}" width="120" height="80">
     											</p>
     										</div>
     									</div>
     							@endif

     					 <div id="image" class="collapse">
    						<form method = "POST" action="{{route('studentImage')}}" enctype="multipart/form-data">
										@csrf
										<div class="row">
											<div class="col-md-9">
												<div class="form-group">
													<label for="image"><h6 class="text-info">Upload Image</h6></label>
													<small class="text-danger">Size should not be more than 200kb</small>
													<input type="file" name="image" class="form-control rounded-pill border-info">
												</div>
											</div>
											<div class="col-md-3">
												<img src="{{asset('img/img1.png')}}" width="100" height="80" class="img-fluid"alt="">
											</div>
										</div>
										<br>	
										<button class="btn btn-info btn-sm float-right ">Upload</button>
									</form>
    				</div><br>

    					<form method="POST" action="{{route('studentSecondRegistration')}}">
						@csrf
								<div class="form-group">
									<label for="faculty"><h6 class="text-info">Faculty</h6></label>
									<select class="form-control rounded-pill border-info" name="faculty">

										<option value="">Select Faculty</option>

										<option value="Engineering" {{old('faculty') == 'Engineering' ? 'selected' : ''}}>
											School of Engineering
										</option>

										<option value="Agriculture" {{old('faculty') == 'Agriculture' ? 'selected' : ''}}>
											School of Agriculture
										</option>

										<option value="Computing" {{old('faculty') == 'Computing' ? 'selected' : ''}}>
											School of Computing
										</option>

										<option value="Earth Sciences" {{old('faculty') == 'Earth Sciences' ? 'selected' : ''}}>
											School of Earth and Mineral Science
										</option>

										<option value="Environmental" {{old('faculty') == 'Environmental' ? 'selected' : ''}}>
											School of Environmental Tech
										</option>

										<option value="Health" {{old('faculty') == 'Health' ? 'selected' : ''}}>
											School of Health
										</option>

										<option value="Management" {{old('faculty') == 'Management' ? 'selected' : ''}}>
											School of Management
										</option>
									</select>
								</div>	
									

								<div class="form-group">
									<label for="department"><h6 class="text-info">Department</h6></label>
									<select class="form-control rounded-pill border-info" name="department">

										<option value="">Select Department</option>

										<option value="Accounting" {{old('department') == 'Accounting' ? 'selected' : ''}}>
											Accounting
										</option>

										<option value="Business Admin" {{old('department') == 'Business Admin' ? 'selected' : ''}}>
											Business Administration
										</option>

										<option value="Chemistry" {{old('department') == 'Chemistry' ? 'selected' : ''}}>
											Chemistry
										</option>

										<option value="Computer Science" {{old('department') == 'Computer Science' ? 'selected' : ''}}>
											Computer Science
										</option>

										<option value="Civil Engineering" {{old('department') == 'Civil Engineering' ? 'selected' : ''}}>
											Civil Engineering
										</option>

										<option value="Food Science" {{old('department') == 'Food Science' ? 'selected' : ''}}>
											Food Science Technology
										</option>

										<option value="Estate" {{old('department') == 'Estate' ? 'selected' : ''}}>
											Estate Management
										</option>
									</select>
								</div>	
									

								<div class="form-group">
									<label for="matric-number"><h6 class="text-info">Matric Number</h6></label>
									<input type="text" name = "matric_number" value = "{{old('matric_number')}}" class="form-control rounded-pill border-info" placeholder="Your Matric Number">
								</div>

								<div class="form-group">
									<input type="hidden" name="image" value="{{session('image')}}">
								</div>

							@if((session()->has('image')))	
							<div>
							<button class="btn btn-info rounded-pill text-center">Register to Vote</button>	
							</div>
							@endif
						</form>
						</div>
						
							
							<div>
								<a href="{{route('index')}}"><button class="btn btn-secondary btn-sm float-right">Back To Home</button></a>
							</div>		
					
			</div>
				
			</div>
	</div>
	</div>
	</section>
@endsection