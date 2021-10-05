<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use app\Models\Contact;

class ContactType extends Model
{
    use HasFactory;

    protected $fillable = ['description'];

    public function contacts()
    {
        $this->hasMany(Contact::class);
    }
}
