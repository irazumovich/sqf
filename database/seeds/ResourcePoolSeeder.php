<?php

use Illuminate\Database\Seeder;

class ResourcePoolSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('resource_pool')->insert([
            'name' => 'Development',
        ]);
        DB::table('resource_pool')->insert([
            'name' => 'Management',
        ]);
        DB::table('resource_pool')->insert([
            'name' => 'QA',
        ]);
        DB::table('resource_pool')->insert([
            'name' => 'BA',
        ]);
        DB::table('resource_pool')->insert([
            'name' => 'Sales',
        ]);
    }
}
