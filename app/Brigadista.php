<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Brigadista extends Model
{
    protected $table = 'brigadistas'; //selleciona la tabla a la cual esta enfocada el modelo
    protected $primaryKey = 'rut'; //hace referencia a la llave primaria
    public $incrementing = false; //no es autoincrementable
    protected $keyType = 'string'; //es de tipo string
    public $timestamps = false; //
}
