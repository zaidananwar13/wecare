<?php

require_once __DIR__ . '/vendor/autoload.php';

$client = new Google\Client();
$client->setAuthConfig('client_secret.json');
$client->setScopes([
  'profile',
  'email',
]);
$client->setRedirectUri("http://localhost/php-bpwl-zaidan-anwar/kitacare/auth.php");

if(!isset($_GET['code'])) {
  $auth_url = $client->createAuthUrl();

  header('Location: '.  filter_var($auth_url, FILTER_SANITIZE_URL)); die;
}else {

  $client->authenticate($_GET['code']);
  $_SESSION['access_token'] = $client->getAccessToken();

  try {
    $plus = new Google_Service_OAuth2($client);
    $_SESSION['access_profile'] = $plus->userinfo->get();
  }catch(\Exception $e) {
    echo $e->__toString();

    $_SESSION['access_token'] = "";
    die;
  }

  header('Location: dashboard');
}
