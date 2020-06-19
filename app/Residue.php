<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Residue extends Model
{
    protected $fillable = [
        'name', 'type', 'category', 'treatment', 'class', 'unit_measurement', 'weight'
    ];
}
