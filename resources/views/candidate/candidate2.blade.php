@extends('layouts.master')

@section('title', 'Candidates')

@section('content')
	<section class="hero-vote">
		<div style="padding-top: 10px;" class="mb-0">
		<div class="container">
			<div class="row">
				<div class="col-md-6 offset-md-3 ">
					@include('includes.message')
					<div class="card shadow-lg bg-white rounded">
						<div><h5 class="text-center text-info"><u>Candidates Registration</u></h5></div>
						<div class="card-body">
							<form method="POST" action="{{route('secondCandidateRegistration')}}">
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
										<option value=" ">Select Department</option>
										<option value="Accounting">Accounting</option>
										<option value="Business Admin">Business Administration</option>
										<option value="Chemistry">Chemistry</option>
										<option value="Computer Science">Computer Science</option>
										<option value="Civil Engineering">Civil Engineering</option>
										<option value="Food Science">Food Science Technology</option>
										<option value="Estate">Estate Management</option>
									</select>
									
								</div> 

								<div class="form-group">
									<label for="department"><h6 class="text-info">Level</h6></label>
									<input class="form-control rounded-pill border-info" name="level" value = "{{session()->get('level')}}" disabled>
								</div>


								<div class="form-group">
									<label for="matric-number"><h6 class="text-info">Matric Number</h6></label>
									<input type="text" name = "matric_number" class="form-control rounded-pill border-info" value = "{{session()->get('matric_number')}}" disabled>
								</div>

									<button class="btn btn-info rounded-pill text-center">
										Continue
									</button>
							</form>
						</div>


							<div class="card-footer">
								<button class="btn btn-secondary float-right">Home</button>
							</div>

					
				</div>
			</div>
				
			</div>
	</div>
	</div>
	
	</section>
	
@endsection

								