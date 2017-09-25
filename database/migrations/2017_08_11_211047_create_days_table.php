<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateDaysTable extends Migration {

	public function up()
	{
		Schema::create('days', function(Blueprint $table) {
			$table->increments('id');
			$table->string('nom', 25)->unique();
			$table->timestamps();
		});
	}

	public function down()
	{
		Schema::drop('days');
	}
}