<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use app\Models\ContactType;

class Contact extends Model
{
    use HasFactory;

    protected $fillable = ['description'];
}
