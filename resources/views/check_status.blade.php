@extends('layouts.master')

@section('title', 'Check Status')

@section('content')

		<div style="padding-top: 100px;" class="mb-5" >
		<div class="container hero-vote">
			<div class="row">
				<div class="col-md-6 offset-md-3">
					@include('includes.message')
					<div class="card shadow-lg p-3 bg-white rounded">
						<div><h5 class="text-center text-info"><u>Check Status</u></h5></div>

						<small class="text-center text-danger">
								Please input email and matric number used during registration
						</small>

						<div class="card-body">
							
							<form method="POST" action="{{route('candidateStatus')}}">
								@csrf
								<div class="form-group">
									<label for="matric_number"><h6 class="text-info">Matric Number</h6></label>
									<input type="text" name = "matric_number" value= "{{old('matric_number')}}" class="form-control rounded-pill border-info" placeholder="Your Matric Number">
								</div>

								<div class="form-group">
									<label for="position"><h6 class="text-info">Position</h6></label>
									<select class="form-control rounded-pill border-info" name="position">
										<option value="">Select Postion</option>

										<option value="president" {{old('position') == 'president' ? 'selected' : ''}}>
											President
										</option>
									

										<option value="vice-president" {{old('position') == 'vice-president' ? 'selected' : ''}}>
											Vice-President
										</option>

										<option value="general-secretary" {{old('position') == 'general-secretary' ? 'selected' : ''}}>
											General Secretary
										</option>

										<option value="treasurer" {{old('position') == 'treasurer' ? 'selected' : ''}}>
											Treasurer
										</option>

										<option value="welfare" {{old('position') == 'welfare' ? 'selected' : ''}}>
											Welfare Director
										</option>

										<option value="DO-Sports" {{old('position') == 'DO-Sports' ? 'selected' : ''}}>
											Director of Sports
										</option>

										<option value="DO-Socials" {{old('position') == 'DO-Socials' ? 'selected' : ''}}>
											Director of Socials
										</option>
									</select>
								</div>

								<button class="btn btn-info rounded-pill text-center">Check Status</button>
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