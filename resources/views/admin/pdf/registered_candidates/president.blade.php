<html>
	<head>
		<title>
			100 Level PDF
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

		<h4> President Candidate</h4>

         <h3>Total Number : {{$presidents->count()}}</h3>

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

                 @foreach($presidents as $president)
                    <tr>
                                                
                    <td> {{$president->name}} </td>

                    <td>{{$president->email}}</td>

                    <td> {{$president->department}}</td>
                                                    
                    <td> {{$president->level}}</td>

                    <td> {{$president->matric_number}}</td>

                    <td> {{$president->cgpa}}</td>

                    <td> {{$president->phone_number}}</td>

                    <td> {{$president->gender}}</td>

                    <td> {{$president->reason}}</td>
                    </tr>

                @endforeach                
            </tbody>
		</table>
	</body>
</html>