<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSubcategoriesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('subcategories',function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('name');
			$table->integer('category_id')->unsigned();
			$table->timestamps();

			$table->foreign('category_id')->references('id')->on('categories');
		});	
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		//
	}

}
