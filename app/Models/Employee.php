<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    //
    protected $fillable = [
        'name',
        'designation',
        'description',
        'email',
        'phone',
        'facebook',
        'linkedin',
        'image'
    ];
}
