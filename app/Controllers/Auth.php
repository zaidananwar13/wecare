<?php

namespace App\Controllers;

use App\Models\User;

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
        $_SESSION['access_profile'] = $plus->userinfo->get();
        $_SESSION['name'] = $_SESSION['access_profile']['name'];
        $_SESSION['email'] = $_SESSION['access_profile']['email'];

        $model = new User;
        $state = $model->where('email', $_SESSION['access_profile']['email'])->findAll();

        if(count($state) <= 0) {
          $data = [
            'nama' => $_SESSION['access_profile']['name'],
            'email' => $_SESSION['access_profile']['email'],
            'jenis_kelamin' => 'Unidentified',
            'penyakit' => 'None',
            'pola_makan' => 'None',
            'pola_olahraga' => 'None'
          ];

          $model->insert($data);
        }

      }catch(\Exception $e) {
        echo $e->__toString();

        $_SESSION['access_token'] = "";
        die;
      }

      header('Location: http://localhost/wecare/profile'); die;
    }
  }

  public function logout() {
    $_SESSION['access_token'] = "";
    $_SESSION['access_profile'] = "";

    session_destroy();

		return redirect()->to(csite_url()); 
  }
}
