<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DO_Social extends Model
{
    use HasFactory;

    protected $fillable = ['user_id', 'DO_Social_name'];

    public function getDO_SocailsVote($DO_SocialsName){

	return $this->where('DO_Social_name', $DO_SocialsName)->count();

}

}
