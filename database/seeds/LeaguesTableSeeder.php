<?php

use Illuminate\Database\Seeder;

class LeaguesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('leagues')->insert([
            'title' => 'Champions league',
            'current_week' => 1
        ]);
        DB::table('leagues')->insert([
            'title' => 'Premiere League',
            'current_week' => 1
        ]);
    }
}
