<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    public function garage()
    {
        return $this->hasOne('App\Garage');
    }
}
