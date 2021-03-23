<?php

namespace App\Http\Controllers\Registration;

use App\Events\studentRegisteredEvent;
use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Intervention\Image\Facades\Image;



class RegistrationController extends Controller
{

    public function firstRegistrationPage()
    {
    	return view('registration.register');
    }



    public function studentFirstRegistration(Request $request){


    	$studentRegistrationValidate = $this->studentFirstRegistrationValidations($request);

        $studentEmail = User::where('email', $studentRegistrationValidate['email'])->first();

        if ($studentEmail) {

            return back()->with('error', 'Email Already Exists!');

        }
        else{

            $request->session()->put($studentRegistrationValidate);

            return redirect()->route('secondRegistrationPage')->with('toast_success', 'First Step Completed!');

        }
    }



    public function secondRegistrationPage()
    {
    	return view('registration.register2');
    }



    public function studentImage(Request $request){

    	$request->validate(['image' => 'required|image']);

    	if ($request->hasFile('image')) {
    		$studentImageFile = $request->file('image')->getClientOriginalName();
    		$studentImageName = pathinfo($studentImageFile, PATHINFO_FILENAME);
    		$studentImageExt = $request->file('image')->getClientOriginalExtension();
    		$studentImageStore = $studentImageName.'_'.time().'.'.$studentImageExt;
            $studentImagePath = $request->file('image')->storeAs('public/studentImage', $studentImageStore);
            $image = Image::make(public_path('/storage/studentImage/'. $studentImageStore))->fit(100, 150)->save();
    	}

         $request->session()->put(['image' => $studentImageStore]);
       
         $studentImage = $request->session()->get('image');

        return back()->with('image', $studentImage)
                     ->with('toast_success', 'Image Uploaded Succesfully!');
    }



    public function studentSecondRegistration(Request $request){
         
       $studentRegistrationValidate = $this->studentSecondRegistrationValidations($request);
        
        $studentMatricNumber = User::where('matric_number', $studentRegistrationValidate['matric_number'])->first();

        if ($studentMatricNumber) {

            return back()->with('error', 'Matric Number Already Exists!');
        }

        else{

        $user = User::create([
            'name' => $request->session()->pull('name'),
            'email' => $request->session()->pull('email'),
            'gender' => $request->session()->pull('gender'),
            'level' => $request->session()->pull('level'),
            'image' => $request->image,
            'faculty' => $request->faculty,
            'department' => $request->department,
            'matric_number' => $request->matric_number,
            'voting_code' => Str::random(8),
        ]);

        event(new studentRegisteredEvent($user));

        return redirect()->route('confirmation')->with('toast_success', 'Your Registration was Successful!');
    
        }
 }


    public function confirmation()
    {
        if (!(session()->has('toast_success'))) {
            return redirect()->route('firstRegistrationPage');
        }
        
        return view('includes.confirmation');
        
    }


    public function studentFirstRegistrationValidations(Request $request){

		 return $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'gender' => 'required',
            'level' => 'required'
		]

		);
	}

    public function studentSecondRegistrationValidations(Request $request){

         return $request->validate([
            'faculty' => 'required',
            'department' => 'required',
            'matric_number' => 'required'
        ]

        );
    }

    
}
