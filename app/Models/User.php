<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    /*
    use HasApiTokens, HasFactory, Notifiable;

    protected $fillable = [
      'nombre',
      'correo',
      'contraseña',
    ];
protected $table = 'usuarios';

const CREATED_AT = 'fecha_creado';

const UPDATED_AT = 'fecha_modificado';


    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
    */
}
