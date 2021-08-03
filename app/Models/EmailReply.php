<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class EmailReply extends Model
{
    protected $fillable = [
        'subject',
        'message',
        'email_query_id',
    ];

    public function emailQuery(){
        $this->belongsTo(EmailQuery::class,'email_query_id');
    }
}
