<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateListingCategoriesTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('listing_categories', function(Blueprint $table) {
            $table->increments('category_id');
            $table->integer('parent_id')->unsigned();
			$table->integer('global_id')->unsigned();
			$table->string('title');
			$table->string('class')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('listing_categories');
    }

}
