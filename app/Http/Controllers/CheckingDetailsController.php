<?php

namespace App\Http\Controllers;

use App\Mail\SendCodeEmail;
use App\Models\Candidates;
use App\Models\Status;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class CheckingDetailsController extends Controller
{
   public function forgetCode(){

   	return view('forget_code');
   }

   public function sendCode(Request $request)
   {
   	 $request->validate([
   	 	'matric_number' => 'required',
   	 	'email' => 'required',
   	 ]);

   	 $matric_number = User::where('matric_number', $request->matric_number)->first();

   	 $email = User::where('email', $request->email)->first();

   	 if (!$matric_number) {
   	 	
   	 	return back()->with('error', 'Matric Number does not Exist!');
   	 }

   	 if (!$email) {
   	 	return back()->with('error', 'Email does not Exist!');
   	 }

   	 $userMatricNumber = $matric_number['matric_number'];
   	 
   	 $userEmail = $matric_number['email'];

   	 if ($matric_number->forget_code === 'requested') {
   	 	
   	 	return back()->with('error', 'You can only request for a voting code once. Please contact the system admin');
   	 }

   	 if (!($userMatricNumber === $request->matric_number and $userEmail === $request->email)) {
   	 	
         return back()->with('error', 'Inputs mismatched');
       }


   	 	Mail::to($request->email)->send(new sendCodeEmail($matric_number));

         $matric_number->fill(['forget_code' => 'requested'])->save();

         return back()->with('success', 'A mail has been sent to you!');
   	

   }

   public function checkStatus()
   {
   	 return view('check_status');
   }

   public function candidateStatus(Request $request)
   {
   		$request->validate([
   			'matric_number' => 'required',
   			'position' => 'required',
   		]);

   		$candidate = Candidates::where('matric_number', $request->matric_number)->first();

   		if (!$candidate) {
   			
   			return back()->with('error', 'Matric Number does not exist!');
   		}

   		if ($candidate->position !== $request->position) {
   			
   			return back()->with('error', 'Please check your position selection');
   		}


   		$status = Status::where('status', 'successful')->first();

   		$successful = Status::find($status->id)->candidates()->pluck('matric_number');

   		if ($successful->contains($request->matric_number)) {

   			return back()->with('success', 'Congratulations!! You have been shortlisted for the final phase 			of the election');
   		}
   		else{
   			return back()->with('error', 'We are sorry you have not been selected yet!'); 
   		}

	
   }
}
