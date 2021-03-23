<?php

namespace App\Http\Controllers\Vote;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Candidates;
use App\Models\President;
use App\Models\Status;
use Auth;

class VotingController extends Controller
{

    public function warning()
    {
        return view('warning');
    }
    public function president()
    {
        $presidents = 'president';

        $successful  = Status::where('status', 'successful')->firstOrFail();

    	return view('voting.president', compact('successful', 'presidents'));
    }

    public function vicePresident()
    {
        $vicePresidents = 'vice-president';

        $successful  = Status::where('status', 'successful')->firstOrFail();

        return view('voting.vicePresident', compact('vicePresidents', 'successful'));
            
        
    }

     public function generalSecretary()
    {
        $generalSecretarys = 'general-secretary';

        $successful  = Status::where('status', 'successful')->firstOrFail();

        return view('voting.general-secretary', compact('generalSecretarys', 'successful'));
    }

    public function treasurer()
    {
         $treasurers = 'treasurer';

        $successful  = Status::where('status', 'successful')->firstOrFail();

    	return view('voting.treasurer', compact('treasurers', 'successful'));
    }

    public function directorOfSports()
    {
        $DO_Sports = 'DO-Sports';

        $successful  = Status::where('status', 'successful')->firstOrFail();

    	return view('voting.directorOfSports', compact('DO_Sports', 'successful'));
    }

    public function directorOfSocials()
    {
        $DO_Socials = 'DO-Socials';

        $successful  = Status::where('status', 'successful')->firstOrFail();

    	return view('voting.directorOfSocials',compact('DO_Socials', 'successful'));
    }

    public function welfare()
    {
         $welfares = 'welfare';

        $successful  = Status::where('status', 'successful')->firstOrFail();

    	return view('voting.welfare', compact('welfares', 'successful'));
    }

}
