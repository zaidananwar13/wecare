<?php

namespace App\Controllers;

class Home extends BaseController
{
	public function index()
	{
		return view('user/index');
	}

	public function check()
	{
		return view('user/check');
	}
}
