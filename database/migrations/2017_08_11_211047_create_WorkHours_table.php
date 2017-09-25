<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateWorkHoursTable extends Migration {

	public function up()
	{
		Schema::create('WorkHours', function(Blueprint $table) {
			$table->increments('id');
			$table->integer('day_id')->unsigned();
			$table->time('startTime');
			$table->time('endTime');
			$table->timestamps();
		});
	}

	public function down()
	{
		Schema::drop('WorkHours');
	}
}