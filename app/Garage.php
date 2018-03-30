<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Garage extends Model
{

    protected $fillable = ['name'];

    public function car()
    {
        return $this->hasOne('App\Car');
    }
}
