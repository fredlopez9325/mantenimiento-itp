<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Infraestructura extends Model
{
    protected $fillable = ['user_id', 'role', 'folio'];

    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function departamento()
    {
        return $this->belongsTo('App\Departemento');
    }

    public function area()
    {
        return $this->hasMany('App\Area');
    }
}
