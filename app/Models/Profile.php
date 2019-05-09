<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $table = 'profiles';

    protected $fillable = [
        'full_name',
        'birth_day',
        'phone_number',
        'address',
        'avatar',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
