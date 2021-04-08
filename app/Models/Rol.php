<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rol extends Model
{

    use HasFactory;
    protected $table = 'roles';//Utilizamos esto ya que al estar en español laravel el plural no lo entenderia y le estamos diciendo cn la tabla que se tiene que relaccionar
    protected $guarded = [];

}
