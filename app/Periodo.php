<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Periodo extends Model
{
    protected $table = 'periodos';
    protected $primaryKey = 'cod_periodo';
    public $incrementing = false;
    public $timestamps = false;
}
