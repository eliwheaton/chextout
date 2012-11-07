<?php

class Create_Products_Table {    

	public function up()
    {
		Schema::create('products', function($table) {
			$table->increments('id');
			$table->integer('client_id');
			$table->string('name', 255);
			$table->text('desc');
			$table->decimal('price', 10, 2);
			$table->string('keyword');
			$table->timestamps();
	});

    }    

	public function down()
    {
		Schema::drop('products');

    }

}