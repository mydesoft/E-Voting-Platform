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

        <h4> Registered Students for 200 Level  </h4>
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

                 @foreach($_200LevelStudentDatas as $_200LevelStudentData)
                    <tr>
                                                
                    <td> {{$_200LevelStudentData->name}} </td>

                    <td>{{$_200LevelStudentData->email}}</td>

                    <td> {{$_200LevelStudentData->voting_code}}</td>
                                                    
                    <td> {{$_200LevelStudentData->department}}</td>

                    <td> {{$_200LevelStudentData->matric_number}}</td>

                    <td> {{$_200LevelStudentData->status}}</td>
                    </tr>

                @endforeach                
            </tbody>
        </table>
    </body>
</html>