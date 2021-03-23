@extends('layouts.master-index')

@section('title', 'Voting Results')

@section('content')

		<div style="padding-top: 20px;" class="mb-5" >
		<div class="container hero-vote">
			<h3 class="text-center text-danger">Voting Results</h3>
			<div class="row">
				<div class="col-md-4 mb-3">
					<div class="card shadow-lg p-3 bg-white rounded">
						<div><h5 class="text-center text-info"><u>President Result</u></h5></div>
						<div class="card-body">
							<h6 class="text-center text-danger">Total Numbers of Votes: {{$presidentsVotes}}</h6>

							<div class="table-responsive">
								<table class="table table-striped table-bordered">
									<thead>
										<tr>
											<th> Candidate Name</th>
											<th> Present Result</th>
										</tr>
									</thead>

									<tbody>
										@foreach($presidents as $president)
										<tr>
											<td>{{$president->president_name}}</td>

											<td>{{$president->getPresidentVote($president->president_name)}}</td>
											
										</tr>
										@endforeach
										
									</tbody>
								</table>
							</div>
						</div>
					
				</div>
			</div>


			<div class="col-md-4 mb-3">
					<div class="card shadow-lg p-3 bg-white rounded">
						<div><h5 class="text-center text-info"><u>Vice-President Result</u></h5></div>
						<div class="card-body">
							<h6 class="text-center text-danger">Total Numbers of Votes: {{$vicePresidentsVotes}}</h6>

							<div class="table-responsive">
								<table class="table table-striped table-bordered">
									<thead>
										<tr>
											<th> Candidate Name</th>
											<th> Present Result</th>
										</tr>
									</thead>

									<tbody>
										@foreach($vicePresidents as $vicePresident)
										<tr>
											<td>{{$vicePresident->vicePresident_name}}</td>

											<td>
											{{$vicePresident->getVicePresidentVote($vicePresident->vicePresident_name)}}
											</td>
											
										</tr>
										@endforeach
									</tbody>
								</table>
							</div>
						</div>
					
				</div>
			</div>


			<div class="col-md-4 mb-3">
					<div class="card shadow-lg p-3 bg-white rounded">
						<div><h5 class="text-center text-info"><u>General Secretary Result</u></h5></div>
						<div class="card-body">
							<h6 class="text-center text-danger">
								Total Numbers of Votes: {{$generalSecretarysVotes}}
							</h6>

							<div class="table-responsive">
								<table class="table table-striped table-bordered">
									<thead>
										<tr>
											<th> Candidate Name</th>
											<th> Present Result</th>
										</tr>
									</thead>

									<tbody>
										@foreach($generalSecretarys as $generalSecretary)
										<tr>
											<td>{{$generalSecretary->general_secretary_name}}</td>

											<td>
											{{$generalSecretary->getGeneralSecretaryVote($generalSecretary->general_secretary_name)}}
										</td>
											
										</tr>
										@endforeach
									</tbody>
								</table>
							</div>
						</div>
					
				</div>
			</div>
				
			</div>



			<div class="row">
				<div class="col-md-4 mb-3">
					<div class="card shadow-lg p-3 bg-white rounded">
						<div><h5 class="text-center text-info"><u>Treasurer Results</u></h5></div>
						<div class="card-body">
							<h6 class="text-center text-danger">Total Numbers of Votes: {{$treasurersVotes}}</h6>

							<div class="table-responsive">
								<table class="table table-striped table-bordered">
									<thead>
										<tr>
											<th> Candidate Name</th>
											<th> Present Result</th>
										</tr>
									</thead>

									<tbody>
										@foreach($treasurers as $treasurer)
										<tr>
											<td>{{$treasurer->treasurer_name}}</td>

											<td>{{$treasurer->getTreasurerVote($treasurer->treasurer_name)}}</td>
											
										</tr>
										@endforeach
									</tbody>
								</table>
							</div>
						</div>
					
				</div>
			</div>


			<div class="col-md-4 mb-3">
					<div class="card shadow-lg p-3 bg-white rounded">
						<div><h5 class="text-center text-info"><u>Director of Sports Result</u></h5></div>
						<div class="card-body">
							<h6 class="text-center text-danger">Total Numbers of Votes: {{$DO_SportsVotes}}</h6>

							<div class="table-responsive">
								<table class="table table-striped table-bordered">
									<thead>
										<tr>
											<th> Candidate Name</th>
											<th> Present Result</th>
										</tr>
									</thead>

									<tbody>
										@foreach($DO_Sports as $DO_Sport)
										<tr>
											<td>{{$DO_Sport->DO_Sport_name}}</td>

											<td>{{$DO_Sport->getDO_SportsVote($DO_Sport->DO_Sport_name)}}</td>
											
										</tr>
										@endforeach
									</tbody>
								</table>
							</div>
						</div>
					
				</div>
			</div>


			<div class="col-md-4 mb-3">
					<div class="card shadow-lg p-3 bg-white rounded">
						<div><h5 class="text-center text-info"><u>Director of Socials Result</u></h5></div>
						<div class="card-body">
							<h6 class="text-center text-danger">Total Numbers of Votes: {{$DO_SocialsVotes}}</h6>

							<div class="table-responsive">
								<table class="table table-striped table-bordered">
									<thead>
										<tr>
											<th> Candidate Name</th>
											<th> Present Result</th>
										</tr>
									</thead>

									<tbody>
										@foreach($DO_Socials as $DO_Social)
										<tr>
											<td>{{$DO_Social->DO_Social_name}}</td>

											<td>{{$DO_Social->getDO_SocailsVote($DO_Social->DO_Social_name)}}</td>
											
										</tr>
										@endforeach
									</tbody>
								</table>
							</div>
						</div>
					
				</div>
			</div>
				
			</div>

			<div class="row">	
				<div class="col-md-4 offset-md-4">
					<div class="card shadow-lg p-3 bg-white rounded">
						<div><h5 class="text-center text-info"><u>Welfare Result</u></h5></div>
						<div class="card-body">
							<h6 class="text-center text-danger">Total Numbers of Votes: {{$welfaresVotes}}</h6>

							<div class="table-responsive">
								<table class="table table-striped table-bordered">
									<thead>
										<tr>
											<th> Candidate Name</th>
											<th> Present Result</th>
										</tr>
									</thead>

									<tbody>
										@foreach($welfares as $welfare)
										<tr>
											<td>{{$welfare->welfare_name}}</td>

											<td>{{$welfare->getWelfareVote($welfare->welfare_name)}}</td>
											
										</tr>
										@endforeach
									</tbody>
								</table>
							</div>
						</div>
					
				</div>
				</div>	
			</div>
	</div>
	</div>
	
	



@endsection