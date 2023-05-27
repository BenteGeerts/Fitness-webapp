<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TrainingProgram extends Model
{
    protected $fillable = [
        'name',
        'slug',
        'user_id',
        'total_diamonds',
        'level_id',
    ];

    use HasFactory;
    protected $table = 'training_programs';

    public function exercises()
    {
        return $this->belongsToMany(Exercise::class, 'training_program_has_exercise');
    }

    public function exercisesWithWeight()
    {
        return $this->belongsToMany(Exercise::class, 'training_program_has_weights');
    }

    public function level()
    {
        return $this->hasOne(Level::class);
    }
}
