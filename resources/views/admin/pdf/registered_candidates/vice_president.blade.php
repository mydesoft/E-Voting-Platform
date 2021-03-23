<html>
	<head>
		<title>
			Vice President Candidate
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

		<h4> Vice President Candidates</h4>

        <h3>Total Number : {{$vicePresidents->count()}}</h3>
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

                 @foreach($vicePresidents as $vicePresident)
                    <tr>
                                                
                    <td> {{$vicePresident->name}} </td>

                    <td>{{$vicePresident->email}}</td>

                    <td> {{$vicePresident->department}}</td>
                                                    
                    <td> {{$vicePresident->level}}</td>

                    <td> {{$vicePresident->matric_number}}</td>

                    <td> {{$vicePresident->cgpa}}</td>

                    <td> {{$vicePresident->phone_number}}</td>

                    <td> {{$vicePresident->gender}}</td>

                    <td> {{$vicePresident->reason}}</td>
                    </tr>

                @endforeach                
            </tbody>
		</table>
	</body>
</html>