<?php

require_once(../model/database.php)

session_start();

$_SESSION['user_id'] = 1;

// Handle this in some other way
if(!isset($_SESSION['user_id'])) {
    die('You are not signed in.');
}
