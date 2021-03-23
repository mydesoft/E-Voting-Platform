@extends('layouts.master')

@section('title', 'Instructions')

@section('content')

		<div style="padding-top: 100px;" class="mb-5" >
		<div class="container hero-vote">
			<div class="row">
				<div class="col-md-6 offset-md-3">
					@include('includes.message')
					<div class="card shadow-lg p-3 bg-white rounded">
						<div><h5 class="text-center text-danger"><u>Please read the instructions before proceeding</u></h5></div>
						<div class="card-body">
							
							<h6 class="text-danger text-center">
								1). Please note you can only vote for a candiadate once, you can't re-vote. 
									Make sure you check your candidates well before clicking the vote button
							</h6>

							<h6 class="text-danger text-center">
								2). You can't go back to the previous candidates page to re-vote for the same candidate, if you try doing so, the system automatically logs you out for cheating.
							</h6>

							<h6 class="text-danger text-center">
								3). Click on the START VOTING BUTTON to start voting.
							</h6>
							

							<div class="col-md-6 offset-md-4 pt-3 ">
								<a href="{{route('president')}}">
									<button class="btn btn-info rounded-pill">Start Voting</button>
								</a>
							</div>
						</div>
					
				</div>
			</div>
				
			</div>
	</div>
	</div>
	
	



@endsection