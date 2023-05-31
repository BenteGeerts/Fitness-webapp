<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TrainingProgramsHistory extends Model
{
    use HasFactory;
    protected $table = 'training_program_history';

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function trainingProgram()
    {
        return $this->belongsTo(TrainingProgram::class);
    }

}
