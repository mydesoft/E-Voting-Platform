<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Verified;
use App\Traits\RegisteredData;
use Illuminate\Http\Request;

class ShowVerifiedCandidateController extends Controller
{
	use RegisteredData;

    public function ShowVerifiedCandidate(){

    	$verifiedCandidateDatas = $this->verifiedCandidate();

    	return view('admin.verified_candidates.verified_candidates', compact('verifiedCandidateDatas'));
    }

    public function deleteVerifiedCandidate($id){

    	$verifiedCandidate = Verified::find($id);

    	$verifiedCandidate->delete();

    	return back()->with('success', 'Verified Candidate Deleted Successfully!');    
    }


    public function verifiedPdf()
    {

    	 $verifiedCandidates = $this->verifiedCandidate();
        
      
    	 $pdf = \PDF::loadView('admin.pdf.verified_candidate.verified', [

    		'verifiedCandidates' => $verifiedCandidates
    	 ]);

    	return $pdf->stream( 'verified_candidate.pdf');

   } 	
}
