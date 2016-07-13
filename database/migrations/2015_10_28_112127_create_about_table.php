<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAboutTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('Abouts', function(Blueprint $table)
		{
			$table->increments('id');
			$table->String('name');
			$table->String('birthday');
			$table->String('email');
			$table->String('website');
			$table->String('context');
			$table->String('phone');
			$table->String('address');
			$table->String('footer');
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
		Schema::drop('Abouts');
	}

}
