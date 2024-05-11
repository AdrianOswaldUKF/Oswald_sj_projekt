<?php

//konštanta
define('DATABASE', [
    'HOST' => 'localhost',
    'DBNAME' => 'oswald_sj_projekt',
    'USER_NAME' => 'root',
    'PASSWORD' => ''
]);

include_once('classes/Database.php');
include_once('classes/Menu.php');
include_once('classes/Page.php');
include_once('classes/Read.php');
include_once('classes/Contact.php');
include_once('classes/User.php');

session_start();
?>