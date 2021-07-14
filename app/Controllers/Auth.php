<?php

namespace App\Controllers;

class Auth extends BaseController
{
  public function __construct()
  {
    $this->session = \Config\Services::session();
    

		if($this->session->get('role') == 'Admin') {
      
			header('Location: http://localhost/wecare/dashboard'); die;
		}
  }

	public function index()
	{
		return "welcome to auth!";
	}

	public function admin() {
    if(isset($_POST['login-admin'])) {
      $admin = new \App\Models\Admin();

      $data = $admin->where('username', $_POST['username'])->findAll();

      if(count($data) > 0) {
        if(password_verify($_POST['password'], $data[0]['password'])) {
          $this->session->set([
            'role' => 'Admin',
            'username' => $data[0]['username']
          ]);

	    		header('Location: http://localhost/wecare/dashboard'); die;
        }
      }

    }

		return view('admin/login');
	}

  public function user() {
		return view('user/login');
	}

  public function verify() {
    
  }
}
