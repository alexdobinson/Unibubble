<?php

class ListingCategoriesTableSeeder extends Seeder {

    public function run()
    {
    	DB::statement('ALTER TABLE listing_categories AUTO_INCREMENT = 0');

    	DB::table('listing_categories')->delete();

        $listing_categories = array(

			[ "parent_id" => 0, "global_id" => 1, "title" => "Books", "class" => "books" ],
			[ "parent_id" => 0, "global_id" => 1, "title" => "Electronics", "class" => "electronics" ],
			[ "parent_id" => 0, "global_id" => 1, "title" => "Multimedia", "class" => "multimedia" ],
			[ "parent_id" => 0, "global_id" => 1, "title" => "Sports &amp; Fitness", "class" => "sports" ],
			[ "parent_id" => 0, "global_id" => 1, "title" => "Clothing", "class" => "clothing" ],
			[ "parent_id" => 0, "global_id" => 1, "title" => "Home &amp; Garden", "class" => "home" ],
			[ "parent_id" => 0, "global_id" => 1, "title" => "Miscellaneous", "class" => "miscellaneous" ],
			[ "parent_id" => 1, "global_id" => 1, "title" => "Business",'' ],
			[ "parent_id" => 1, "global_id" => 1, "title" => "Economics",'' ],
			[ "parent_id" => 0, "global_id" => 2, "title" => "Flat Mates Wanted", "class" => "flat-mates" ],
			[ "parent_id" => 0, "global_id" => 2, "title" => "Rent a House", "class" => "rent-a-house" ],
			[ "parent_id" => 0, "global_id" => 2, "title" => "Rent a Room", "class" => "rent-room" ],
			[ "parent_id" => 0, "global_id" => 3, "title" => "Graduate Jobs", "class" => "grad-jobs" ],
			[ "parent_id" => 0, "global_id" => 3, "title" => "Internships", "class" => "internships" ],
			[ "parent_id" => 0, "global_id" => 3, "title" => "Term Time Jobs", "class" => "term-time" ],
			[ "parent_id" => 1, "global_id" => 1, "title" => "Engineering",'' ],
			[ "parent_id" => 1, "global_id" => 1, "title" => "English",'' ],
			[ "parent_id" => 1, "global_id" => 1, "title" => "History",'' ],
			[ "parent_id" => 1, "global_id" => 1, "title" => "Law",'' ],
			[ "parent_id" => 1, "global_id" => 1, "title" => "Maths",'' ],
			[ "parent_id" => 1, "global_id" => 1, "title" => "Politics",'' ],
			[ "parent_id" => 1, "global_id" => 1, "title" => "Other Books",'' ],
			[ "parent_id" => 2, "global_id" => 1, "title" => "Laptops",'' ],
			[ "parent_id" => 2, "global_id" => 1, "title" => "Smartphones",'' ],
			[ "parent_id" => 2, "global_id" => 1, "title" => "MP3's",'' ],
			[ "parent_id" => 2, "global_id" => 1, "title" => "Printers &amp; Scanners",'' ],
			[ "parent_id" => 2, "global_id" => 1, "title" => "Camera's",'' ],
			[ "parent_id" => 2, "global_id" => 1, "title" => "TV's &amp; Accessories",'' ],
			[ "parent_id" => 3, "global_id" => 1, "title" => "CD's",'' ],
			[ "parent_id" => 3, "global_id" => 1, "title" => "DVD's &amp; Blu-ray",'' ],
			[ "parent_id" => 3, "global_id" => 1, "title" => "Game Consoles",'' ],
			[ "parent_id" => 3, "global_id" => 1, "title" => "Console Games",'' ],
			[ "parent_id" => 3, "global_id" => 1, "title" => "PC Games",'' ],
			[ "parent_id" => 3, "global_id" => 1, "title" => "Other Multimedia",'' ],
			[ "parent_id" => 4, "global_id" => 1, "title" => "Bicycle's",'' ],
			[ "parent_id" => 4, "global_id" => 1, "title" => "Gym Equipment",'' ],
			[ "parent_id" => 4, "global_id" => 1, "title" => "Other Sports &amp; Fitness",'' ],
			[ "parent_id" => 2, "global_id" => 1, "title" => "Other Electronics",'' ],
			[ "parent_id" => 5, "global_id" => 1, "title" => "Guy's Clothes",'' ],
			[ "parent_id" => 5, "global_id" => 1, "title" => "Girl's Clothes",'' ],
			[ "parent_id" => 6, "global_id" => 1, "title" => "Furniture",'' ],
			[ "parent_id" => 6, "global_id" => 1, "title" => "Home Appliances",'' ],
			[ "parent_id" => 6, "global_id" => 1, "title" => "Garden Equipment",'' ],
			[ "parent_id" => 6, "global_id" => 1, "title" => "Other Home &amp; Garden",'' ],
			[ "parent_id" => 5, "global_id" => 1, "title" => "Other Clothing",'' ],
			[ "parent_id" => 7, "global_id" => 1, "title" => "Tickets",'' ],
			[ "parent_id" => 7, "global_id" => 1, "title" => "Student Storage",'' ],
			[ "parent_id" => 7, "global_id" => 1, "title" => "Other Miscellaneous",'' ],
			[ "parent_id" => 0, "global_id" => 3, "title" => "Sell your Skills", "class" => "sell-your-skills" ]

        );

        DB::table('listing_categories')->insert($listing_categories);
    }

}