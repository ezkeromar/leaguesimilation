<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(GroupsTableSeeder::class);
        $this->call(TeamsTableSeeder::class);
        $this->call(LeaguesTableSeeder::class);
        $this->call(MatchesTableSeeder::class);
        $this->call(MatchesHistoriesTableSeeder::class);
    }
}
