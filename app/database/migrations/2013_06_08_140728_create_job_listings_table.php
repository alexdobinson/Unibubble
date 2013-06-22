<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateJobListingsTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('job_listings', function(Blueprint $table) {
            $table->increments('listing_id');
            $table->integer('user_id')->unsigned();
            $table->integer('category_id')->unsigned();
            $table->boolean('wanted')->default(0);
            $table->boolean('featured')->default(0);
            $table->string('title');
            $table->text('summary');
            $table->text('extended')->nullable();
            $table->decimal('per_hour')->unsigned()->nullable();
            $table->decimal('per_job')->unsigned()->nullable();
            $table->string('application_url')->nullable();
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
        Schema::drop('job_listings');
    }

}
