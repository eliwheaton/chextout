<?php

class Message_Controller extends Base_Controller {

	public function action_keyword()
	{
		$mobile_phone = Input::get('PhoneNumber');
		$message = Input::get('Message');

		// Check if customer exists
		$customer = Customer::where_mobile_phone($mobile_phone)->first();

		if ($customer) {
			// Send conf sms
			return 'conf: 173';
		}
		else {
			TempMessage::create(array('stage' => 'SIGNUP', 'mobile_phone' => $mobile_phone));

			return 'You need to register to use this service: http://chextout.com/register';
			// Send signup link
			// $data = array(
			//     'PhoneNumbers'  => array($mobile_phone),
			//     'Subject'       => 'Signup',
			//     'Message'       => 'You need to register to use this service: http://chextout.com/register',
			//     'MessageTypeID' => 1
			// );
			// Eztexting::send_sms($data);
		}
	}

	public function action_inbox()
	{
		return 'OK';
	}

}