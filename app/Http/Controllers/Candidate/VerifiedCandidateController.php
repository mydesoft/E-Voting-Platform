<?php

namespace App\Http\Controllers\Candidate;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Candidates;
use App\Models\Verified;


class VerifiedCandidateController extends Controller
{
     public function verified(){
        return view('candidate.verified_candidate');
    }

    public function verifiedCandidate(Request $request){

    	$request->validate(['matric_number' => 'required']);

    	$registeredCandidate = Candidates::where('matric_number', $request->matric_number)->first();

    	$verifiedCandidate = Verified::where('matric_number', $request->matric_number)->first();

    	// dd($verifiedCandidate);

    	if ($registeredCandidate) {
    		
    		return back()->with('error', 'You have already registered for the post of '. strtoUpper($registeredCandidate['position']) .' we will get back to you on the next stage' );
    	}

    	elseif(!$verifiedCandidate){

    		return back()->with('error', 'You cannnot procced without verification, Please verify your details first. You can do that by clicking on the '. strtoupper('Not Verified Link')  .' below');
    	}

        else{

            $request->session()->put(['CGPA' => $verifiedCandidate['CGPA']]);

            $request->session()->put(['matric_number' => $verifiedCandidate['matric_number']]);

            $request->session()->put(['level' => $verifiedCandidate['level']]);

            return redirect()->route('firstCandidatePage');
        }
    }
}
