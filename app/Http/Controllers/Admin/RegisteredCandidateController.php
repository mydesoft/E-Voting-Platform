<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Candidates;
use App\Models\Status;
use App\Traits\RegisteredData;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class RegisteredCandidateController extends Controller
{
    use RegisteredData;

    public function presidentCandidate(){

        $presidentDatas = $this->registeredCandidate();

        $presidents = $presidentDatas['president'];

    	return view('admin.registered_candidates.president_candidate', compact('presidents'));
    }

     public function vicePresidentCandidate(){

        $vicePresidentDatas = $this->registeredCandidate();

        $vicePresidents = $vicePresidentDatas['vicePresident'];

    	return view('admin.registered_candidates.vice_president_candidate', compact('vicePresidents'));
    }

    
    public function secretaryCandidate(){

       $generalSecretaryDatas = $this->registeredCandidate();

       $generalSecretarys = $generalSecretaryDatas['general_secretary'];
          
     return view('admin.registered_candidates.general_secretary_candidate', compact('generalSecretarys'));

    }


     public function treasurerCandidate(){

         $treasureDatas = $this->registeredCandidate();

          $treasurers = $treasureDatas['treasurer'];

    	return view('admin.registered_candidates.treasurer_candidate', compact('treasurers'));
    }

     public function dOSportsCandidate(){

        $DO_SportsDatas = $this->registeredCandidate();

        $DO_Sports = $DO_SportsDatas['DO_Sports'];

    	return view('admin.registered_candidates.director_of_sports_candidate', compact('DO_Sports'));
    }

          
    public function dOSocialsCandidate(){

        $DO_SocialsDatas = $this->registeredCandidate();

        $DO_Socials = $DO_SocialsDatas['DO_Socials'];

         return view('admin.registered_candidates.director_of_socials_candidate', compact('DO_Socials'));
    }
    public function welfareCandidate(){

        $welfareDatas = $this->registeredCandidate();

        $welfares = $welfareDatas['welfare'];

    	return view('admin.registered_candidates.welfare_candidate', compact('welfares'));
    }

    public function editCandidate($id){

        $candidate = Candidates::find($id);

        return view('admin.registered_candidates.edit', compact('candidate'));
    }

    public function editCandidateData(Request $request, $id){

        $validated = $this->editCandidateValidation($request);

        $candidate = Candidates::find($id)->update($validated);

        return back()->with('success', 'Candidate Updated Successfully!');

    }


    public function markSuccessfulCandidate($id){

        $candidate = Candidates::find($id);
        
        $candidateStatus = Status::where('status', 'successful')->firstOrFail();

        $candidate->statuses()->attach($candidateStatus->id);

        return back()->with('success', 'Candidate application has been marked successful!');


    }


    public function deleteCandidate($id){

        $candidate = Candidates::find($id);

        File::delete(public_path('/storage/candidateImage/'. $candidate->image));

        $candidate->delete();

        return back()->with('success', 'Candidate deleted Successfully!');


    }

    public function editCandidateValidation(Request $request){

       return  $request->validate([
            'name' => 'required',
            'email' => 'required',
            'department' => 'required',
            'level' => 'required',
            'matric_number' => 'required',
            'cgpa' => 'required',
            'phone_number' => 'required',
            'gender' => 'required'
        ]);
    }
}
