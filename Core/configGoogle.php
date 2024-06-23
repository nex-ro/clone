<?php 
require_once 'vendor/autoload.php';
$clientID = '212828814307-9lp9uspfhi6m1q4pglsmd7edl1713cc8.apps.googleusercontent.com';
$clientSecret = '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';
$redirectUri = 'http://localhost/clone/index.php?page=handleLogin';

$client = new Google_Client();
$client->setClientId($clientID);
$client->setClientSecret($clientSecret);
$client->setRedirectUri($redirectUri);

$client->addScope("email");
$client->addScope("profile");

?>