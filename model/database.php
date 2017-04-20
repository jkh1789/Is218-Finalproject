<?php
    $dsn = 'mysql:host=sql2.njit.edu;dbname=kj59';
    $username = 'kj59';
    $password = 'zYL3aNQK';

    try {
    	$db = new PDO($dsn, $username, $password);
    } catch (PDOException $e) {
        $error_message = $e->getMessage();
	include('database_error.php');
	exit();

    }
?>
