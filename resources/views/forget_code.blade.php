@extends('layouts.master')

@section('title', 'Forgot Code')

@section('content')

		<div style="padding-top: 100px;" class="mb-5" >
		<div class="container hero-vote">
			<div class="row">
				<div class="col-md-6 offset-md-3">
					@include('includes.message')
					<div class="card shadow-lg p-3 bg-white rounded">
						<div><h5 class="text-center text-info"><u>Forgot Code</u></h5></div>

						<small class="text-center text-danger">
								Please input email and matric number used during registration
						</small>

						<div class="card-body">
							
							<form method="POST" action="{{route('sendCode')}}">
								@csrf
								<div class="form-group">
									<label for="matric_number"><h6 class="text-info">Matric Number</h6></label>
									<input type="text" name = "matric_number" value= "{{old('matric_number')}}" class="form-control rounded-pill border-info" placeholder="Your Matric Number">
								</div>

								<div class="form-group">
									<label for="email"><h6 class="text-info">Email</h6></label>
									<input type="email" name ="email" class="form-control rounded-pill border-info" placeholder="Your Email">
								</div>

								<button class="btn btn-info rounded-pill text-center">Send Code</button>
							</form>
						</div>

						<div class="card-footer">
							<a href="/">
							<button class="btn btn-secondary float-right">Home</button>
							</a>
						</div>
					
				</div>
			</div>
				
			</div>
	</div>
	</div>
	
	



@endsection