<?php

use Illuminate\Database\Seeder;

class CourseTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('courses')->insert([
            
            'department_id' => '3',
            'code' 		=> 	'ICE-1101',
            'name' 		=>	'Information Technology Fundamentals',
            'year' 		=> 	'1',
            'term' 		=> 	'1',
            'credit'	=> 	'3.00',	
        ]);

        DB::table('courses')->insert([
            
            'department_id' => '3',
            'code' 		=> 	'ICE-1103',
            'name' 		=>	'Electrical Circuits',
            'year' 		=> 	'1',
            'term' 		=> 	'1',
            'credit'	=> 	'3.00',	
        ]);
        DB::table('courses')->insert([
            
            'department_id' => '3',
            'code' 		=> 	'ICE-1104',
            'name' 		=>	'Electrical Circuits test',
            'year' 		=> 	'1',
            'term' 		=> 	'1',
            'credit'	=> 	'3.00',	
        ]);
        DB::table('courses')->insert([
            
            'department_id' => '3',
            'code' 		=> 	'ICE-1105',
            'name' 		=>	'Electrical Circuits test3',
            'year' 		=> 	'1',
            'term' 		=> 	'1',
            'credit'	=> 	'3.00',	
        ]);
    }
}
