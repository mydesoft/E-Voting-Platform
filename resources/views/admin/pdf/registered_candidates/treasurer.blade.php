<html>
	<head>
		<title>
			Treasurer Candidate PDF
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

		<h4> Treasurer Candidate</h4>

        <h3>Total Numbers: {{$treasurers->count()}}</h3>
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

                 @foreach($treasurers as $treasurer)
                    <tr>
                                                
                    <td> {{$treasurer->name}} </td>

                    <td>{{$treasurer->email}}</td>

                    <td> {{$treasurer->department}}</td>
                                                    
                    <td> {{$treasurer->level}}</td>

                    <td> {{$treasurer->matric_number}}</td>

                    <td> {{$treasurer->cgpa}}</td>

                    <td> {{$treasurer->phone_number}}</td>

                    <td> {{$treasurer->gender}}</td>

                    <td> {{$treasurer->reason}}</td>
                    </tr>

                @endforeach                
            </tbody>
		</table>
	</body>
</html>