<?php

session_start();

$_SESSION['user_id'] = 1;

$hostname = 'sql2.njit.edu';
$username = 'kj59';
$password = 'zYL3aNQk';
$database = 'kj59';

$db = new PDO("mysql:host=$hostname;dbname=$database", $username, $password);

// Handle this in some other way
if(!isset($_SESSION['user_id'])) {
     die('You are not signed in.');
}
