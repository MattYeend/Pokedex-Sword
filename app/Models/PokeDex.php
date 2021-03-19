<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pokedex extends Model
{
    /**
     * Get all of the colors in Type for Pokedex.
     */
    public function colours()
    {
        return $this->hasMany('App\Models\Type', 'type', 'type 1');
    }
}