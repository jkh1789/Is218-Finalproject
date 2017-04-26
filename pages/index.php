<?php
require_once '../model/database.php';

$query = 'SELECT * FROM todo  ORDER BY id';
$statement = $db->prepare($query);
$statement->execute();
$categories = $statement->fetchAll();
$statement->closeCursor();


?>


<!DOCTYPE html>
<html lang="en">
    <head>
	<meta charset="URF-8">
	<title>To do</title>

	<link href="http://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
	<link href="http://fonts.googleapis.com/css?family=Shadows+Into+Light+Two" rel="stylesheet">
	<link rel="stylesheet" href="css/main.css">

	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <div class="list">
	    <h1 class="header">To do.</h1>
	    
	    <ul class="items">
	    	   <li>
		       <span class="item<?php echo $item['done'] ? ' done' : '' ?>"><?php echo $item['name']; ?></span>
		           <a href="mark.php?as=done&item=1<?php echo $item['id']; ?>" class="done-button">Mark as done</a>
	           </li>
	   </ul>
	      <p>You haven't added items yet.</p>

	   <form class="item-add" action="add.php" method="post">
		<input type="text" name="name" placeholder="Type a new item here." class="input" autocomplete="off" required>
		<input type="submit" value="Add" Class="submit">
	    </form>

	 </div>
 

</body>

</html>
