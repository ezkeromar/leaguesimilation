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
            ->select('title')
            ->get();
        return view('welcome', array('title' => $groupInfo->title, 'id' => $groupInfo->id, 'teams' => $teams));
    }
}
