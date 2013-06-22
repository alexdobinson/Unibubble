<?php

/** Create the authentication table
        - only handles authentication details: email, password, user_type, activated, pcode
        - email used for login
        - user_type: 0->student, 1->organisation
        - user_id must reference a user_id in the users table (foreign keys established in later migrations)
*/


use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateAuthTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('authentication', function(Blueprint $table) {
            $table->integer('user_id')->unsigned();
			$table->string('email', 320);
			$table->string('password');
			$table->boolean('user_type')->default(0);
			$table->boolean('activated')->default(0);
			$table->string('pcode');
            $table->timestamps();
            $table->primary('user_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('authentication');
    }

}
