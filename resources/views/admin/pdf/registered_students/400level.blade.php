<html>
    <head>
        <title>
            400 Level PDF
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

        <h4> Registered Students for 400 Level  </h4>
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

                 @foreach($_400LevelStudentDatas as $_400LevelStudentData)
                    <tr>
                                                
                    <td> {{$_400LevelStudentData->name}} </td>

                    <td>{{$_400LevelStudentData->email}}</td>

                    <td> {{$_400LevelStudentData->voting_code}}</td>
                                                    
                    <td> {{$_400LevelStudentData->department}}</td>

                    <td> {{$_400LevelStudentData->matric_number}}</td>

                    <td> {{$_400LevelStudentData->status}}</td>
                    </tr>

                @endforeach                
            </tbody>
        </table>
    </body>
</html>