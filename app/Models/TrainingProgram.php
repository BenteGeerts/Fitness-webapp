<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TrainingProgram extends Model
{
    use HasFactory;
    protected $table = 'training_programs';

    public function exercises()
    {
        return $this->belongsToMany(Exercise::class, 'training_program_has_exercise');
    }
}
