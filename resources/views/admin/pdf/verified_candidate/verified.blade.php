<html>
	<head>
		<title>
			Verified Candidates PDF
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

		<h4> Verified Candidates	</h4>
		<table class="table table-striped table-bodered">
			<thead>
                <tr>
                                               
                    <th> Matric Number</th>
                    <th> Level </th>
                    <th> CGPA </th>
                    <th> Status </th>
                                                
                </tr>
            </thead>
            <tbody>

                 @foreach($verifiedCandidates as $verifiedCandidate)
                    <tr>
                                                
                    <td> {{$verifiedCandidate->matric_number}} </td>

                    <td>{{$verifiedCandidate->level}}</td>

                    <td> {{$verifiedCandidate->CGPA}}</td>
                                                    
                    <td> {{$verifiedCandidate->status}}</td>

                    </tr>

                @endforeach                
            </tbody>
		</table>
	</body>
</html>