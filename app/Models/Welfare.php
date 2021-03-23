<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Welfare extends Model
{
    use HasFactory;

    protected $fillable = ['user_id', 'welfare_name'];

    public function getwelfareVote($welfareName){

	return $this->where('welfare_name', $welfareName)->count();

}

}
