<?php

/** Establishes the foreign key link between the university and it's domains
        - if a university is deleted, so is it's domains

    Establishes the foreign key link between a user's university and the university table
        - ensures integrity so that we can't make stupid mistakes!
*/

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class UpdateUniversityKeys extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('university_domains', function($table) {
            $table->foreign('university_id')->references('university_id')->on('universities')
                    ->onDelete('cascade')
                    ->onUpdate('cascade');
        });

        Schema::table('users', function($table) {
            $table->foreign('university_id')->references('university_id')->on('universities');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('university_domains', function($table) {
            $table->dropForeign('university_domains_university_id_foreign');
        });

        Schema::table('users', function($table) {
            $table->dropForeign('users_university_id_foreign');
        });
    }

}
