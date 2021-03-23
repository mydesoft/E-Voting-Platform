<?php

namespace App\Http\Controllers\Login;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class LoginController extends Controller
{
    public function login()
    {
    	return view('login.login');
    }

    public function loginStudent(Request $request){

    	$request->validate([
    		'matric_number' => 'required',

    		'voting_code' => 'required|min:8'
    	]);

    	  
    	$userMatricNumber = User:: where('matric_number', $request->matric_number)->first();

    	$userVotingCode = User:: where('voting_code', $request->voting_code)->first();

    	if (!$userMatricNumber) {

    		return redirect()->back()->with('error', 'Matric Number Does Not Exist!');
    		
    	}

    	if (!$userVotingCode) {

    		return redirect()->back()->with('error', 'Please Check the Entered Voting Code!');
    		
    	}

    	$retrievedMatricNumber = $userMatricNumber['matric_number'];

    	$retrievedVotingCode = $userMatricNumber['voting_code'];

    	if (!($retrievedMatricNumber == $request->matric_number and $retrievedVotingCode == $request->voting_code))
    	 {
    		
    		return redirect()->back()->with('error', 'Invalid Details!');
    	}

        $status = 'voting';

        if ($userMatricNumber['status'] == $status) {
            
            return back()->with('error', 'Sorry you are already logged in!');
        }

        $finalStatus = 'voted';

         if ($userMatricNumber['status'] == $finalStatus) {
            
            return back()->with('error', 'You cannot Login again, You have Already Voted!');
        }

    	Auth::login($userMatricNumber);

        $userMatricNumber->fill(['status' => 'voting'])->save();

    	return redirect()->route('warning');

    }


    public function logout()
    {
    	Auth::logout();

    	return redirect()->route('login');
    }

}
