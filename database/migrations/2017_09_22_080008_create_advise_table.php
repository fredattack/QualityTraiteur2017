<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateAdviseTable extends Migration {

	public function up()
	{
		Schema::create('advise', function(Blueprint $table) {
			$table->increments('id');
			$table->string('userName', 50)->unique();
			$table->string('userEmail', 100);
			$table->string('localite', 50);
			$table->text('message');
			$table->timestamps();
		});
	}

	public function down()
	{
		Schema::drop('advise');
	}
}