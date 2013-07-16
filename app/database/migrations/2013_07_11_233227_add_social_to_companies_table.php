<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddSocialToCompaniesTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('companies', function(Blueprint $table) {
            $table->string('facebook');
            $table->string('twitter');
            $table->string('linkedin');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('companies', function(Blueprint $table) {
            $table->dropColumn('facebook');
            $table->dropColumn('twitter');
            $table->dropColumn('linkedin');
        });
    }

}
