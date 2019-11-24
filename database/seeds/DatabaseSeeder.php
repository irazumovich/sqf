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
        $this->call(ResourcePoolSeeder::class);
        $this->call(QualificationsSeeder::class);
        $this->call(GoalsSeeder::class);
        $this->call(UsersSeeder::class);
    }
}
