<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Preventivo extends Model
{
    protected $fillable = ['user_id', 'aprobo', 'semestre', 'año', 'fecha_aprobacion', 'periodo_id'];

    public function plains()
    {
        return $this->hasMany(Plain::class);
    }
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function periodo()
    {
        return $this->belongsTo(Periodo::class);
    }
}
