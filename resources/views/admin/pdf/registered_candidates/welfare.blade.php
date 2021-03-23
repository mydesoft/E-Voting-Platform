<html>
	<head>
		<title>
			Welfare Candidate PDF
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

		<h4> Welfare Candidate</h4>

        <h3>Total Numbers: {{$welfares->count()}}</h3>
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

                 @foreach($welfares as $welfare)
                    <tr>
                                                
                    <td> {{$welfare->name}} </td>

                    <td>{{$welfare->email}}</td>

                    <td> {{$welfare->department}}</td>
                                                    
                    <td> {{$welfare->level}}</td>

                    <td> {{$welfare->matric_number}}</td>

                    <td> {{$welfare->cgpa}}</td>

                    <td> {{$welfare->phone_number}}</td>

                    <td> {{$welfare->gender}}</td>

                    <td> {{$welfare->reason}}</td>
                    </tr>

                @endforeach                
            </tbody>
		</table>
	</body>
</html>