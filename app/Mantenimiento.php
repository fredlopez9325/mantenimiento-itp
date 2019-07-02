<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mantenimiento extends Model
{
    protected $fillable = ['numero_control', 'mantenimiento', 'tipo_servicio', 'asignado_a', 'trabajo_realizado', 'verificado', 'correctivo_id'];

    public function correctivo()
    {
        return $this->belongsTo(Correctivo::class);
    }
}
