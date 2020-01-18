<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Group;
use \App\Matche;
use \App\MatchesHistory;
use DB;

class MatchesController extends Controller
{
    public function getFInalist() {
        $matchesfinal = [];
        $matchesfinalPartOne = DB::table('matches')
            ->select('team_b as team', DB::raw('sum(result_b) as goalout'), DB::raw('sum(result_a) as goalin'))
            ->where('champs', false)
            ->where('qualifs', false)
            ->groupBy(DB::raw('team_b'))
            ->get()->toArray(); 
        $matchesfinalPartTow = DB::table('matches')
            ->select('team_a as team', DB::raw('sum(result_a) as goalout'), DB::raw('sum(result_b) as goalin'))
            ->where('champs', false)
            ->where('qualifs', false)
            ->groupBy(DB::raw('team_a'))
            ->get()->toArray();
        $matchesfinal = array_merge($matchesfinalPartOne, $matchesfinalPartTow);
        usort($matchesfinal, function($a, $b) {
            return $a->goalin - $b->goalout;
        });

        if(!empty($matchesfinal)) {
            $matche = Matche::where('champs', true)->first();
            $matche->team_a = $matchesfinal[count($matchesfinal)-1]->team;
            $matche->team_b = $matchesfinal[count($matchesfinal)-2]->team;
            $matche->save();
            $matche = Matche::where('qualifs', true)->first();
            $matche->team_a = $matchesfinal[count($matchesfinal)-4]->team;
            $matche->team_b = $matchesfinal[count($matchesfinal)-3]->team;
            $matche->save();
        }
    }

    public function nextWeek(Request $request) {
        $final = false;
        if($request->week == 3) {
            $this->getFInalist();
            $final = true;
        }
        $group = Group::findOrFail($request->goup);
        if(!empty($group->teams)) {
            $teams = $group->teams()->get();
            $matches = [];
            foreach ($teams as $key => $team) {
                $matche = Matche::where('week', $request->week)
                    ->where('team_a', $team->id)
                    ->first();
                if(!empty($matche)) {
                    $matcheH = MatchesHistory::where('team_a', $matche->team_a)
                        ->where('team_b', $matche->team_b)
                        ->where('a_out_home', $matche->a_out_home)
                        ->where('b_out_home', $matche->b_out_home)
                        ->first();

                    if(empty($matcheH)) {
                        $matcheH = MatchesHistory::where('team_a', $matche->team_b)
                            ->where('team_b', $matche->team_a)
                            ->where('a_out_home', $matche->a_out_home)
                            ->where('b_out_home', $matche->b_out_home)
                            ->first();
                    }

                    $match = Matche::find($matche->id);
                    $match->result_a = $matcheH->result_a;
                    $match->result_b = $matcheH->result_b;
                    $match->save();
                    $tempMatch['result_a'] = $match->result_a;
                    $tempMatch['result_b'] = $match->result_b;
                    $tempMatch['team_a'] = $match->teamA->title;
                    $tempMatch['team_b'] = $match->teamB->title;
                    array_push($matches, $tempMatch);
                }
            }
        }
        return response()->json(['matches' => $matches, 'final' => $final]);
    }


    public function finalResult() {}
}
