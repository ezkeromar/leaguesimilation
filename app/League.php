<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class League extends Model
{
    public function matches()
    {
        return $this->hasMany('App\Matche');
    }
}
