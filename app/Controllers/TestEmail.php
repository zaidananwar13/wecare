<?php

namespace App\Controllers;

class TestEmail extends BaseController
{

	public function index()
	{
    $email = \Config\Services::email();

    $email->setFrom('tukang.printer20@gmail.com','tukang.printer20');
		$email->setTo('lufostt@gmail.com');


		$email->setSubject('Test Mail');
		$email->setMessage('Hello from CI4!');


		if(! $email->send()){
      echo 'fail';
		}else{
      echo 'ahahah';
		}
	}
}