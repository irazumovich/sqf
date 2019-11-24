<?php

use Illuminate\Database\Seeder;

class QualificationsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('qualifications')->insert([
            'name' => 'Senior developer',
            'sign' => 'Senior-1',
            'resource_pool_id' => 1,
            'description' => ''
        ]);
        DB::table('qualifications')->insert([
            'name' => 'Middle developer',
            'sign' => 'Middle-3',
            'resource_pool_id' => 1,
            'description' => '',
            'next_qualification_id' => 1,
        ]);
        DB::table('qualifications')->insert([
            'name' => 'Middle developer',
            'sign' => 'Middle-2',
            'resource_pool_id' => 1,
            'description' => '',
            'next_qualification_id' => 2,
        ]);

        DB::table('qualifications')->insert([
            'name' => 'Department manager',
            'sign' => 'Manager-2',
            'resource_pool_id' => 2,
            'description' => ''
        ]);
        DB::table('qualifications')->insert([
            'name' => 'Group manager',
            'sign' => 'Manager-1',
            'resource_pool_id' => 2,
            'description' => '',
            'next_qualification_id' => 4,
        ]);
    }
}
