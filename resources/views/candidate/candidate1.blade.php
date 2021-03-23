@extends('layouts.master')

@section('title', 'Candidates')

@section('content')
	<section class="hero-vote">
		<div style="padding-top: 25px;" class="mb-0">
		<div class="container">
			<div class="row">
				<div class="col-md-6 offset-md-3 ">
					@include('includes.message')
					<div class="card shadow-lg bg-white rounded">
						<div><h5 class="text-center text-info"><u>Candidates Registration</u></h5></div>
						<div class="card-body">
							<form method = "POST" action="{{route('firstCandidateRegistration')}}">
								@csrf
								<div class="form-group">
									<label for="email"><h6 class="text-info">Email</h6></label>
									<input type="email" name = "email" value = "{{old('email')}}" class="form-control rounded-pill border-info" placeholder="Your Email">
								</div>

								<div class="form-group">
									<label for="name"><h6 class="text-info">Name</h6></label>
									<input type="text" name ="name" value = "{{old('name')}}" class="form-control rounded-pill border-info" placeholder="Your Name">
								</div>

								<div class="form-group">
									<label for="name"><h6 class="text-info">Phone Number</h6></label>
									<input type="text" name ="phone_number" value = "{{old('phone_number')}}" class="form-control rounded-pill border-info" placeholder="Your Phone Number">
								</div>


									<div class="form-group">
									<label for="gender"><h6 class="text-info" >Gender</h6></label>
									<select  name ="gender" class="form-control rounded-pill border-info">
										<option value="">Select Gender</option>
										<option value="Male" {{old('gender') == 'Male' ? 'selected' : ''}}>
											Male
										</option>

										<option value="Female" {{old('gender') == 'Female' ? 'selected' : ''}}>
											Female
										</option>
									</select>
									
								</div>
								
									<button class="btn btn-info rounded-pill text-center">
										Continue
									</button>
								
							</form>
						</div>


							<div class="card-footer">
								<a href="/"><button class="btn btn-secondary float-right">Home</button></a>
							</div>

					
				</div>
			</div>
				
			</div>
	</div>
	</div>
	
	</section>
	
@endsection