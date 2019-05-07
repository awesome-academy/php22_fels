<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Result extends Model
{
    protected $table = 'results';

    protected $fillable = [
        'score',
    ];

    public function lesson()
    {
        return $this->belongsTo(Lesson::class);
}
