<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserData extends Model
{
    use HasFactory;
    protected $table = "users_data";

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function userGoals()
    {
        return $this->hasOne(UserGoal::class, "id", "goal");
    }

    public function gender()
    {
        return $this->hasOne(Gender::class);
    }
}
