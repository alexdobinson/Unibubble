<?php

/** Establishes the foreign key link between the user and authentication tables
        - if a user is deleted, so is it's authentication record
        - if an authentication record is deleted, so is the user
*/

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class UpdateUserKeys extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('authentication', function($table) {
            $table->foreign('user_id')->references('user_id')->on('users')
                    ->onDelete('cascade')
                    ->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('authentication', function($table) {
            $table->dropForeign('authentication_user_id_foreign');
        });
    }

}
