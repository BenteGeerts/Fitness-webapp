<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Shop extends Model
{
    use HasFactory;
    protected $table = 'shop';

    public function powerUp()
    {
        return $this->belongsTo(PowerUp::class, 'power_up_id');
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
