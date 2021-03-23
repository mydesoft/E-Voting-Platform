<?php

namespace App\Traits;

use App\Models\Candidates;
use App\Models\Role;
use App\Models\User;
use App\Models\Verified;

trait RegisteredData{


	public function registeredStudent(){

		return $registeredStudentData = array(

			'100LevelStudent' =>  User::where('level', '100L')->paginate(20),

			'200LevelStudent' =>  User::where('level', '200L')->paginate(20),

			'300LevelStudent' =>  User::where('level', '300L')->paginate(20),

			'400LevelStudent' =>  User::where('level', '400L')->paginate(20),

			'500LevelStudent' =>  User::where('level', '500L')->paginate(20),

			
		);
		
	}

	public function registeredCandidate(){

		return $registeredCandidateData = array(

			'president' =>  Candidates::where('position', 'president')->get(),

			'vicePresident' =>  Candidates::where('position', 'vice-president')->get(),

			'general_secretary' =>  Candidates::where('position', 'general-secretary')->get(),

			'treasurer' =>  Candidates::where('position', 'treasurer')->get(),

			'welfare' =>  Candidates::where('position', 'welfare')->get(),

			'DO_Socials' =>  Candidates::where('position', 'DO-Socials')->get(),

			'DO_Sports' =>  Candidates::where('position', 'DO-Sports')->get(),


			

			
		);
	}

	public function verifiedCandidate(){

		return $verifiedCandidateData = Verified::orderBy('created_at', 'asc')->get();
	}

	
	public function registeredDataCount()
	{
		return $dataCount = array(

			'registeredCandidates' => Candidates::all()->count(),

			'registeredStudents' =>  User::all()->count(),

			'roleAdmin' => Role::where('name', 'admin')->firstOrFail(),

			'verifiedCandidates' => Verified::all()->count(),
		);
	}



}