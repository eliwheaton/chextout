<?php

class Edit_Temp_Message_Table {

	/**
	 * Make changes to the database.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('temp_messages', function($table)
		{
		   $table->drop_column('customer_id'); 
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
		Schema::table('temp_messages', function($table)
		{
		   $table->drop_column('mobile_phone'); 
		   $table->integer('customer_id');
		});
	}

}