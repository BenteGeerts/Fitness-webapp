<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Exercise extends Model
{
    use HasFactory;

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function programs()
    {
        return $this->belongsToMany(TrainingProgram::class, 'training_program_has_exercise');
    }

    public function weights()
    {
        return $this->hasMany(TrainingProgramHasWeight::class, 'exercise_id');
    }

    public function history()
    {
        return $this->hasMany(ExerciseHistory::class);
    }
}
