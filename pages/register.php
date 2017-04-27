<?php
require_once '../model/database.php';

//$hostname ="sql2.njit.edu";
//$username ="kj59";
//$password ="zYL3aNQk";
//$database ="kj59";

 //  $con = mysqli_connect("$hostname", "$username", "$password", "$database")
 //           or die("Failed to connect mysql server ".mysqli_connect_error());


   $username = mysqli_real_escape_string($con, $_POST['username']);
   $password = mysqli_real_escape_string($con, $_POST['password']);
   $fname = mysqli_real_escape_string($con, $_POST['fname']);
   $lname = mysqli_real_escape_string($con, $_POST['lname']);
   $gender = mysqli_real_escape_string($con, $_POST['gender']);
   $bday = mysqli_real_escape_string($con, $_POST['bday']);
   $address = mysqli_real_escape_string($con, $_POST['address']);
   $email = mysqli_real_escape_string($con, $_POST['emailid']);
   $phone = mysqli_real_escape_string($con, $_POST['phone']);

   $query = "INSERT INTO users(Username, Password, FirstName, LastName, Gender, Birthday, Address, Email, Phone)
   	       VALUE('$username', '$password', '$fname', '$lname', '$gender', '$bday', '$address', '$email', '$phone')";

   if(!mysqli_query($con, $query))
   {
       echo "Error" .mysqli_error($con);
   }
   else
   {
       header("Location: create.php?msg=1");
   }

?>
