<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Parametr extends Model
{
    //
    protected $table = 'params';
    protected $fillable = ['id','name','value'];
}
