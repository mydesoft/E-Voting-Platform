<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VicePresident extends Model
{
    use HasFactory;

    protected $fillable = ['user_id', 'vicePresident_name'];

    public function getVicePresidentVote($vicePresidentName){

	return $this->where('vicePresident_name', $vicePresidentName)->count();

}
}
