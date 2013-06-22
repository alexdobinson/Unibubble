<?php

class BuySellListingsTableSeeder extends Seeder {

    public function run()
    {
    	DB::statement('ALTER TABLE buysell_listings AUTO_INCREMENT = 0');

    	DB::table('buysell_listings')->delete();

        $global_listing_categories = array(
        	['user_id' => 1, 'category_id' => 1, 'wanted' => 0, 'featured' => 0, 'title' => 'iPad 1 wifi + 3g 64gb', 
        	'summary' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer adipiscing vulputate nulla, 
        	sed adipiscing ante pulvinar in. Curabitur eleifend lacinia porttitor. Aenean facilisis nisl augue', 'price' => '300.00',
        	'condition_id' => 3],

        	['user_id' => 1, 'category_id' => 1, 'wanted' => 0, 'featured' => 0, 'title' => 'Nexus 7', 
        	'summary' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer adipiscing vulputate nulla, 
        	sed adipiscing ante pulvinar in. Curabitur eleifend lacinia porttitor. Aenean facilisis nisl augue', 'price' => '300.00',
        	'condition_id' => 3],

        	['user_id' => 2, 'category_id' => 1, 'wanted' => 0, 'featured' => 0, 'title' => 'NEW WITH TAGS French Connection Classic Storm Terry Trench Coat Size XS', 
        	'summary' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer adipiscing vulputate nulla, 
        	sed adipiscing ante pulvinar in. Curabitur eleifend lacinia porttitor. Aenean facilisis nisl augue', 'price' => '300.00',
        	'condition_id' => 3],

        	['user_id' => 2, 'category_id' => 1, 'wanted' => 0, 'featured' => 0, 'title' => 'Adidas Crazy Light Basketball Shoe', 
        	'summary' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer adipiscing vulputate nulla, 
        	sed adipiscing ante pulvinar in. Curabitur eleifend lacinia porttitor. Aenean facilisis nisl augue', 'price' => '300.00',
        	'condition_id' => 3],

        	['user_id' => 3, 'category_id' => 1, 'wanted' => 0, 'featured' => 0, 'title' => 'Nexus 7', 
        	'summary' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer adipiscing vulputate nulla, 
        	sed adipiscing ante pulvinar in. Curabitur eleifend lacinia porttitor. Aenean facilisis nisl augue', 'price' => '300.00',
        	'condition_id' => 3],

        	['user_id' => 3, 'category_id' => 1, 'wanted' => 0, 'featured' => 0, 'title' => 'Nexus 7', 
        	'summary' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer adipiscing vulputate nulla, 
        	sed adipiscing ante pulvinar in. Curabitur eleifend lacinia porttitor. Aenean facilisis nisl augue', 'price' => '300.00',
        	'condition_id' => 3],

        	['user_id' => 4, 'category_id' => 1, 'wanted' => 0, 'featured' => 0, 'title' => 'Nexus 7', 
        	'summary' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer adipiscing vulputate nulla, 
        	sed adipiscing ante pulvinar in. Curabitur eleifend lacinia porttitor. Aenean facilisis nisl augue', 'price' => '300.00',
        	'condition_id' => 3],

        	['user_id' => 4, 'category_id' => 1, 'wanted' => 0, 'featured' => 0, 'title' => 'Nexus 7', 
        	'summary' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer adipiscing vulputate nulla, 
        	sed adipiscing ante pulvinar in. Curabitur eleifend lacinia porttitor. Aenean facilisis nisl augue', 'price' => '300.00',
        	'condition_id' => 3],

        	['user_id' => 5, 'category_id' => 1, 'wanted' => 0, 'featured' => 0, 'title' => 'Nexus 7', 
        	'summary' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer adipiscing vulputate nulla, 
        	sed adipiscing ante pulvinar in. Curabitur eleifend lacinia porttitor. Aenean facilisis nisl augue', 'price' => '300.00',
        	'condition_id' => 3],

        	['user_id' => 5, 'category_id' => 1, 'wanted' => 0, 'featured' => 0, 'title' => 'Nexus 7', 
        	'summary' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer adipiscing vulputate nulla, 
        	sed adipiscing ante pulvinar in. Curabitur eleifend lacinia porttitor. Aenean facilisis nisl augue', 'price' => '300.00',
        	'condition_id' => 3],
        );

        DB::table('buysell_listings')->insert($global_listing_categories);
    }

}