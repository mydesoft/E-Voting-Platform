<html>
	<head>
		<title>
			Successful Welfare Candidates
		</title>
	</head>

	<body>

		<style>
			
		  table, th, td{

			border: 1px solid black;
			border-collapse: collapse;
				
            }

          th,td{
            padding: 15px;
            }
          h4{
            text-align: center;
          }  

              
		</style>

		<h4>Successful Welfare Candidate</h4>

		<table class="table table-striped table-bodered">
			<thead>
                <tr>
                                               
                    <th> Name</th>
                    <th> Email </th>
                    <th> Department </th>
                    <th> Level </th>
                    <th> Matric Number </th>
                    <th>CGPA</th>
                    <th>Position</th>
                    <th>Gender</th>
                                                
                </tr>
            </thead>
            <tbody>

                 @foreach($successful->candidates as $candidate)
                 @if($candidate->position === 'welfare')
                    <tr>
                                                
                    <td> {{$candidate->name}} </td>

                    <td>{{$candidate->email}}</td>

                    <td> {{$candidate->department}}</td>
                                                    
                    <td> {{$candidate->level}}</td>

                    <td> {{$candidate->matric_number}}</td>

                    <td> {{$candidate->cgpa}}</td>

                    <td> {{$candidate->position}}</td>

                    <td> {{$candidate->gender}}</td>
                    </tr>
                 @endif
                @endforeach                
            </tbody>
		</table>
	</body>
</html>