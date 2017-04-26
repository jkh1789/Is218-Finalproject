<?php
    
    date_default_timezone_set('America/New_York');


    $hostname = 'sql2.njit.edu';
    $username = 'kj59';
    $password = 'zYL3aNQk';
    $database = 'kj59';


    try {
    	$db = new PDO("mysql:host=$hostname;dbname=$database", $username, $password);
    } catch (PDOException $e) {
        $error_message = $e->getMessage();
	include('database_error.php');
	exit();
    }
?>
