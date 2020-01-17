<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    protected $fillable = array('title', 'points', 'matches_played', 'matches_won', 'matches_drawn', 'matches_lost', 'goals_difference');

    public function group()
    {
        return $this->belongsTo('App\Group');
    }
}
