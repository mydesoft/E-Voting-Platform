<html>
	<head>
		<title>
			General Secretary Candidate
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

		<h4> General Secreatry Candidates</h4>

        <h3>Total Number : {{$generalSecretarys->count()}}</h3>
		<table class="table table-striped table-bodered">
			<thead>
                <tr>
                                               
                    <th> Name</th>
                    <th> Email </th>
                    <th> Department </th>
                    <th> Level </th>
                    <th> Matric Number </th>
                    <th>CGPA</th>
                    <th>Phone Number</th>
                    <th>Gender</th>
                    <th>Reason</th>
                                                
                </tr>
            </thead>
            <tbody>

                 @foreach($generalSecretarys as $generalSecretary)
                    <tr>
                                                
                    <td> {{$generalSecretary->name}} </td>

                    <td>{{$generalSecretary->email}}</td>

                    <td> {{$generalSecretary->department}}</td>
                                                    
                    <td> {{$generalSecretary->level}}</td>

                    <td> {{$generalSecretary->matric_number}}</td>

                    <td> {{$generalSecretary->cgpa}}</td>

                    <td> {{$generalSecretary->phone_number}}</td>

                    <td> {{$generalSecretary->gender}}</td>

                    <td> {{$generalSecretary->reason}}</td>
                    </tr>

                @endforeach                
            </tbody>
		</table>
	</body>
</html>