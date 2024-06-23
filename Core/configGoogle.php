<?php 
require_once 'vendor/autoload.php';
$clientID = '<client_id>';
$clientSecret = '<client_secret>';
$redirectUri = 'http://localhost/clone/index.php?page=handleLogin';

$client = new Google_Client();
$client->setClientId($clientID);
$client->setClientSecret($clientSecret);
$client->setRedirectUri($redirectUri);

$client->addScope("email");
$client->addScope("profile");

?>