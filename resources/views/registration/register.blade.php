@extends('layouts.master')

@section('title', 'Register')

@section('content')
	<section class="hero-vote">
		<div style="padding-top: 25px;" class="mb-4">
		<div class="container">
			<div class="row">
				<div class="col-md-6 offset-md-3">
					@include('includes.message')
					<div class="card shadow-lg p-3 bg-white rounded">
						<div><h5 class="text-center text-info"><u>Voting Registration</u></h5></div>
						<form method="POST" action="{{route('studentFirstRegistration')}}">
						@csrf
						<div class="card-body">
							
								<div class="form-group">
									<label for="email"><h6 class="text-info">Email</h6></label>
									<input type="email" name = "email" value= "{{old('email')}}" class="form-control rounded-pill border-info" placeholder="Your Email">
								</div>

								<div class="form-group">
									<label for="name"><h6 class="text-info">Name</h6></label>
									<input type="text" name ="name" value= "{{old('name')}}" class="form-control rounded-pill border-info" placeholder="Your Name">
								</div>

								<div class="form-group">
									<label for="gender"><h6 class="text-info">Gender</h6></label>
									<select name ="gender" class="form-control rounded-pill border-info">
										<option value="">Select Gender</option>
										<option value="Male" {{old('gender') == 'Male' ? 'selected' : ''}} >
											Male
										</option>

										<option value="Female" {{old('gender') == 'Female' ? 'selected' : ''}}>
											Female
										</option>
									</select>
								</div>

								<div class="form-group">
									<label for="level"><h6 class="text-info">Level</h6></label>
									<select name ="level" class="form-control rounded-pill border-info">

										<option value="">Select Level</option>

										<option value="100L" {{old('level') == '100L' ? 'selected' : ''}}>
											100L
										</option>

										<option value="200L" {{old('level') == '200L' ? 'selected' : ''}}>
											200L
										</option>

										<option value="300L" {{old('level') == '300L' ? 'selected' : ''}}>
											300L
										</option>

										<option value="400L" {{old('level') == '400L' ? 'selected' : ''}}>
											400L
										</option>

										<option value="500L" {{old('level') == '500L' ? 'selected' : ''}}>
											500L
										</option>
									</select>
									
								</div>
     							
								<button class="btn btn-info rounded-pill text-center">Continue</button>
						</div>		
						</form>	
				<br>
				<div class="card-footer">
    				<a href="{{route('index')}}">
    					<button class="btn btn-secondary btn-sm float-right">Back To Home</button>
    				</a>
    		    </div>
			</div>
				
			</div>
	</div>
	</div>

	</section>
	
@endsection