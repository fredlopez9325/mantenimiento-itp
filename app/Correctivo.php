<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Correctivo extends Model
{
    protected $fillable = ['user_id', 'role', 'folio', 'descripcion'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function departamento()
    {
        return $this->belongsTo(Departemento::class);
    }

    public function mantenimiento()
    {
        return $this->hasOne(Mantenimiento::class);
    }
}
