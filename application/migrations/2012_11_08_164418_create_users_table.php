<?php

class Create_Users_Table {

	/**
	 * Make changes to the database.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('users', function($table) {
			$table->increments('id');
			$table->integer('user_type');
			$table->string('first_name', 50);
			$table->string('last_name', 50);
			$table->string('company', 100);
			$table->string('email', 100);
			$table->string('password', 75);
			$table->integer('mobile_phone');
			$table->string('billing_address1', 255);
			$table->string('billing_address2', 255);
			$table->string('billing_city', 75);
			$table->string('billing_state', 50);
			$table->string('billing_zip', 20);
			$table->string('shipping_address1', 255);
			$table->string('shipping_address2', 255);
			$table->string('shipping_city', 75);
			$table->string('shipping_state', 50);
			$table->string('shipping_zip', 20);
			$table->string('stripe_token', 255);
			$table->timestamps();
		});
	}

	/**
	 * Revert the changes to the database.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('users');
	}

}