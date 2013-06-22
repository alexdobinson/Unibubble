<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class UpdateMarketplaceKeys extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('listing_categories', function($table) {
            $table->foreign('global_id')->references('global_id')->on('global_listings_categories')
                    ->onUpdate('cascade');
        });

        Schema::table('buysell_listings', function($table) {
            $table->foreign('user_id')->references('user_id')->on('users')
                    ->onDelete('cascade')
                    ->onUpdate('cascade');

            $table->foreign('category_id')->references('category_id')->on('listing_categories')
                    ->onDelete('cascade')
                    ->onUpdate('cascade');

            $table->foreign('condition_id')->references('condition_id')->on('listing_conditions')
                    ->onDelete('cascade')
                    ->onUpdate('cascade');
        });

        Schema::table('job_listings', function($table) {
            $table->foreign('user_id')->references('user_id')->on('users')
                    ->onDelete('cascade')
                    ->onUpdate('cascade');

            $table->foreign('category_id')->references('category_id')->on('listing_categories')
                    ->onDelete('cascade')
                    ->onUpdate('cascade');
        });

        Schema::table('housing_listings', function($table) {
            $table->foreign('user_id')->references('user_id')->on('users')
                    ->onDelete('cascade')
                    ->onUpdate('cascade');

            $table->foreign('category_id')->references('category_id')->on('listing_categories')
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
        Schema::table('listing_categories', function($table) {
            $table->dropForeign('listing_categories_global_id_foreign');
        });

        Schema::table('buysell_listings', function($table) {
            $table->dropForeign('buysell_listings_user_id_foreign');
            $table->dropForeign('buysell_listings_category_id_foreign');
            $table->dropForeign('buysell_listings_condition_id_foreign');
        });

        Schema::table('job_listings', function($table) {
            $table->dropForeign('job_listings_user_id_foreign');
            $table->dropForeign('job_listings_category_id_foreign');
        });

        Schema::table('housing_listings', function($table) {
            $table->dropForeign('housing_listings_user_id_foreign');
            $table->dropForeign('housing_listings_category_id_foreign');
        });

    }

}
