<?php

namespace App\Http\Controllers\Admin;

use App\Events\adminCreatedEvent;
use App\Http\Controllers\Controller;
use App\Models\Admin;
use App\Models\Role;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class SystemAdminController extends Controller
{

     public function addAdmin(){

        return view('admin.system_admin.add_admin');
    }

      public function addSystemAdmin(Request $request){

        $validated = $this->addSystemAdminValidations($request); 

        $admin = Admin::create([
            'name' => $request->name,
            'email' => $request->email,
            'username' => $request->username,
            'password' => Hash::make($request->password)
        ]);

        event(new adminCreatedEvent($admin));

        return back()->with('success', 'New Admin Added Succesfully!');
    }


    public function viewAdmin(){

     $role = Role::where('name', 'admin')->firstOrFail();

     return view('admin.system_admin.view_admin', compact('role'));
    }

    public function editAdmin($id){

        $admin = Admin::find($id);

        return view('admin.system_admin.edit_admin', compact('admin'));
    }

    public function editAdminData(Request $request, $id){

        $validated = $request->validate([
            'name' => 'required',
            'email' => 'required',
            'username' => 'required',
        ]);

        $admin = Admin::find($id)->update($validated);

        return back()->with('success', 'Admin Profile Updated Successfully!');
    }

    public function changePassword($id)
    {
        $admin = Admin::find($id);

        return view('admin.system_admin.change_admin_password', compact('admin'));
    }

    public function changeAdminPassword(Request $request, $id){

        $validated = $request->validate([

            'password' => 'required|confirmed',

            'password_confirmation' => 'required',
        ]); 

        $admin = Admin::find($id);

        $admin->fill(['password' => Hash::make($request->password)])->save();

        return back()->with('success', 'Password Changed Successfully!');
        
    }

  public function deleteAdmin($id)
  {
      $admin = Admin::find($id)->delete();

      return back()->with('success', 'Admin deleted!');
  }


    public function addSystemAdminValidations(Request $request){
    	return $request->validate([
    		'name' => 'required',
    		'email' => 'required|email',
    		'username' => 'required',
    		'password' => 'required|confirmed'
    	]);
    }
}
