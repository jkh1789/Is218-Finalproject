<?php
    
    date_default_timezone_set('America/New_York');


    $hostname = "sql2.njit.edu";
    $username = "kj59";
    $password = "zYL3aNQk";
    $database = "kj59";

      $con = mysqli_connect("$hostname", "$username", "$password", "$database")
      	       or die("Failed to connect mysql server ".mysqli_connect_error());

?>
