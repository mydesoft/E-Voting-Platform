<?php

namespace App\Http\Controllers\PDF;

use App\Http\Controllers\Controller;
use App\Traits\RegisteredData;
use Illuminate\Http\Request;

class RegisteredCandidatePdfController extends Controller
{
    use RegisteredData;

    public function candidatePdf($candidate){

    	if ($candidate === 'president') {
    		
    		$data = $this->registeredCandidate();

    		$presidents = $data['president'];

    		$pdf = \PDF::loadView('admin.pdf.registered_candidates.president', ['presidents' => $presidents]);


    	}

    	elseif($candidate === 'vice-president'){

    		$data = $this->registeredCandidate();

    		$vicePresidents = $data['vicePresident'];

    		$pdf = \PDF::loadView('admin.pdf.registered_candidates.vice_president', 
    				['vicePresidents' => $vicePresidents]);
    	}


    	elseif($candidate === 'general-secretary'){

    		$data = $this->registeredCandidate();

    		$generalSecretarys = $data['general_secretary'];

    		$pdf = \PDF::loadView('admin.pdf.registered_candidates.general_secretary', 
    				['generalSecretarys' => $generalSecretarys]);
    	}

    	elseif($candidate === 'treasurer'){

    		$data = $this->registeredCandidate();

    		$treasurers = $data['treasurer'];

    		$pdf = \PDF::loadView('admin.pdf.registered_candidates.treasurer', 
    				['treasurers' => $treasurers]);
    	}

    	elseif($candidate === 'DO_Sports'){

    		$data = $this->registeredCandidate();

    		$DO_Sports = $data['DO_Sports'];

    		$pdf = \PDF::loadView('admin.pdf.registered_candidates.DO_Sports', 
    				['DO_Sports' => $DO_Sports]);
    	}

    	elseif($candidate === 'DO_Socials'){

    		$data = $this->registeredCandidate();

    		$DO_Socials = $data['DO_Socials'];

    		$pdf = \PDF::loadView('admin.pdf.registered_candidates.DO_Socials', 
    				['DO_Socials' => $DO_Socials]);
    	}

    	elseif($candidate === 'welfare'){

    		$data = $this->registeredCandidate();

    		$welfares = $data['welfare'];

    		$pdf = \PDF::loadView('admin.pdf.registered_candidates.welfare', 
    				['welfares' => $welfares]);
    	}

    		return $pdf->stream( $candidate .'.pdf');


    }
}
