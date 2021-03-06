<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use app\Models\Event;
use app\Models\Contact;

class People extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'surname'];

    public function event()
    {
        $this->belongsToMany(Event::class);
    }

    public function contact()
    {
        $this->hasMany(Contact::class);
    }
}
