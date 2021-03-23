<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Mail\successfulCandidateMail;
use App\Models\Candidates;
use App\Models\Status;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class SuccessfulCandidateController extends Controller
{
    public function successfulPresident(){

       $successful = Status::where('status', 'successful')->firstOrFail();

       $president = 'president';

    	return view('admin.successful_candidates.president', compact('successful', 'president'));
    }

    public function successfulVicePresident(){

        $successful = Status::where('status', 'successful')->firstOrFail();
       
       $vice_president = 'vice-president';

    	return view('admin.successful_candidates.vice_president', compact('successful', 'vice_president'));
    }

    public function successfulGeneralSecretary(){

        $successful = Status::where('status', 'successful')->firstOrFail();
       
        $general_secretary = 'general-secretary';

    	return view('admin.successful_candidates.general_secretary', compact('successful', 'general_secretary'));
    }

    public function successfulTreasurer(){

        $successful = Status::where('status', 'successful')->firstOrFail();
       
        $treasurer = 'treasurer';

    	return view('admin.successful_candidates.treasurer', compact('successful', 'treasurer'));
    }

    public function successfulDOSocials(){

       $successful = Status::where('status', 'successful')->firstOrFail();
       
       $DO_Socials = 'DO-Socials';

    	return view('admin.successful_candidates.DOSocials', compact('successful', 'DO_Socials'));
    }

    public function successfulDOSports(){

        $successful = Status::where('status', 'successful')->firstOrFail();
       
        $DO_Sports = 'DO-Sports';

    	return view('admin.successful_candidates.DOSports', compact('successful', 'DO_Sports'));
    }

    public function successfulWelfare(){

        $successful = Status::where('status', 'successful')->firstOrFail();
       
        $welfare = 'welfare';

    	return view('admin.successful_candidates.welfare', compact('successful', 'welfare'));
    }

    public function sendCandidateMail($id){

       $candidate = Candidates::find($id); 

       Mail::to($candidate->email)->send(new successfulCandidateMail($candidate));   

       return back()->with('success', 'Mail sent to '. $candidate->name .' was successful');
    }

    public function deleteCandidate($id){

        $candidate = Candidates::find($id);

        $status = Status::where('status', 'successful')->firstOrFail();

        $candidate->statuses()->detach($status->id);

        return back()->with('success', 'Candidate removed from successful list');
    }


    public function mailAllCandidates($position)
    {
        $successfuls = Status::where('status', 'successful')->first();

        $successful = Status::find($successfuls->id)->candidates()->where('position', $position)->first();

        if ($successful) {
            
             foreach ($successfuls->candidates as $candidate) {
                
                if($candidate->position === $position){

                     Mail::to($candidate->email)->send(new successfulCandidateMail($candidate));

                     return back()->with('success', 'A mail has been sent to all the candidates');

                }
            }
        }

        else{
             return back()->with('error', 'We cannot send a mail right now, No successful candidates yet!');
            
        }
                
             } 
 
}
