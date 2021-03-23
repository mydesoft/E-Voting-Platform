@extends('layouts.master-index')
@section('title', 'Home')

@section('content')
<section class="hero mb-3">
</section>

<section>
	<div class="container">
		<div class="row mb-3">
			<div class="col-md-8 offset-md-2">
				<div class="card bg-white rounded-pill  shadow-lg">
				<div class="card-body">
					<h4 class="text-dark"> <p class="ml-5">Voting Has Not Started Yet.</p>  
						<p class="ml-5"> You will get Notified as soon as Voting starts</p>
						<p class="ml-5"> However Note that Registration is Still Ongoing!</p>
					</h4>

				</div>
			</div>
			</div>
			
		</div>
	</div>	
</section>

<section class="mb-5">
	<div class="container">
		<div class="row">
			<div class="col-md-4 mb-3">
				<div class="card shadow-lg border-secondary">
					<div class="card-header bg-secondary">
						<p class="text-center text-warning" style="font-size: 20px;">
						<i class="fa fa-users" ></i>
							<em>Registration Status</em>
					</div>
				<div class="card-body">
					<img src="{{asset('img/img1.png')}}" alt="" width = "300" height="" class="img-fluid">
					<p>	Click the button below to register, only register students can vote on the election day</p>
				</div>

				<div class="card-footer">
					<a href="{{route('firstRegistrationPage')}}">
					<button class="btn btn-secondary border-warning btn-outline-info rounded-pill"> <h6 class="text-warning">Register Here</h6></button>
					</a>
				</div>

			</div>
			</div>

			<div class="col-md-4 mb-3">
				<div class="card border-secondary shadow-lg">
					<div class="card-header bg-secondary">
						<p class="text-center text-warning" style="font-size: 20px;">
						<i class="fa fa-lock" ></i>
							<em>Check Voting Code</em>
						</p>	
					</div>

				<div class="card-body">
					<img src="{{asset('img/img2.png')}}" alt="" width="300" height="" class="img-fluid">
					<p>Students who have Registered and has forgotten their voting code can click the button below to get it back.</p>
				</div>

				<div class="card-footer">
					<a href="{{route('forgetCode')}}">
					<button class="btn btn-secondary border-warning btn-outline-info rounded-pill"> <h6 class="text-warning">Check Voting Code</h6></button>
					</a>
				</div>

			</div>
			</div>


			<div class="col-md-4 mb-5">
				<div class="card shadow-lg border-secondary">
					<div class="card-header bg-secondary">
						<p class="text-center text-warning" style="font-size: 20px;">
						<i class="fa fa-user-circle " ></i>
							<em>For Candidatates Aspiring for a Position</em>
				
					</div>
				<div class="card-body">
					<img src="{{asset('img/img3.png')}}" alt="" width="300" height="" class="img-fluid">
						<p>	All Candidates who are contesting for any post should check their status by clicking the button below.</p>
				</div>

				<div class="card-footer">
					<a href="{{route('checkStatus')}}">
					<button class="btn btn-secondary border-warning btn-outline-info rounded-pill"> <h6 class="text-warning">Check Status</h6></button>
					</a>
				</div>

			</div>
			</div>
			
		</div>
	</div>	
</section>

@include('includes.header')

@endsection