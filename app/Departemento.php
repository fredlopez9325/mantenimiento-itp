<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Departemento extends Model
{
    protected $fillable = ['name', 'role'];

    public function User()
    {
        return $this->hasOne('App\User');
    }

    public function infraestructura()
    {
        return $this->hasMany('App\Infraestructura');
    }
    
    public function correctivo()
    {
        return $this->hasMany('App\Correctivo');
    }
}
