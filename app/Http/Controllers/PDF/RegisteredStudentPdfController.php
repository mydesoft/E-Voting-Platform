<?php

namespace App\Http\Controllers\PDF;

use App\Http\Controllers\Controller;
use App\Traits\RegisteredData;
use Illuminate\Http\Request;

class RegisteredStudentPdfController extends Controller
{
	use RegisteredData;

    public function pdf($student)
    {
    	if ($student === '100level') {

    	 $datas = $this->registeredStudent();
        
       	 $_100LevelStudentDatas = $datas['100LevelStudent'];
      
    	 $pdf = \PDF::loadView('admin.pdf.registered_students.100level', [

    		'_100LevelStudentDatas' => $_100LevelStudentDatas
    	 ]);
    	}

    	elseif ($student === '200level') {

    		$datas = $this->registeredStudent();
        
       	    $_200LevelStudentDatas = $datas['200LevelStudent'];
      
    		$pdf = \PDF::loadView('admin.pdf.registered_students.200level', [

    		'_200LevelStudentDatas' => $_200LevelStudentDatas
    		]);
    	}

    	elseif ($student === '300level') {

    		$datas = $this->registeredStudent();
        
        	$_300LevelStudentDatas = $datas['300LevelStudent'];
      
    		$pdf = \PDF::loadView('admin.pdf.registered_students.300level', [

    		'_300LevelStudentDatas' => $_300LevelStudentDatas
    		]);
    	}

    	elseif ($student === '400level') {

    		$datas = $this->registeredStudent();
        
        	$_400LevelStudentDatas = $datas['400LevelStudent'];
      
    		$pdf = \PDF::loadView('admin.pdf.registered_students.400level', [

    		'_400LevelStudentDatas' => $_400LevelStudentDatas
    		]);
    	}

    	elseif ($student === '500level') {

    		$datas = $this->registeredStudent();
        
        	$_500LevelStudentDatas = $datas['500LevelStudent'];
      
    		$pdf = \PDF::loadView('admin.pdf.registered_students.500level', [

    		'_500LevelStudentDatas' => $_500LevelStudentDatas
    		]);
    	}
       

    	return $pdf->stream( $student .'.pdf');
    }
}
