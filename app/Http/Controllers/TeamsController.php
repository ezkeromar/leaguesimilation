<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Team;
use \App\Group;

class TeamsController extends Controller
{
    public function index() {
        $groupInfo = Group::first();
        $teams = $groupInfo
            ->teams()
            ->select('title', 'points', 'matches_played', 'matches_won', 'matches_drawn', 'matches_lost', 'goals_difference')
            ->get();
        return view('welcome', array('title' => $groupInfo->title, 'teams' => $teams));
    }
}
