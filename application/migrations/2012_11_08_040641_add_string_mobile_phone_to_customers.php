<?php

class Add_String_Mobile_Phone_To_Customers {

	/**
	 * Make changes to the database.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('customers', function($table)
		{
		   $table->string('mobile_phone', 20);
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
		   $table->drop_column('mobile_phone');
		});
	}

}