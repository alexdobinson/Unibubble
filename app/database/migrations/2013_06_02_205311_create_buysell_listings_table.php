<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateBuysellListingsTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('buysell_listings', function(Blueprint $table) {
            $table->increments('listing_id');
            $table->integer('user_id')->unsigned();
			$table->integer('category_id')->unsigned();
			$table->boolean('wanted')->default(0);
			$table->boolean('featured')->default(0);
			$table->string('title');
			$table->string('summary');
			$table->string('extended')->nullable();
			$table->string('price');
			$table->integer('condition_id')->unsigned();
			$table->string('image')->nullable();
            $table->timestamps();
            $table->dateTime('expiry_date')->nullable();
            $table->boolean('sold')->default(0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('buysell_listings');
    }

}
