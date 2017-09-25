<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Eloquent\Model;

class CreateForeignKeys extends Migration {

	public function up()
	{
		Schema::table('WorkHours', function(Blueprint $table) {
			$table->foreign('day_id')->references('id')->on('days')
						->onDelete('cascade')
						->onUpdate('cascade');
		});
	}

	public function down()
	{
		Schema::table('WorkHours', function(Blueprint $table) {
			$table->dropForeign('WorkHours_day_id_foreign');
		});
	}
}