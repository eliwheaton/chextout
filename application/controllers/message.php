<?php

class Message_Controller extends Base_Controller {

	public function action_keyword()
	{
		$input = print_r(Input::get(), TRUE);
		$test = Test::create(array('data' => $input));
		return 'done';
	}

	public function action_inbox()
	{
		return 'OK';
	}

}