<?php

class Create_Temp_Messages_Table {    

	public function up()
    {
		Schema::create('temp_messages', function($table) {
			$table->increments('id');
			$table->integer('customer_id');
			$table->string('stage', 20);
			$table->timestamps();
	});

    }    

	public function down()
    {
		Schema::drop('temp_messages');

    }

}