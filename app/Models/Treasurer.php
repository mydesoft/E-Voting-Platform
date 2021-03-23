<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Treasurer extends Model
{
    use HasFactory;

    protected $fillable = ['user_id', 'treasurer_name'];

    public function getTreasurerVote($treasurerName){

	return $this->where('treasurer_name', $treasurerName)->count();

}
}
