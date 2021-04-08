<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UsuarioRol extends Model
{
    protected $table = 'usuarios_roles';//Utilizamos esto ya que al estar en español laravel el plural no lo entenderia y le estamos diciendo cn la tabla que se tiene que relaccionar

    use HasFactory;
}
