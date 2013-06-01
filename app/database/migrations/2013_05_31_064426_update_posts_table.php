<?php

use Illuminate\Database\Migrations\Migration;

class UpdatePostsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		// Create the `Posts` table
		Schema::update('posts', function($table)
		{

			$table->text('image');

		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
        Schema::table('posts', function($table)
        {
            $table->dropIndex('image');
        });
	}

}