<?php

class ListingConditionsTableSeeder extends Seeder {

    public function run()
    {
    	DB::statement('ALTER TABLE listing_conditions AUTO_INCREMENT = 0');

    	DB::table('listing_conditions')->delete();

        $global_listing_categories = array(
        	['description' => 'New'],
        	['description' => 'Like New'],
        	['description' => 'Used']
        );

        DB::table('listing_conditions')->insert($global_listing_categories);
    }

}