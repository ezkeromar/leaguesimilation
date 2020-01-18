<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MatchesHistory extends Model
{
    public function teamA()
    {
        return $this->belongsTo('App\Team', 'team_a', 'id');
    }

    public function teamB()
    {
        return $this->belongsTo('App\Team', 'team_b', 'id');
    }
}
