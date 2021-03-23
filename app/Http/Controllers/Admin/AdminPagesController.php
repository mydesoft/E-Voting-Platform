<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin;
use App\Models\Candidates;
use App\Models\Role;
use App\Models\User;
use App\Models\Verified;
use App\Traits\RegisteredData;
use Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AdminPagesController extends Controller
{
    use RegisteredData ;

    public function adminDashboard(){
        
        $registeredStudentDatas = $this->registeredStudent();

        $registeredCandidateDatas = $this->registeredCandidate();

    	$dataCounts = $this->registeredDataCount();

        $verifiedCandidateDatas = $this->verifiedCandidate();

    	return view('admin.admin_dashboard')->with([

            '_100LevelStudents' => $registeredStudentDatas['100LevelStudent'],
            '_200LevelStudents' => $registeredStudentDatas['200LevelStudent'],
            '_300LevelStudents' => $registeredStudentDatas['300LevelStudent'],
            '_400LevelStudents' => $registeredStudentDatas['400LevelStudent'],
            '_500LevelStudents' => $registeredStudentDatas['500LevelStudent'],

            'registeredCandidates' => $dataCounts['registeredCandidates'],
            'registeredStudents' => $dataCounts['registeredStudents'],
            'roleAdmin' => $dataCounts['roleAdmin'],
            'verifiedCandidates' => $dataCounts['verifiedCandidates'],


            'president' => $registeredCandidateDatas['president'],
            'vicePresident' => $registeredCandidateDatas['vicePresident'],
            'treasurer' => $registeredCandidateDatas['treasurer'],
            'welfare' => $registeredCandidateDatas['welfare'],
            'general_secretary' => $registeredCandidateDatas['general_secretary'],
            'DO_Socials' => $registeredCandidateDatas['DO_Socials'],
            'DO_Sports' => $registeredCandidateDatas['DO_Sports'],

            'verifiedCandidateDatas' => $verifiedCandidateDatas,

        ]);
    }

    public function adminLogin(){

    	return view('admin.admin_login');
    }

    public function loginSystemAdmin(Request $request){

    	$request->validate(['username' => 'required', 'password' => 'required']);

    	if (Auth::guard('admin')->attempt(['username' => $request->username, 'password' => $request->password])) {

    		return redirect()->route('adminDashboard');
    		
    	}
    	else{
    		return back()->with('error', 'Invalid Details!');
    	}
    }

    


    public function adminProfile(){
    	return view('admin.admin_profile');
    }

    public function updateAdminPassword(Request $request){

    	$request->validate([
    		'old_password' => 'required', 
    		'password' => 'required|confirmed', 
    		'password_confirmation' => 'required'
    	]);

    	$admin = Auth::guard('admin')->user();

    	if (!(Hash::check($request->old_password, $admin->password))) {

    		return back()->with('error', 'Old Password does not match!');

    	}

    	$admin->fill(['password' => Hash::make($request->password)])->save();

    	return back()->with('success', 'Password Changed Successfully!');
    }


     public function adminLockScreen(Request $request){

     	$adminUsername = Auth::guard('admin')->user()->username;

     	$request->session()->put(['username' => $adminUsername]);

     	$userName = $request->session()->get('username');

    	return view('admin.admin_lockscreen', compact('userName'));
    }


    public function adminLockScreenAction(Request $request)
    {
    	$request->validate(['password' => 'required']);

    	$username = $request->session()->pull('username');

    	if (Auth::guard('admin')->attempt(['username' => $username, 'password' => $request->password])) {

    		return redirect()->route('adminDashboard');
    		
    	}
    	else{
    		return back()->with('error', 'Invalid Password!');
    	}

    }


    public function editAdminProfile(Request $request){
        $validated = $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'username' => 'required',
        ]);

        $admin = Auth::guard('admin')->user();

        $admin->update($validated);

        return back()->with('success', 'Profile Updated Successfully!');
    }

    public function adminLogout(){

    	Auth::guard('admin')->logout();

    	return redirect()->route('adminLogin');
    }


    public function _100LevelStudents(){
        return $users = User::where('level', '100L')->get();
    }

   
}
