<?php

use Illuminate\Database\Seeder;

class MatchesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('matches')->insert([
            'team_a' => 1,
            'team_b' => 3,
            'result_a' => null,
            'result_b' => null,
            'a_out_home' => true,
            'b_out_home' => false,
            'week' => 1,
            'league_id' => 1,
            'qualifs' => false,
            'champs' => false
        ]);
        DB::table('matches')->insert([
            'team_a' => 2,
            'team_b' => 4,
            'result_a' => null,
            'result_b' => null,
            'a_out_home' => true,
            'b_out_home' => false,
            'week' => 1,
            'league_id' => 1,
            'qualifs' => false,
            'champs' => false
        ]);
        DB::table('matches')->insert([
            'team_a' => 1,
            'team_b' => 3,
            'result_a' => null,
            'result_b' => null,
            'a_out_home' => false,
            'b_out_home' => true,
            'week' => 2,
            'league_id' => 1,
            'qualifs' => false,
            'champs' => false
        ]);
        DB::table('matches')->insert([
            'team_a' => 2,
            'team_b' => 4,
            'result_a' => null,
            'result_b' => null,
            'a_out_home' => false,
            'b_out_home' => true,
            'week' => 2,
            'league_id' => 1,
            'qualifs' => false,
            'champs' => false
        ]);
        DB::table('matches')->insert([
            'team_a' => null,
            'team_b' => null,
            'result_a' => null,
            'result_b' => null,
            'a_out_home' => false,
            'b_out_home' => false,
            'week' => 3,
            'league_id' => 1,
            'qualifs' => false,
            'champs' => true
        ]);
        DB::table('matches')->insert([
            'team_a' => null,
            'team_b' => null,
            'result_a' => null,
            'result_b' => null,
            'a_out_home' => false,
            'b_out_home' => false,
            'week' => 3,
            'league_id' => 1,
            'qualifs' => true,
            'champs' => false
        ]);
    }
}
