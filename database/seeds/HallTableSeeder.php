<?php

use Illuminate\Database\Seeder;

class HallTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('halls')->insert([
            'name' => 'ASH',
        ]);
        DB::table('halls')->insert([
            'name' => 'BKH',
        ]);
    }
}
