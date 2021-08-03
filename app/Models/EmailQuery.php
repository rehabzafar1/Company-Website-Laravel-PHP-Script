<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class EmailQuery extends Model
{
    //
    protected $fillable = [
        'name',
        'email',
        'subject',
        'message',
        ];

    public function emailReply(){
        $this->hasMany(EmailReply::class);
    }
}
