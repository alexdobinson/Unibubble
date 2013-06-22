<?php

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Eloquent::unguard();

		// Populate a list of possible universities
		$this->call('UniversitiesTableSeeder');

		// Populate a list of university domains
		$this->call('UniversityDomainsTableSeeder');

		// Populate a list of users
		$this->call('UsersTableSeeder');

		$this->call('GlobalListingsCategoriesTableSeeder');

		$this->call('ListingCategoriesTableSeeder');

		$this->call('ListingConditionsTableSeeder');

		$this->call('BuySellListingsTableSeeder');
	}

}