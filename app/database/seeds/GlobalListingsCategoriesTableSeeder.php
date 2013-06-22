<?php

class GlobalListingsCategoriesTableSeeder extends Seeder {

    public function run()
    {
    	DB::statement('ALTER TABLE global_listings_categories AUTO_INCREMENT = 0');

    	DB::table('global_listings_categories')->delete();

        $global_listing_categories = array(
        	['title' => 'buysell'],
        	['title' => 'housing'],
        	['title' => 'jobs']
        );

        DB::table('global_listings_categories')->insert($global_listing_categories);
    }

}