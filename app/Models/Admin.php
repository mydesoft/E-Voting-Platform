<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;


class Admin extends Authenticatable
{
    use HasFactory, Notifiable;

    protected $fillable = ['name', 'email', 'username', 'password', 'password_confirmation'];

    public function roles(){

    	return $this->belongsToMany(Role::class, 'admin_role', 'admin_id', 'role_id' );
    }


    // protected $guarded = ['admin'];

    // protected $hidden = [
    //  'admin_code', 'remember_token',
    // ];

    public function hasRoleSuperAdmin()
    {

    	foreach ($this->roles as $role) {
    		
    		if ($role->name === 'super-admin') {
    			
    			return true;
    		}
    

    		else{
    			return false;
    		}
   		 }
	}
}
