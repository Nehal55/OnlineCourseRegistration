<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
        	'user_id' => '1111111',
            'role_id' => '1',
            'name' => 'MD.Admin',
            'email' => 'admin@site.com',
            'password' => bcrypt('admin123'),
        ]);

        DB::table('users')->insert([
            'user_id' => '1111112',
            'role_id' => '2',
            'name' => 'MD. Student',
            'email' => 'student@site.com',
            'password' => bcrypt('student123'),
        ]);

        DB::table('users')->insert([
            'user_id' => '1111113',
            'role_id' => '3',
            'name' => 'MD. Head',
            'email' => 'head@site.com',
            'password' => bcrypt('head123'),
        ]);

    }
}
