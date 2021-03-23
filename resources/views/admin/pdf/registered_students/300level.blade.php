<html>
    <head>
        <title>
            300 Level PDF
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

        <h4> Registered Students for 300 Level  </h4>
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

                 @foreach($_300LevelStudentDatas as $_300LevelStudentData)
                    <tr>
                                                
                    <td> {{$_300LevelStudentData->name}} </td>

                    <td>{{$_300LevelStudentData->email}}</td>

                    <td> {{$_300LevelStudentData->voting_code}}</td>
                                                    
                    <td> {{$_300LevelStudentData->department}}</td>

                    <td> {{$_300LevelStudentData->matric_number}}</td>

                    <td> {{$_300LevelStudentData->status}}</td>
                    </tr>

                @endforeach                
            </tbody>
        </table>
    </body>
</html>