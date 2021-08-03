<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PackageOption extends Model
{
    //
    protected $fillable = [
        'name'
    ];
    function packages(){
        return $this->belongsToMany(Package::class);
    }
}
