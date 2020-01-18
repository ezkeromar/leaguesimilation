<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Matche extends Model
{
    public function league()
    {
        return $this->belongsTo('App\League');
    }

    public function teamA()
    {
        return $this->belongsTo('App\Team', 'team_a', 'id');
    }

    public function teamB()
    {
        return $this->belongsTo('App\Team', 'team_b', 'id');
    }
}
