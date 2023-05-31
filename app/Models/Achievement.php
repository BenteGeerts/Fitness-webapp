<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Achievement extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'streak_length',
    ];

    public function user()
    {
        return $this->hasOne(User::class);
    }
}