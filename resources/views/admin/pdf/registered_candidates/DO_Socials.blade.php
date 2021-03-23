<html>
	<head>
		<title>
			Director of Socials PDF
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

		<h4> Director of Socials Candidate</h4>

        <h3>Total Numbers: {{$DO_Socials->count()}}</h3>
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

                 @foreach($DO_Socials as $DO_Social)
                    <tr>
                                                
                    <td> {{$DO_Social->name}} </td>

                    <td>{{$DO_Social->email}}</td>

                    <td> {{$DO_Social->department}}</td>
                                                    
                    <td> {{$DO_Social->level}}</td>

                    <td> {{$DO_Social->matric_number}}</td>

                    <td> {{$DO_Social->cgpa}}</td>

                    <td> {{$DO_Social->phone_number}}</td>

                    <td> {{$DO_Social->gender}}</td>

                    <td> {{$DO_Social->reason}}</td>
                    </tr>

                @endforeach                
            </tbody>
		</table>
	</body>
</html>