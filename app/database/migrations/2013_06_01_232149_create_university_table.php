<?php

/** Create the universities table
        - contains all fields about the actual university details
*/

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateUniversityTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('universities', function(Blueprint $table) {
            $table->increments('university_id');
            $table->string('shortname');
			$table->string('fullname');
			$table->string('description')->nullable();
			$table->string('area');
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
        Schema::drop('universities');
    }

}
