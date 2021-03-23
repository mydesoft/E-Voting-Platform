<?php

namespace App\Http\Controllers\Vote;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\President;
use App\Models\VicePresident;
use App\Models\GeneralSecretary;
use App\Models\Treasurer;
use App\Models\DO_Sport;
use App\Models\DO_Social;
use App\Models\Welfare;

class VoteCandidatesController extends Controller
{

public function votePresident(Request $request)
    {

         $studentHasVoted = President::pluck('user_id');

        if ($studentHasVoted->contains(Auth::id())) {

            Auth::user()->fill(['status' => 'voted'])->save();

            Auth::logout();

            return redirect()->route('login');
    }


    	President::create(['user_id' => Auth::id(), 'president_name' => $request->president_name]);
    	return redirect()->route('vicePresident')->with('toast_success', 'Your vote for '. $request->president_name .' has been submitted');
    }


public function voteVicePresident(Request $request)
    {
         $studentHasVoted = VicePresident::pluck('user_id');

        if ($studentHasVoted->contains(Auth::id())) {

            Auth::user()->fill(['status' => 'voted'])->save();

            Auth::logout();

            return redirect()->route('login');
    }

    	VicePresident::create([ 'user_id' => Auth::id(), 'vicePresident_name' => $request->vicePresident_name]);
    	return redirect()->route('generalSecretary')->with('toast_success', 'Your vote for '. $request->vicePresident_name .' has been submitted');
    }

 public function voteGeneralSecretary(Request $request)
    {
      
       $studentHasVoted = GeneralSecretary::pluck('user_id');

        if ($studentHasVoted->contains(Auth::id())) {

            Auth::user()->fill(['status' => 'voted'])->save();

            Auth::logout();

            return redirect()->route('login');
    }

        GeneralSecretary::create([ 
            'user_id' => Auth::id(), 
            'general_secretary_name' => $request->general_secretary_name
        ]);
        return redirect()->route('treasurer')->with('toast_success', 'Your vote for '. $request->general_secretary_name .' has been submitted');
    }

public function voteTreasurer(Request $request)
    {
        
         $studentHasVoted = Treasurer::pluck('user_id');

        if ($studentHasVoted->contains(Auth::id())) {

            Auth::user()->fill(['status' => 'voted'])->save();

            Auth::logout();

            return redirect()->route('login');
        }    

        Treasurer::create([ 'user_id' => Auth::id(), 'treasurer_name' => $request->treasurer_name]);
        return redirect()->route('directorOfSports')->with('toast_success', 'Your vote for '. $request->treasurer_name .' has been submitted');
    }

 public function voteDirectorOfSports(Request $request)
    {
         $studentHasVoted = DO_Sport::pluck('user_id');

        if ($studentHasVoted->contains(Auth::id())) {

            Auth::user()->fill(['status' => 'voted'])->save();

            Auth::logout();

            return redirect()->route('login');
    }

        DO_Sport::create(['user_id' => Auth::id(), 'DO_Sport_name' => $request->DO_Sport_name]);
        return redirect()->route('directorOfSocials')->with('toast_success', 'Your vote for '. $request->DO_Sport_name .' has been submitted');
    }

public function voteDirectorOfSocials(Request $request)
    {
        
         $studentHasVoted = DO_Social::pluck('user_id');

        if ($studentHasVoted->contains(Auth::id())) {

            Auth::user()->fill(['status' => 'voted'])->save();

            Auth::logout();

            return redirect()->route('login');
    }

        DO_Social::create(['user_id' => Auth::id(), 'DO_Social_name' => $request->DO_Social_name]);
        return redirect()->route('welfare')->with('toast_success', 'Your vote for '. $request->DO_Social_name .' has been submitted');
    }

 public function voteWelfare(Request $request)
    {
        $studentHasVoted = Welfare::pluck('user_id');

        if ($studentHasVoted->contains(Auth::id())) {

            Auth::user()->fill(['status' => 'voted'])->save();

            Auth::logout();

            return redirect()->route('login');
    }

        Welfare::create(['user_id' => Auth::id(), 'welfare_name' => $request->welfare_name]);

        $user = Auth::user();

        $user->fill(['status' => 'voted'])->save();

        Auth::logout($user);

        return redirect()->route('votingConfirmation')->with('toast_success', 'You have Successfully Voted for your candidates');
    }

 public function votingConfirmation(){
        if (!(session()->has('toast_success'))) {
            return redirect()->route('index');
        }
        return view('includes.voting_confirmation');
    }
}
