<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Blog extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'description',
        'detail',
        'tags',
        'slug',
        'isActive',
    ];
    protected $casts = [
        'isActive' => 'boolean',
    ];

    public function setTitleAttribute($value)
    {
        $this->attributes['title'] = $value;
        $this->attributes['slug'] = Str::slug($value);
    }

    public function users()
    {
        return $this->belongsToMany(User::class, 'user_blogs', 'blog_id', 'user_id')->withTimestamps();
    }
}
