<?php

class Create_Transactions_Table {    

	public function up()
    {
		Schema::create('transactions', function($table) {
			$table->increments('id');
			$table->integer('customer_id');
			$table->integer('client_id');
			$table->integer('product_id');
			$table->string('stripe_conf', 255);
			$table->timestamps();
	});

    }    

	public function down()
    {
		Schema::drop('transactions');

    }

}