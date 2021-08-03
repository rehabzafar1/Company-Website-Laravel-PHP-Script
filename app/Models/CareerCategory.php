<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CareerCategory extends Model
{
    //
    protected $fillable = [
        'name',
        'icon',
    ];
    function jobs(){
        return $this->hasMany(Job::class);
    }
}
