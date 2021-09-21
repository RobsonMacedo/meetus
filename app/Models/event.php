<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use app\Models\people;

class event extends Model
{
    use HasFactory;

    public function people()
    {
        $this->belongsToMany(People::class);
    }
}
