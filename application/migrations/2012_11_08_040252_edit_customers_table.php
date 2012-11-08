<?php

class Edit_Customers_Table {

	/**
	 * Make changes to the database.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('customers', function($table)
		{
		   $table->drop_column('mobile_phone');
		});
	}

	/**
	 * Revert the changes to the database.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('customers', function($table)
		{ 
		   $table->integer('mobile_phone');
		});
	}

}