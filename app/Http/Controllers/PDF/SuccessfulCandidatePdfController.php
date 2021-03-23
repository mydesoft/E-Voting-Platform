<?php

namespace App\Http\Controllers\PDF;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Status;

class SuccessfulCandidatePdfController extends Controller
{
     public function successfulCandidatePdf($candidate){
    	
    	$successful = Status::where('status', 'successful')->firstOrFail();

    	if ($candidate === 'president') {
    		
    	$pdf= \PDF::loadView('admin.pdf.successful_candidates.successful_president', ['successful' => $successful]);

    	}

    	elseif ($candidate === 'vice-president') {
    		
    	$pdf= \PDF::loadView('admin.pdf.successful_candidates.successful_vice_president', ['successful' => $successful]);

    	}

    	elseif ($candidate === 'general-secretary') {
    		
    	$pdf= \PDF::loadView('admin.pdf.successful_candidates.successful_general_secretary', ['successful' => $successful]);

    	}


    	elseif ($candidate === 'treasurer') {
    		
    	$pdf= \PDF::loadView('admin.pdf.successful_candidates.successful_treasurer', ['successful' => $successful]);

    	}


    	elseif ($candidate === 'DO-Sports') {
    		
    	$pdf= \PDF::loadView('admin.pdf.successful_candidates.successful_DO_Sports', ['successful' => $successful]);

    	}

    	elseif ($candidate === 'DO-Socials') {
    		
    	$pdf= \PDF::loadView('admin.pdf.successful_candidates.successful_DO_Socials', ['successful' => $successful]);

    	}

    	elseif ($candidate === 'welfare') {
    		
    	$pdf= \PDF::loadView('admin.pdf.successful_candidates.successful_welfare', ['successful' => $successful]);

    	}

    	return $pdf->stream('successful '. $candidate .'.pdf');

    }
}
