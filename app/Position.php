<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;

class Position extends Model
{
    //
    protected $table = 'positions';
    protected $fillable = ['id','name','name_rp'];

    public function users(){
    	
        return $this->hasMany('App\User');
    }
}
