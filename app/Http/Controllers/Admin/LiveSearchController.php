<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Traits\RegisteredData;
use Illuminate\Http\Request;

class LiveSearchController extends Controller
{
	 // // use RegisteredData; 

  //   public function search(Request $request){
  //   	 		// dd(registeredStudent('100LevelStudent'));


  //   	 if($request->ajax()){

  //   	 	$query = $request->get('query');

  //   	 	if ($query != '') {
  //   	 		$data = User::where('email', 'like', '%'. $query .'%')->get();
  //   	 	}
  //   	 	else{
  //   	 		$data = User::all();

  //   	 	} 

  //   	 	// dd($data);

  //   	 	$total_row = $data->count();
  //   	 	if ($total_row > 0 ) 
  //   	 	{
  //   	 		foreach ($data as $row)
  //   	 		 {
  //   	 			$output .= '
  //   	 				<tr>
  //   	 					<td>'.$row->name.'</td>
  //   	 					<td>'.$row->email.'</td>
  //   	 					<td>'.$row->voting_code.'</td>
  //   	 					<td>'.$row->department.'</td>
  //   	 					<td>'.$row->matric_number.'</td>
  //   	 					<td>'.$row->status.'</td>

  //   	 				</tr>
  //   	 			';
  //   	 		}
  //   	 	}
  //   	 	else{
  //   	 		$output = '
  //   	 			<tr>
  //   	 				<td>No Data Found </td>
  //   	 			</tr>	
  //   	 		';
  //   	 	}

  //   	 	$data = array(
  //   	 		'table_data' => $output,
  //   	 		// 'total_data'  => $total_data
  //   	 	);

  //   	 	echo json_encode($data);

  //   	 }
  //   }
}
