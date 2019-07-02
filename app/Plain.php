<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Plain extends Model
{
    protected $fillable = ['number', 'preventivo_id', 'servicio' ,'tipo' ,'e' ,'ene' ,'feb' ,'mar' ,'abr' ,'may' ,'jun' ,'jul' ,'ago' ,'sep' ,'oct' ,'nov' ,'dic'];

    public function preventivo()
    {
        return $this->belongsTo('App/Preventivo');
    }
}
