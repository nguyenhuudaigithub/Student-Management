<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserBlog extends Model
{
    use HasFactory;

    protected $fillable = [
        'userId',
        'blogId',
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'userId');
    }

    public function blog()
    {
        return $this->belongsTo(Blog::class, 'blogId');
    }
}
