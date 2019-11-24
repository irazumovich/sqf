<?php

use Illuminate\Database\Seeder;

class GoalsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('goals')->insert([
            'name' => 'English B1',
            'confirmation_method' => 'Audit',
            'additional_materials' => '',
            'description' => ''
        ]);

        DB::table('goals_for_qualification')->insert([
            'qualification_id' => 1,
            'goal_id' => 1
        ]);
        DB::table('goals_for_qualification')->insert([
            'qualification_id' => 2,
            'goal_id' => 1
        ]);
    }
}
