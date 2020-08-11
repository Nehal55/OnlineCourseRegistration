<?php

use Illuminate\Database\Seeder;

class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('roles')->insert([
            'name' => 'Admin',
            'slug' => 'admin',
        ]);
        DB::table('roles')->insert([
            'name' => 'Student',
            'slug' => 'student',
        ]);

        DB::table('roles')->insert([
            'name' => 'Head',
            'slug' => 'head',
        ]);

        DB::table('roles')->insert([
            'name' => 'Provost',
            'slug' => 'provost',
        ]);

        DB::table('roles')->insert([
            'name' => 'Accountant',
            'slug' => 'accountant',
        ]);
    }
}
