<?php 
include ("../model/database.php");

$itemsQuery = $db->prepare("
	SELECT id, message, submissiondate, duedate, Iscomplete
	FROM items
	WHERE user = :user
");

$itemsQuery->execute([
	'user' => $_SESSION['username']
]);

$items = $itemsQuery->rowCount() ? $itemsQuery : [];

foreach($itmes as $items) {
	print_r($item);


?>



<!DOCTYPE html>
<html lang="en">

<head>



</head>

<body>

  
 

</body>

</html>
