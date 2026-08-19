<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    //
    protected $fillable = [
        'class_name',
        'student_no',
        'name',
        'password',
        'email',
    ];

    protected $hidden = [
        'password',
    ];
}
