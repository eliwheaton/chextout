<?php

class Create_Customers_Table {    

	public function up()
    {
		Schema::create('customers', function($table) {
			$table->increments('id');
			$table->string('first_name', 50);
			$table->string('last_name', 50);
			$table->string('email', 100);
			$table->integer('mobile_phone');
			$table->string('address1', 255);
			$table->string('address2', 255);
			$table->string('city', 75);
			$table->string('state', 50);
			$table->string('zip', 20);
			$table->string('stripe_token', 255);
			$table->timestamps();
	});

    }    

	public function down()
    {
		Schema::drop('customers');

    }

}