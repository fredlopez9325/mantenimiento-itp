<?php

namespace App;
use Laravel\Passport\HasApiTokens;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Spatie\Permission\Traits\HasRoles;
class User extends Authenticatable
{
    use HasApiTokens, Notifiable;
    use HasRoles;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'role'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function departamento()
    {
        return $this->belongsTo('App\Departemento');
    }

    public function infraestructura()
    {
        return $this->hasMany('App\Infraestructura');
    }

    public function correctivo()
    {
        return $this->hasMany('App\Correctivo');
    }
    public function preventivos()
    {
        return $this->hasMany('App\Preventivo');
    }
}
