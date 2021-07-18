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
    require_once  'vendor/autoload.php';


    $client = new \Google\Client();
    $client->setAuthConfig('client_secret.json');
    $client->setScopes([
      "https://www.googleapis.com/auth/plus.login",
      "https://www.googleapis.com/auth/userinfo.email",
      "https://www.googleapis.com/auth/userinfo.profile",
      "https://www.googleapis.com/auth/plus.me"
    ]);
    $client->setRedirectUri("http://localhost/wecare/auth/verify");

    if(!isset($_GET['code'])) {
      $auth_url = $client->createAuthUrl();

      header('Location: '.  filter_var($auth_url, FILTER_SANITIZE_URL)); die;
    }else {

      $client->fetchAccessTokenWithAuthCode($_GET['code']);
      $_SESSION['access_token'] = $client->getAccessToken();

      try {

        $plus = new \Google_Service_OAuth2($client);
        var_dump($plus->userinfo->get()); die;
        $_SESSION['access_profile'] = $plus->userinfo->get();

      }catch(\Exception $e) {
        echo $e->__toString();

        $_SESSION['access_token'] = "";
        die;
      }

      echo "<b> Controller/Auth.php line: 83 </b><br>";
      echo "Kalo mau lanjut hapus ini ya :)"; die;

      header('Location: ??');
    }

  }
}
