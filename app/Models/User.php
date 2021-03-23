<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Str;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['name', 'department', 'email', 'matric_number', 'gender', 'faculty', 'level', 'image','voting_code', 'status', 'forget_code'];


    public function roles(){
    	return $this->belongsToMany(Role::class);
    }


    public function edit(){
        return url("/registered_student/{$this->id}-". Str::slug($this->name) .'/edit');
    }

   

}
