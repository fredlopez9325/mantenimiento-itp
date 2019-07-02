<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Periodo extends Model
{
    protected $fillable = ['name', 'start', 'end'];

    public function preventivo()
    {
        return $this->hasOne(Preventivo::class);
    }
}
