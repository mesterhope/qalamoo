<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class DeleteDescription extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('galleries',function(Blueprint $t ){
			$t->dropColumn('description');
			$t->dropColumn('meta_description');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('galleries',function(Blueprint $t){
            $t->text('description');
            $t->text('meta_description');
        });
	}
}
