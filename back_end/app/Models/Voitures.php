<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Voitures extends Model
{
    protected $fillable = [
        'name',
        'type',
        'marque',
        'place',
        'prix',
        'photo'
    ];
}
