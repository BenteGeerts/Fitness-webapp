<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserData extends Model
{
    use HasFactory;
    protected $fillable = ['gender_id', 'goal_id'];
    protected $table = "users_data";

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function goal()
    {
        return $this->belongsTo(UserGoal::class);
    }

    public function gender()
    {
        return $this->belongsTo(Gender::class);
    }
}
