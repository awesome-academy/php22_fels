<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    protected $table = 'courses';

    protected $fillable = [
        'course_name',
        'course_time',
    ];

    public function courseUsers()
    {
        return $this->hasMany(Course_user::class);
    }

    public function lessons()
    {
        return $this->hasMany(Lesson::class);
    }
}
