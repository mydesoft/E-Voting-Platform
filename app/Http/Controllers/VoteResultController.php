<?php

namespace App\Http\Controllers;

use App\Models\DO_Social;
use App\Models\DO_Sport;
use App\Models\GeneralSecretary;
use App\Models\President;
use App\Models\Status;
use App\Models\Treasurer;
use App\Models\VicePresident;
use App\Models\Welfare;
use Illuminate\Http\Request;

class VoteResultController extends Controller
{
   public function votingResult(){

    $presidents =$this->getPresident();
    $vicePresidents = $this->getVicePresident();
    $generalSecretarys = $this->getGeneralSecretary();
    $treasurers = $this->getTreasurer();
    $DO_Sports = $this->getDO_Sports();
    $DO_Socials = $this->getDO_Socials();
    $welfares = $this->getWelfare();

    return view('voting_result')->with([

        'presidents' => $presidents['presidents'],
        'presidentsVotes' => $presidents['presidentsVotes'],

        'vicePresidents' => $vicePresidents['vicePresidents'],
        'vicePresidentsVotes' => $vicePresidents['vicePresidentsVotes'],

        'generalSecretarys' => $generalSecretarys['generalSecretarys'],
        'generalSecretarysVotes' => $generalSecretarys['generalSecretarysVotes'],

        'treasurers' => $treasurers['treasurers'],
        'treasurersVotes' => $treasurers['treasurersVotes'],

        'DO_Sports' => $DO_Sports['DO_Sports'],
        'DO_SportsVotes' => $DO_Sports['DO_SportsVotes'],

        'DO_Socials' => $DO_Socials['DO_Socials'],
        'DO_SocialsVotes' => $DO_Socials['DO_SocialsVotes'],

        'welfares' => $welfares['welfares'],
        'welfaresVotes' => $welfares['welfaresVotes'],

        ]);
    }

    public function getPresident(){

        return $details = array(

        'presidentsVotes' => President::count(),

    	'presidents' => President::DISTINCT()->get('president_name'),

        );

    }


    public function getVicePresident(){

        return $details = array(

        'vicePresidentsVotes' => VicePresident::count(),
        
        'vicePresidents' => VicePresident::DISTINCT()->get('vicePresident_name'),

        );

    }


    public function getGeneralSecretary(){

       return $details = array(

        'generalSecretarysVotes' => GeneralSecretary::count(),
        
        'generalSecretarys' => GeneralSecretary::DISTINCT()->get('general_secretary_name'),

        );
    }


    public function getTreasurer(){

       return $details = array(

        'treasurersVotes' => Treasurer::count(),
        
        'treasurers' => Treasurer::DISTINCT()->get('treasurer_name'),

        );
    }

    public function getDO_Sports(){

       return $details = array(

        'DO_SportsVotes' => DO_Sport::count(),
        
        'DO_Sports' => DO_Sport::DISTINCT()->get('DO_Sport_name'),

        );
    }


   public function getDO_Socials(){

       return $details = array(

        'DO_SocialsVotes' => DO_Social::count(),
        
        'DO_Socials' => DO_Social::DISTINCT()->get('DO_Social_name'),

        );
    }

    public function getWelfare(){

       return $details = array(

        'welfaresVotes' => Welfare::count(),
        
        'welfares' => Welfare::DISTINCT()->get('welfare_name'),

        );
    }

}
