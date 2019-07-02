<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Area extends Model
{
    protected $fillable = ['infraestructura_id', 'espacio_revizado', 'hallazgo', 'atendido'];

    public function infraestructura()
    {
        return $this->belongsTo('App\Infraestructura');
    }
}
