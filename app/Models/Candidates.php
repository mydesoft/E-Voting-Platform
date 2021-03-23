<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Candidates extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'email', 'phone_number', 'gender', 'faculty', 'department', 'level', 'matric_number', 'position', 'reason', 'cgpa', 'grade', 'image'];


     public function statuses(){
    	
    	return $this->belongsToMany(Status::class);
    }


    
    public function candidatePath(){

    	return url("/candidate/{$this->id}-" .Str::slug($this->name). '/edit');
    }

    public function hasSuccessfulStatus(){

    	foreach ($this->statuses as $status) {
    		
    		if ($status->status === 'successful') {
                
                return true;
            }

            else{

                return false;
            }
    	}
    	
    }
}
