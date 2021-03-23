@extends('layouts.master')

@section('title', 'Login')

@section('content')

		<div style="padding-top: 100px;" class="mb-5" >
		<div class="container hero-vote">
			<div class="row">
				<div class="col-md-6 offset-md-3">
					@include('includes.message')
					<div class="card shadow-lg p-3 bg-white rounded">
						<div><h5 class="text-center text-info"><u>Login To Vote</u></h5></div>
						<div class="card-body">
							<form method="POST" action="{{route('loginStudent')}}">
								@csrf
								<div class="form-group">
									<label for="matric_number"><h6 class="text-info">Matric Number</h6></label>
									<input type="text" name = "matric_number" value= "{{old('matric_number')}}" class="form-control rounded-pill border-info" placeholder="Your Matric Number">
								</div>

								<div class="form-group">
									<label for="name"><h6 class="text-info">Your Code</h6></label>
									<input type="text" name ="voting_code" value= "{{old('voting_code')}}"  class="form-control rounded-pill border-info" placeholder="Your Code">
								</div>

								<button class="btn btn-info rounded-pill text-center">Start Vote</button>
							</form>
						</div>
					
				</div>
			</div>
				
			</div>
	</div>
	</div>
	
	



@endsection