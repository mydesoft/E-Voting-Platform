<?php

namespace App\Http\Controllers\Candidate;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Verified;

class VerificationController extends Controller
{
    public function verify()
    {
    	return view('candidate.verify');
    }

    public function verifyCandidate(Request $request)
    {
    	$this->verifyCandidateValidatons($request);

    	$digit = '3.0';
    	$minimumCGPA = (float)$digit;
    	$maximumLevel = '300L';
    	$minimumLevel = '200L';
    	$CGPA = (float)$request->cgpa;
    	$level  = $request->level;

        $verifiedCandidate = Verified::where('matric_number', $request->matric_number)->first();

        if ($verifiedCandidate) {

            return redirect()->back()->with('error', 'You have already gone through the verificaion process, Please click on the '. strtoupper('Already Verified Link')  .' to continue your registration!');
        }
        

    	elseif ($CGPA == $minimumCGPA && $level == $maximumLevel || 
    		$CGPA > $minimumCGPA && $level == $maximumLevel || 
    		$CGPA == $minimumCGPA && $level == $minimumLevel || 
    		$CGPA > $minimumCGPA && $level == $minimumLevel 

    	 ) {

    	 	$request->session()->put(['success' => 'Congratulations']);
            $request->session()->put(['CGPA' => $request->cgpa]);
            $request->session()->put(['level' => $request->level]);

            Verified::create([
                'matric_number' => $request->matric_number,
                'level' => $request->level,
                'CGPA' => $CGPA,
                'status' => 'verified'
            ]);

    	 	return redirect()->back()
    	 			->with('success', 'Congratulations You are Qualified! Please Click on Continue to Register')
    	 			->with('toast_success', 'Congratulations!');
    	
    	}

    	else{
    			return redirect()->back()->with('error', 'We are Sorry, you are not qualified to register for any Position. Thanks!');
    	}
    }




    public function verifyCandidateValidatons(Request $request){
    	return $request->validate([
    		'cgpa' => 'required',
    		'level' => 'required'
    	]);
    }
}
