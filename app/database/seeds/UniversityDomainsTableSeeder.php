<?php

class UniversityDomainsTableSeeder extends Seeder {

    public function run()
    {
    	DB::statement('ALTER TABLE university_domains AUTO_INCREMENT = 0');

    	DB::table('university_domains')->delete();

        $university_domains = array(
        	['university_id' => 1, 'domain' => 'warwick.ac.uk'],
        	['university_id' => 1, 'domain' => 'wbs.ac.uk']
        );

        // Uncomment the below to run the seeder
        DB::table('university_domains')->insert($university_domains);
    }

}