<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Courses extends Model
{
    use HasFactory;
    protected $table = 'Courses';

    protected $fillable = [
        'course_code',
        'name',
        'details',
        'price',
        'start_time',
        'end_time',
        'classroom',
    ];


    public function users()
    {
        return $this->belongsToMany(User::class, 'courses_user', 'courses_id', 'user_id')->withTimestamps();
    }
}
