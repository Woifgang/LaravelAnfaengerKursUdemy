<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Garage extends Model
{

    protected $fillable = ['name'];


    //Relationship One To One
    /*
    public function car()
    {
        return $this->hasOne('App\Car');
    }
    */

    public function cars()
    {
        return $this->belongsToMany('App\Car');
    }
}
