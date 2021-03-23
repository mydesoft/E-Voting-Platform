<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Verified extends Model
{
    use HasFactory;
    protected $fillable = ['matric_number', 'email', 'CGPA', 'level', 'status'];
}
