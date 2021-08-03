<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    //
    protected $fillable =([
        'name',
        'description',
        'experience',
        'type',
        'expiry',
        'location',
        'career_category_id',
    ]);

    public function category(){
        return $this->belongsTo(CareerCategory::class, 'career_category_id');
    }
}
