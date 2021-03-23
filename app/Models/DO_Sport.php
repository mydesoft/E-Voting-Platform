<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DO_Sport extends Model
{
    use HasFactory;

    protected $fillable = ['user_id', 'DO_Sport_name'];

      public function getDO_SportsVote($DO_SportsName){

	return $this->where('DO_Sport_name', $DO_SportsName)->count();

}
}
