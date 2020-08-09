<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Brigadista extends Model
{
    protected $table = 'brigadistas';
    protected $primaryKey = 'id';
    public $timestamps = false;
}
