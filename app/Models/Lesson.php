<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Lesson extends Model
{
    protected $table = 'lessons';

    protected $fillable = [
        'name',
        'learn_time',
    ];

    public function wordlist()
    {
        return $this->hasOne(Wordlist::class);
    }

    public function course()
    {
        return $this->belongsTo(Course::class);
    }

    public function result()
    {
        return $this->hasOne(Result::class);
    }

    public function questions()
    {
        return $this->hasMany(Question::class);
    }
}
