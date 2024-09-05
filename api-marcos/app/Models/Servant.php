<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Servant extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'class',
        'noble_phantasm',
        'description',
        'strength',
        'endurance',
        'agility',
        'mana',
        'luck',
        'noble_phantasm_level'
    ];

}
