<html>
    <head>
        <title>
            500 Level PDF
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

        <h4> Registered Students for 500 Level  </h4>
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

                 @foreach($_500LevelStudentDatas as $_500LevelStudentData)
                    <tr>
                                                
                    <td> {{$_500LevelStudentData->name}} </td>

                    <td>{{$_500LevelStudentData->email}}</td>

                    <td> {{$_500LevelStudentData->voting_code}}</td>
                                                    
                    <td> {{$_500LevelStudentData->department}}</td>

                    <td> {{$_500LevelStudentData->matric_number}}</td>

                    <td> {{$_500LevelStudentData->status}}</td>
                    </tr>

                @endforeach                
            </tbody>
        </table>
    </body>
</html>