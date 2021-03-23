@extends('layouts.master')

@section('title', 'Candidates')

@section('content')
	<section class="hero-vote">
		<div style="padding-top: 100px;" class="mb-0">
		<div class="container">
			<div class="row">
				<div class="col-md-6 offset-md-3 ">
					@include('includes.message')	
					<div class="card shadow-lg bg-white rounded">
						<div><h5 class="text-center text-info"><u>Verified Candidates</u></h5></div>
							<div class="card-body">
									<form method = "POST" action="{{route('verifiedCandidate')}}">
									@csrf

									<div class="form-group">
										<label for="matric_number">
											<h6 class="text-info">Your Matric Number</h6>
										</label>

										<input type="text" name = "matric_number" value="{{old('matric_number')}}" class="form-control rounded-pill border-info" placeholder="Your Matric Number">
									</div>

									<div class="row">
										<div class="col-md-6 mb-2">
											<button class="btn btn-info rounded-pill text-center" id="verify-button">
												Proceed to Register
										</button>
										</div>

										<div class="col-md-6">
										<a href="{{route('verify')}}">
											<h6 class="text-info">Not Yet Verified? Click Here!</h6>
										</a>	
										</div>
									</div>		
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


