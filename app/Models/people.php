<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use app\Models\event;

class people extends Model
{
    use HasFactory;

    public function event()
    {
        $this->belongsToMany(event::class);
    }
}
