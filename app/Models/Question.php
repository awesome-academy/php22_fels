<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    protected $table = 'question';

    protected $fillable = [
        'content',
    ];

    public function lesson()
    {
        return $this->belongsTo(Lesson::class);
    }
}
