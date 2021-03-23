<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Traits\RegisteredData;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;

class RegisteredStudentController extends Controller
{   
    use RegisteredData; 

    public function _100LevelStudents(){

        $datas = $this->registeredStudent();

        $_100LevelStudentDatas = $datas['100LevelStudent'];
    
    	return view('admin.registered_students.100level_students', compact('_100LevelStudentDatas'));
    }

    public function _200LevelStudents(){

        $registeredStudentDatas = $this->registeredStudent();

    	return view('admin.registered_students.200level_students')
                    ->with('_200LevelStudentDatas', $registeredStudentDatas['200LevelStudent']);
    }

    public function _300LevelStudents(){

        $registeredStudentDatas = $this->registeredStudent();

    	return view('admin.registered_students.300level_students')
                    ->with('_300LevelStudentDatas', $registeredStudentDatas['300LevelStudent']);
    }

    public function _400LevelStudents(){

        $registeredStudentDatas = $this->registeredStudent();

    	return view('admin.registered_students.400level_students')
                ->with('_400LevelStudentDatas', $registeredStudentDatas['400LevelStudent']);
    }

    public function _500LevelStudents(){

        $registeredStudentDatas = $this->registeredStudent();

    	return view('admin.registered_students.500level_students')
                    ->with('_500LevelStudentDatas', $registeredStudentDatas['500LevelStudent']);
    }

    public function editRegisteredStudentPage($id){

        $user = User::find($id);

        return view('admin.registered_students.edit', compact('user'));
    }

    public function editRegisteredStudent(Request $request, $id){

        $validated = $this->editRegisteredStudentValidation($request);

        $user = User::find($id)->update($validated);

        return back()->with('success', 'Student Profile Updated Successfully!');
       
   
    }

    public function deleteRegisteredStudent($id){

        $user = User::find($id);

        File::delete(public_path('/storage/studentImage/'. $user->image));

        $user->delete();

        return back()->with('success', 'User deleted Successfully!');
    }



    public function search(Request $request){
        $data = User::where('email', 'LIKE', '%'. $request->email .'%')->get();
   
        return response()->json($data);
    }

    public function editRegisteredStudentValidation(Request $request){

        return $request->validate([
            'name' => 'required',
            'email' => 'required',
            'voting_code' => 'required',
            'department' => 'required',
            'level' => 'required',
            'matric_number' => 'required',
        ]);
    }


   


}
