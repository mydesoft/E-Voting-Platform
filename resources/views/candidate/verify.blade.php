@extends('layouts.master')

@section('title', 'Candidates')

@section('content')
	<section class="hero-vote">
		<div style="padding-top: 10px;" class="mb-0">
		<div class="container">
			<div class="row">
				<div class="col-md-6 offset-md-3 ">
					@if(!(session()->has('error') || session()->has('success')))
						<div class="alert alert-danger">
							<small>Important Information: Please endeavor to put your correct details.</small>
							<small> Any wrong details might have you screened out.</small>
							<small>Your Matric Number and CGPA are automatically saved by the sysytem, you can't change them again after verification.</small>
						</div>
					@endif

					@include('includes.message')
						
					<div class="card shadow-lg bg-white rounded">
						<div><h5 class="text-center text-info"><u>Candidates Verification</u></h5></div>
							<div class="card-body">

								<div class="d-flex align-items-center invisible" id="spin">
 								 <strong>Checking Eligiblity...</strong>
 								 <div class="spinner-border ml-auto" role="status" aria-hidden="true"></div>
								</div>

								@if(session()->has('success'))
								<div class="row">
									<div class="col-md-6 offset-md-4">
										<a href="{{route('verified')}}">
											<button class="btn btn-info btn-lg rounded-pill">Continue</button>
										</a>
									</div>
								</div>
									
								@else
								<div id="show-form">
									<form method = "POST" action="{{route('verifyCandidate')}}">
									@csrf

									<div class="form-group">
										<label for="cgpa"><h6 class="text-info">Your Matric Number</h6></label>
										<input type="text" name = "matric_number" value="{{old('matric_number')}}" class="form-control rounded-pill border-info" placeholder="Your Matric Number">
									</div>


									<div class="form-group">
										<label for="cgpa"><h6 class="text-info">Your CGPA</h6></label>
										<input type="text" name = "cgpa" value="{{old('cgpa')}}" class="form-control rounded-pill border-info" placeholder="Your CGPA (e.g : 3.0, 3.5, ...)">
									</div>

									<div class="form-group">
										<label for="level"><h6 class="text-info">Level</h6></label>
										<select class="form-control rounded-pill border-info" name="level">
											<option value="">Select Level</option>

											<option value="100L" {{old('level') == '100L'? 'selected' : ''}}>
												100L
											</option>

											<option value="200L" {{old('level') == '200l'? 'selected' : ''}}>
												200L
											</option>

											<option value="300L" {{old('level') == '300L'? 'selected' : ''}}>
												300L
											</option>

											<option value="400L" {{old('level') == '400L'? 'selected' : ''}}>
												400L
											</option>

											<option value="500L" {{old('level') == '500L'? 'selected' : ''}}>
												500L
											 </option>
										</select>
									</div>
									<div class="row">
										<div class="col-md-4 mb-2">
											<button class="btn btn-info rounded-pill text-center" id="verify-button">
												Check Eligibility
											</button>
										</div>

										<div class="col-md-6">
										<a href="{{route('verified')}}">
											<h6 class="text-info">Already Verified? Click Here!</h6>
										</a>	
										</div>
									</div>
									

							</form>
						</div>
					@endif
							
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

@if(!session()->has('error'))
	@section('extra-js')
	<script src="{{asset('js/app.js')}}"></script>
	<script>
		(function(){
			const verifyButton = document.getElementById('verify-button');
			const showForm = document.getElementById('show-form');
			const spinVerification = document.getElementById('spin');



			const showSpinner = () =>{

				spinVerification.classList.toggle('invisible')
			};

			const hideForm = ()=> {
				showForm.classList.toggle('invisible')
			};

			const connectHandler = () => {
				hideForm();
				showSpinner();
			}; 

			verifyButton.addEventListener('click', connectHandler);
		})();
		
	</script>
@endsection
@endif
