<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Auth;

class President extends Model
{
    use HasFactory;
    protected $fillable = [ 'user_id', 'president_name'];

public function getPresidentVote($presidentName){

	return $this->where('president_name', $presidentName)->count();

}

   
}
