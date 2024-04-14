<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    use HasFactory;
    protected $table = "Department";
    protected $primarykey_id = "id";
    protected $fillable = [
        'name',
        // 'u_id',
    ];
    public function courses()
    {
        return $this->hasMany('App\Models\Courses', 'id' );
    }
}
