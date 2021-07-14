<?php

namespace App\Controllers;

class Home extends BaseController
{
	public function index()
	{
		return view('user/index');
	}

	public function profile() {
		return view('user/profile');
	}

	public function check() {
		return view('user/check');
	}
	public function login() {
		return view('user/login');
	}
}
