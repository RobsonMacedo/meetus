<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use app\Models\Event;

class EventType extends Model
{
    use HasFactory;

    protected $fillable = ['description'];

    public function events()
    {
        $this->hasMany(Event::class);
    }
}
