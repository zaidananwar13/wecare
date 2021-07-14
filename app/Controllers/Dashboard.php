<?php

namespace App\Controllers;

class Dashboard extends BaseController
{
	public function index()
	{
		return view('admin/index');
	}
	
	public function konsultasi()
	{
		return view('admin/konsultasi');
	}
	
	public function feedback()
	{
		return view('admin/feedback');
	}
	
	public function administrator()
	{
		return view('admin/admin');
	}
}
