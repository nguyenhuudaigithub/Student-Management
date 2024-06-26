<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CoursUser extends Model
{
    use HasFactory;
    protected $table = 'CoursesUser';

    protected $fillable = [
        'user_id',
        'courses_id',
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function courses()
    {
        return $this->belongsTo(Courses::class, 'courses_id');
    }
}
