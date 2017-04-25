<?php

require_once('../model/database.php');

// Get category ID
if (!isset($category_id)) {
    $category_id = filter_input(INPUT_GET, 'category_id',
    	     FILTER_VALIDATE_INT);
    if ($category id == NULL || $category_id == FALSE) {
        $category_id = 1;
    }
}

// Get name for selected category
$queryCategory = 'SELECT * FROM todo
		  WHERE id = :category_id';
$statement1 = $db->prepare($queryCategory);
$statement1->bindValue(':category_id', $category_id);
$statement1->execute();
$category = $statement1->fetch();
$category_name = $category['name'];
$statement1->closeCursor();

// Get all categories
$query = 'SELECT * FROM todo
		       ORDER BY categoryID';
$statement = $db->prepare($query);
$statement->execute();
$categories = $statement->fetchAll();
$statement->closeCursor();

// Get products for selected category
$queryProducts = 'SELECT * FROM todo
                  WHERE categoryID = :category_id
		  ORDER BY productID';
$statement3 = $db->prepare($queryProducts);
$statement3->bindValue(':category_id', $category_id);
$statement3->execute();
$products = $statement3->fetchAll();
$statement3->closeCursor();

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
	    
	    <?php if(!empty(items)): ?>
	    <ul class="items">
	        <?php foreach($items as $item): ?> 
	    	   <li>
		       <span class="item<?php echo $item['done'] ? ' done' : '' ?>"><?php echo $item['name']; ?></span>
		       <?php if(!$item['done']): ?>
		           <a href="mark.php?as=done&item=1<?php echo $item['id']; ?>" class="done-button">Mark as done</a>
	           </li>
		<?php endforeach; ?>   
	   </ul>
	   <?php else: ?>
	      <p>You haven't added items yet.</p>
	   <?php endif; ?>

	   <form class="item-add" action="add.php" method="post">
		<input type="text" name="name" placeholder="Type a new item here." class="input" autocomplete="off" required>
		<input type="submit" value="Add" Class="submit">
	    </form>

	 </div>
 

</body>

</html>
