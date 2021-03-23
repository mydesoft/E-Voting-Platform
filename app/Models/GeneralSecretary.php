<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GeneralSecretary extends Model
{
    use HasFactory;

    protected $fillable = ['user_id', 'general_secretary_name'];

    public function getGeneralSecretaryVote($generalSecretaryName){

	return $this->where('general_secretary_name', $generalSecretaryName)->count();

}

}
