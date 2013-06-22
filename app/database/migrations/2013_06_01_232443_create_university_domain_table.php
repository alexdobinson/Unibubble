<?php

/** Create the university domain table
        - contains each email domain for all universities
*/

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateUniversityDomainTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('university_domains', function(Blueprint $table) {
            $table->increments('id');
            $table->integer('university_id')->unsigned();
			$table->string('domain');
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
        Schema::drop('university_domains');
    }

}
