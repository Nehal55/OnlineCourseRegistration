<?php

use Illuminate\Database\Seeder;

class DepartmentTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('departments')->insert([
            'name' => 'Department of Computer Science and Telecommunication Engineering',
        ]);

        DB::table('departments')->insert([
            'name' => 'Department of Applied Chemistry and Chemical Engineering',
        ]);

        DB::table('departments')->insert([
            'name' => 'Department of Information and Communication Engineering',
        ]);

        DB::table('departments')->insert([
            'name' => 'Department of Electrical and Electronic Engineering(EEE)',
        ]);

        DB::table('departments')->insert([
            'name' => 'Department of Software Engineering',
        ]);

        DB::table('departments')->insert([
            'name' => 'Department of Information Sciences and Library Management',
        ]);

        DB::table('departments')->insert([
            'name' => 'Department of Fisheries and Marine Science',
        ]);

        DB::table('departments')->insert([
            'name' => 'Department of Pharmacy',
        ]);

        DB::table('departments')->insert([
            'name' => 'Department of Microbiology',
        ]);

        DB::table('departments')->insert([
            'name' => 'Department of Applied Mathematics',
        ]);

        DB::table('departments')->insert([
            'name' => 'Department of Food Technology and Nutrition Science',
        ]);

        DB::table('departments')->insert([
            'name' => 'Department of Environmental Science and Disaster Management',
        ]);

        DB::table('departments')->insert([
            'name' => 'Department of Biotechnology and Genetic Engineering',
        ]);

        DB::table('departments')->insert([
            'name' => 'Department of Agriculture',
        ]);

        DB::table('departments')->insert([
            'name' => 'Department of Statistics',
        ]);

        DB::table('departments')->insert([
            'name' => 'Department of Oceanography',
        ]);

        DB::table('departments')->insert([
            'name' => 'Department of Biochemistry and Molecular Biology',
        ]);

        DB::table('departments')->insert([
            'name' => 'Department of Zoology',
        ]);

        DB::table('departments')->insert([
            'name' => 'Department of English',
        ]);

        DB::table('departments')->insert([
            'name' => 'Department of Economics',
        ]);

        DB::table('departments')->insert([
            'name' => 'Department of Social Science',
        ]);

        DB::table('departments')->insert([
            'name' => 'Department of Bangla',
        ]);

        DB::table('departments')->insert([
            'name' => 'Department of Social Work',
        ]);

        DB::table('departments')->insert([
            'name' => 'Department of Business Administration',
        ]);

        DB::table('departments')->insert([
            'name' => 'Department of Tourism and Hospitality Management',
        ]);

        DB::table('departments')->insert([
            'name' => 'Department of Management Information Systems',
        ]);


       

       
    }
}
