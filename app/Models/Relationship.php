<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Relationship extends Model
{
    protected $table = 'relationships';

    protected $fillable = [
        'time_follow',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

}
