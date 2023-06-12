<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gender extends Model
{
    use HasFactory;

    protected $fillable = ['gender'];
    protected $table = 'gender';

    public function userData()
    {
        return $this->hasOne(UserData::class);
    }
}
