<?php

class UniversitiesTableSeeder extends Seeder {

    public function run()
    {
    	DB::statement('ALTER TABLE universities AUTO_INCREMENT = 0');

    	DB::table('universities')->delete();

        $universities = array(
        	['shortname' => 'Warwick University', 'fullname' => 'The University of Warwick', 'description' => '', 'area' => 'West Midlands'],
            ['shortname' => 'Oxford University', 'fullname' => 'The University of Oxford', 'description' => '', 'area' => 'Oxfordshire'],
            ['shortname' => 'Cambridge University', 'fullname' => 'The University of Cambridge', 'description' => '', 'area' => 'Cambridgeshire'],
            ['shortname' => 'Imperial', 'fullname' => 'Imperial College London', 'description' => '', 'area' => 'London'],
            ['shortname' => 'UCL', 'fullname' => 'University College London', 'description' => '', 'area' => 'London']
        );

        // Uncomment the below to run the seeder
        DB::table('universities')->insert($universities);
    }

}