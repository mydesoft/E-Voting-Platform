<?php

namespace App\Http\Controllers\Candidate;

use App\Http\Controllers\Controller;
use App\Models\Candidates;
use App\Events\candidateRegisteredEvent;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

class CandidateController extends Controller
{
    public function firstCandidatePage(Request $request)
    {
         return view('candidate.candidate1');
            
    }

    public function firstCandidateRegistration(Request $request){

    	$validated = $this->firstCandidateValidations($request);

        $candidateEmail = Candidates::where('email', $validated['email'])->first();
        if ($candidateEmail) {

            return back()->with('error', 'Email Already Exists!');
        }
    	$request->session()->put($validated);

    	return redirect()->route('secondCandidatePage')->with('toast_success', 'First Stage Completed Succesfully!');
    }

    public function secondCandidatePage()
    {

    		return view('candidate.candidate2');
    }


    public function secondCandidateRegistration(Request $request){

    	$secondValidated = $this->secondCandidateValidations($request);

        $matricNumber = $request->session()->get('matric_number');

        $candidateMatricNumber = Candidates::where('matric_number', $matricNumber)->first();
        
        if ($candidateMatricNumber) {

            return back()->with('error', 'Matric Number Already Exists!');
        }

    	$request->session()->put($secondValidated);
      
    	return redirect()->route('thirdCandidatePage')->with('toast_success', 'Second Stage Completed Succesfully!');
    }

     public function thirdCandidatePage(Request $request)
    {
        $userLevel  = $request->session()->get('level');
        $level = '300L';
        
    	return view('candidate.candidate3', compact('userLevel', 'level'));
    }

    public function thirdCandidateRegistration(Request $request){

        $this->thirdCandidateValidations($request);

        if ($request->hasFile('image')) {
            $imageNameAndExt = $request->file('image')->getClientOriginalName();
            $imageName = pathinfo($imageNameAndExt, PATHINFO_FILENAME);
            $imageExt = $request->file('image')->getClientOriginalExtension();
            $imageStore = $imageName.'-'.time().'.'.$imageExt;
            $imagePath = $request->file('image')->storeAs('public/candidateImage', $imageStore);
            $image = Image::make(public_path('/storage/candidateImage/'. $imageStore))->fit(150, 200)->save();
        }


       $candidate = Candidates::create([

            'name' => $request->session()->pull('name'),
            'email' => $request->session()->pull('email'),
            'phone_number' => $request->session()->pull('phone_number'),
            'gender' => $request->session()->pull('gender'),
            'faculty' => $request->session()->pull('faculty'),
            'department' => $request->session()->pull('department'),
            'level' => $request->session()->pull('level'),
            'matric_number' => $request->session()->pull('matric_number'),
            'position' => $request->position,
            'reason' => $request->reason,
            'cgpa' => (float)$request->session()->pull('CGPA'),
            'grade' => $request->grade,
            'image' => $imageStore,

        ]);

        event(new candidateRegisteredEvent($candidate));

        return redirect()->route('candidateConfirmation')
                            ->with('toast_success', 'Your Registration was Successful!');

    }


    public function candidateConfirmation(){
        if (!session()->has('toast_success')) {

            return redirect()->route('verify');
        }

        return view('includes.candidate_confirmation');
    }


    //Validations

    public function firstCandidateValidations(Request $request)
    {
    	return $request->validate([
    		'email' => 'required',
    		'name' => 'required',
    		'phone_number' => 'required|min:11',
    		'gender' => 'required'

    		],
    		[
    			'phone_number.integer' => 'Phone Number must be a valid Number!'
    		]
    	);
    }


     public function secondCandidateValidations(Request $request)
    {
    	return $request->validate([
    		'faculty' => 'required',
    		'department' => 'required',

    		]
    	);
    }


     public function thirdCandidateValidations(Request $request)
    {
        return $request->validate([
            'position' => 'required',
            'reason' => 'required|max:250',
            'grade' => 'required',
            'image' => 'required|image'

            ]
        );
    }
}
