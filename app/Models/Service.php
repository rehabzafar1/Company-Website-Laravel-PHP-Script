<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    //
    protected $fillable = [
        'name',
        'description',
        'icon',
        'image'
    ];

    public function subServices(){
       return $this->hasMany(SubService::class,'service_id');
    }
}
