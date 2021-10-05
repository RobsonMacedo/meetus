<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use app\Models\People;

class Event extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'street',
        'number',
        'country',
        'state',
        'date',
        'duration',
        'is_public',
        'price',
        'description',
        'organizer',
    ];

    public function people()
    {
        $this->belongsToMany(People::class);
    }
}
