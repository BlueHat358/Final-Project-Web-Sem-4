<?php
    require_once '../vendor/autoload.php';

    $google_client = new Google_Client();
    $google_client->setClientid('clientId');
    $google_client->setClientSecret('ClientSecret');
    $google_client->setRedirectUri('https://bluehat358.my.id/Final%20Project%20Final%20Fix/index.php');

    $google_client->addScope('email');
    $google_client->addScope('profile');

    session_start();
?>