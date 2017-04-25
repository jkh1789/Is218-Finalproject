<?php

require_once('../model/database.php');

if(iseet($_POST['name'])) {
    $name = trim($_POST['name']);

    if(!empty($name)) {
        $addedQuery = $db->prepare("
	    INSERT INTO items (name, user, done, created)
	    VALUES (:name, :user, 0, NOW())
	");
	
	$addedQuery->execute([
	    'name' => $name,
	    'user' => $SESSION['user_id'}
	]);
   }
}

header('Location: index.php);
