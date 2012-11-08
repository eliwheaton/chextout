<?php

class Message_Controller extends Base_Controller {

	public function action_keyword()
	{
		$mobile_num = Input::get('PhoneNumber');
		$message = Input::get('Message');
		$data = $mobile_num . ' ' . $message;

		$test = Test::create(array('data' => $data));
		return 'done';
	}

	public function action_inbox()
	{
		return 'OK';
	}

}