@extends('layouts.vote-page')
@section('title', 'Vote')

@section('content')

<div class="container mt-2 ">
	<div class="row">
		<div class="offset-md-6 col-md-3">
			<h5 class="text-right text-info" style="font-family: roboto;"> Welcome {{Auth::user()->name}}</h5>
		
			
		</div>
		<div class="col-md-3">
				<img src="{{'storage/studentImage/'. Auth::user()->image}}"  width = "40" class = "img-fluid float-right rounded-pill"  alt="">
			
		</div>
	</div>
</div>

<br>
	<div class="container">
		<div class="card border-secondary">
			<h4 class="text-center mt-3">Candidates For Welfare Director</h4>
			<div class="card-body">
				<div class="row mb-1">
					@foreach($successful->candidates as $welfare)
					@if($welfare->position === $welfares)

			<div class="col-md-3">
				<div class="card mb-3">	
						<div class="card-header bg-info">
						<h6 class="text-white text-center">{{$welfare->name}}</h6>
						

					</div>
					<div class="card-body">	
						<img src="{{asset('storage/candidateImage/'. $welfare->image)}}"  width = "150" class = "img-fluid border-secondary img-thumbnail">

					</div>

					<div class="card-footer">	
						<form method="POST" action="{{route('voteWelfare')}}">
							@csrf
							<input type="hidden" name="welfare_name" value="{{$welfare->name}}">
  							<button class="btn btn-info text-white rounded-pill">Vote {{$welfare->name}}</button>
						</form>
						
					</div>
					
					</div>
				</div>	
				@endif
				@endforeach
		
			</div>
			</div>
		</div>
			
	</div>
</div>

@endsection
