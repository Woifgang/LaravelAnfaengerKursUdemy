<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Car extends Model
{

    protected $fillable = ['name', 'baujahr'];

    //Relationship One To One
    /*
    public function garage()
    {
        return $this->hasOne('App\Garage');
    }
    */

    public function garages()
    {
        return $this->belongsToMany('App\Garage');
    }
}
