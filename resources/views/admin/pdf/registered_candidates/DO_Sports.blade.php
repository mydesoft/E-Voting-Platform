<html>
	<head>
		<title>
			Director of Sports PDF
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

		<h4> Director of Sports Candidate</h4>

        <h3>Total Numbers: {{$DO_Sports->count()}}</h3>
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

                 @foreach($DO_Sports as $DO_Sport)
                    <tr>
                                                
                    <td> {{$DO_Sport->name}} </td>

                    <td>{{$DO_Sport->email}}</td>

                    <td> {{$DO_Sport->department}}</td>
                                                    
                    <td> {{$DO_Sport->level}}</td>

                    <td> {{$DO_Sport->matric_number}}</td>

                    <td> {{$DO_Sport->cgpa}}</td>

                    <td> {{$DO_Sport->phone_number}}</td>

                    <td> {{$DO_Sport->gender}}</td>

                    <td> {{$DO_Sport->reason}}</td>
                    </tr>

                @endforeach                
            </tbody>
		</table>
	</body>
</html>