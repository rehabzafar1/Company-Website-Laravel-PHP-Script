<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Package extends Model
{
    //
    protected $fillable = [
        'name',
        'icon',
        'price',
    ];

    function options(){
        return $this->belongsToMany(PackageOption::class);
    }
}
