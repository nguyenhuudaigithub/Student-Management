<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ChatTranscript extends Model
{
    protected $fillable = ['message', 'user_id'];
}
