<?php

use Illuminate\Database\Seeder;

class MatchesHistoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('matches_histories')->insert([
            'team_a' => 1,
            'team_b' => 3,
            'result_a' => 1,
            'result_b' => 1,
            'a_out_home' => true,
            'b_out_home' => false
        ]);
        DB::table('matches_histories')->insert([
            'team_a' => 1,
            'team_b' => 3,
            'result_a' => 2,
            'result_b' => 0,
            'a_out_home' => false,
            'b_out_home' => true
        ]);
        DB::table('matches_histories')->insert([
            'team_a' => 1,
            'team_b' => 3,
            'result_a' => 2,
            'result_b' => 0,
            'a_out_home' => false,
            'b_out_home' => false
        ]);
        DB::table('matches_histories')->insert([
            'team_a' => 2,
            'team_b' => 4,
            'result_a' => 6,
            'result_b' => 0,
            'a_out_home' => false,
            'b_out_home' => true
        ]);
        DB::table('matches_histories')->insert([
            'team_a' => 2,
            'team_b' => 4,
            'result_a' => 3,
            'result_b' => 1,
            'a_out_home' => true,
            'b_out_home' => false
        ]);
        DB::table('matches_histories')->insert([
            'team_a' => 2,
            'team_b' => 4,
            'result_a' => 3,
            'result_b' => 1,
            'a_out_home' => false,
            'b_out_home' => false
        ]);
        DB::table('matches_histories')->insert([
            'team_a' => 1,
            'team_b' => 2,
            'result_a' => 2,
            'result_b' => 2,
            'a_out_home' => false,
            'b_out_home' => true
        ]);
        DB::table('matches_histories')->insert([
            'team_a' => 1,
            'team_b' => 2,
            'result_a' => 1,
            'result_b' => 3,
            'a_out_home' => true,
            'b_out_home' => false
        ]);
        DB::table('matches_histories')->insert([
            'team_a' => 1,
            'team_b' => 2,
            'result_a' => 1,
            'result_b' => 3,
            'a_out_home' => false,
            'b_out_home' => false
        ]);
        DB::table('matches_histories')->insert([
            'team_a' => 3,
            'team_b' => 4,
            'result_a' => 1,
            'result_b' => 1,
            'a_out_home' => true,
            'b_out_home' => false
        ]);
        DB::table('matches_histories')->insert([
            'team_a' => 3,
            'team_b' => 4,
            'result_a' => 3,
            'result_b' => 1,
            'a_out_home' => false,
            'b_out_home' => true
        ]);
        DB::table('matches_histories')->insert([
            'team_a' => 3,
            'team_b' => 4,
            'result_a' => 3,
            'result_b' => 1,
            'a_out_home' => false,
            'b_out_home' => false
        ]);
        DB::table('matches_histories')->insert([
            'team_a' => 1,
            'team_b' => 4,
            'result_a' => 1,
            'result_b' => 1,
            'a_out_home' => true,
            'b_out_home' => false
        ]);
        DB::table('matches_histories')->insert([
            'team_a' => 1,
            'team_b' => 4,
            'result_a' => 3,
            'result_b' => 1,
            'a_out_home' => false,
            'b_out_home' => true
        ]);
        DB::table('matches_histories')->insert([
            'team_a' => 1,
            'team_b' => 4,
            'result_a' => 3,
            'result_b' => 1,
            'a_out_home' => false,
            'b_out_home' => false
        ]);
        DB::table('matches_histories')->insert([
            'team_a' => 2,
            'team_b' => 3,
            'result_a' => 1,
            'result_b' => 1,
            'a_out_home' => true,
            'b_out_home' => false
        ]);
        DB::table('matches_histories')->insert([
            'team_a' => 2,
            'team_b' => 3,
            'result_a' => 3,
            'result_b' => 1,
            'a_out_home' => false,
            'b_out_home' => true
        ]);
        DB::table('matches_histories')->insert([
            'team_a' => 2,
            'team_b' => 3,
            'result_a' => 3,
            'result_b' => 1,
            'a_out_home' => false,
            'b_out_home' => false
        ]);
    }
}
