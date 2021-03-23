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

		<h4> Registered Students for 100 Level	</h4>
		<table class="table table-striped table-bodered">
			<thead>
                <tr>
                                               
                    <th> Name</th>
                    <th> Email </th>
                    <th> Voting Code </th>
                    <th> Department </th>
                    <th> Matric Number </th>
                    <th> Status </th>
                                                
                </tr>
            </thead>
            <tbody>

                 @foreach($_100LevelStudentDatas as $_100LevelStudentData)
                    <tr>
                                                
                    <td> {{$_100LevelStudentData->name}} </td>

                    <td>{{$_100LevelStudentData->email}}</td>

                    <td> {{$_100LevelStudentData->voting_code}}</td>
                                                    
                    <td> {{$_100LevelStudentData->department}}</td>

                    <td> {{$_100LevelStudentData->matric_number}}</td>

                    <td> {{$_100LevelStudentData->status}}</td>
                    </tr>

                @endforeach                
            </tbody>
		</table>
	</body>
</html>