<?php

namespace App\Models;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticable;
use Illuminate\Notifications\Notifiable;

class Usuario extends Authenticable
{
    use HasFactory, Notifiable;
    protected $guarded = [];

    protected $hidden =[
        'password',
        'remember_token',
    ];

    protected $casts =[

        'email_verified_at'=>'datetime',
    ];

    public function roles(){

        return $this->belongsToMany(Rol::class, 'usuarios_roles', 'usuarios_id', 'roles_id');
    }
}
