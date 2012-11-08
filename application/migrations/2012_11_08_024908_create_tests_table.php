<?php

class Create_Tests_Table {    

	public function up()
    {
		Schema::create('tests', function($table) {
			$table->increments('id');
			$table->text('data');
			$table->timestamps();
	});

    }    

	public function down()
    {
		Schema::drop('tests');

    }

}