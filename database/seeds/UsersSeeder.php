<?php

use Illuminate\Database\Seeder;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'first_name' => 'Irina',
            'last_name' => 'Razumovich',
            'qualification_id' => 1,
            'date_of_birth' => '1999-05-18',
            'phone' => '+375299365809',
            'email' => 'irazumovich@test.com',
            'password' => bcrypt('admin')
        ]);
    }
}
