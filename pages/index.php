<?php
require_once 'session.php';
require_once 'init.php';

$itemsQuery = $db->prepare("
    SELECT id, name, done
    FROM todo
    WHERE user = :user
");

$itemsQuery->execute([
    'user' => $_SESSION['user_id']
]);
$itemsQuery->execute([
    'user' => $_SESSION['user_id']
]);

$items = $itemsQuery->rowCount() ? $itemsQuery : [];

//foreach($items as $item) {
   print_r($item);
//}
?>

<!DOCTYPE html>
<html lang="en">
    <head>
	<meta charset="URF-8">
	<title>To do</title>

	<link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Shadows+Into+Light+Two" rel="stylesheet">
	<link rel="stylesheet" href="css/main.css">

	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <div class="list">
	    <h1 class="header">To do.</h1>
	    
	       
		

	    <?php if(!empty($items)): ?>
	    <ul class="items">
	         <?php foreach($items as $item): ?>
	    	   <li>
		       <span class="item<?php echo $item['done'] ? ' done' : '' ?>"><?php echo
		       $item['name']; ?></span>
		       <?php if(!$item['done']): ?>
		           <a href="mark.php?as=done&item=<?php echo $item['id']; ?>" class="done-button">Mark as done</a>
		       <?php endif; ?>
		  </li>
		  <?php endforeach; ?>
	   </ul>
	   <?php else: ?>
	      <p>You haven't added items yet.</p>
	   <?php endif; ?>

	    <form class="item-add" action="add.php" method="post"> 
	        <input type="text" name="name" placeholder="Type a new item and due date here." class="input" autocomplete="off" required>
	        <input type="submit" value="Add" class="submit">
	    </form>
	    <li>
	       <a href="login.php">Log Out</a>
	    </li>
	
	 </div>


</body>

</html>
