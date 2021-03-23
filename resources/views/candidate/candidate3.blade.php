@extends('layouts.master')

@section('title', 'Candidates')

@section('content')
	<div style="padding-top: 20px;" class="hero-vote mb-2">
		<div class="container">
			<div class="row">
				<div class="col-md-6 offset-md-3">
					@include('includes.message')
					<div class="card shadow-lg p-3 bg-white rounded">
						<div><h5 class="text-center text-info"><u>Candidates Registration</u></h5></div>
						<div class="card-body">
							<form method = "POST" action="{{route('thirdCandidateRegistration')}}" enctype= "multipart/form-data">
								@csrf
								<div class="form-group">
									<label for="position"><h6 class="text-info">Position</h6></label>
									<select class="form-control rounded-pill border-info" name="position">
										<option value="">Select Postion</option>

									@if($userLevel == $level)
										<option value="president" {{old('position') == 'president' ? 'selected' : ''}}>
											President
										</option>
									@endif

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


								<div class="form-group">
									<label for="reason"><h6 class="text-info">Why this Position?</h6></label>
									<small class="text-muted">Not More Than 100 words</small>
									<textarea type="text" name = "reason" class="form-control rounded-pill border-info" cols="20" rows="2">{{old('reason')}}</textarea>
								</div>

								<div class="form-group">
									<label for="cgpa"><h6 class="text-info">CGPA</h6></label>
									<input type="text" name ="cgpa" value = "{{session()->get('CGPA')}}" class="form-control rounded-pill border-info" disabled>
								</div>

								<div class="form-group">
									<label for="grade"><h6 class="text-info">Grade</h6></label>
									<select class="form-control rounded-pill border-info" name="grade">
										<option value="Select Department">Select Grade</option>

										<option value="first-class" {{old('grade') == 'first-class' ? 'selected' : ''}}>
											First Class
										</option>

										<option value="second-class-upper" {{old('grade') == 'second-class-upper' ? 'selected' : ''}}>
											Second Class Upper
										</option>

										<option value="second-class-lower" {{old('grade') == 'second-class-lower' ? 'selected' : ''}}>
											Second Class Lower
										</option>
									</select>
								</div>

								<div class="form-group">
									<label for="image"><h6 class="text-info">Select Your Image</h6></label>
									<small class="text-danger readonly">Size should not be more than 200kb</small>
									<input type="file" name ="image" class="form-control rounded-pill border-info">
								</div>

								<button class="btn btn-info btn-outline-secondary text-white border-info btn-lg rounded-pill text-center float-right">Finish</button>
							</form>
						</div>
					
				</div>
			</div>
				
			</div>
	</div>
	</div>
	
@endsection