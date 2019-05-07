<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Wordlist extends Model
{
    protected $table = 'wordlists';

    protected $fillable = [
        'word_status',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function lesson()
    {
        return $this->belongsTo(Lesson::class);
    }
}
