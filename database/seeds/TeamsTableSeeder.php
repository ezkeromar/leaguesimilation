<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;

class TeamsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('teams')->insert([
            'title' => Str::random(10),
            'points' => 60,
            'matches_played' => 6,
            'matches_won' => 4,
            'matches_drawn' => 2,
            'matches_lost' => 0,
            'goals_difference' => 10,
            'group_id' => 1,
        ]);
    }
}
