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
            'title' => 'Liverpool',
            'group_id' => 1
        ]);
        DB::table('teams')->insert([
            'title' => 'Manshester',
            'group_id' => 1
        ]);
        DB::table('teams')->insert([
            'title' => 'Barcelone',
            'group_id' => 1
        ]);
        DB::table('teams')->insert([
            'title' => 'Real Madrid',
            'group_id' => 1
        ]);
    }
}
