<?php
 include '../model/database.php'
?>
<!DOCTYPE HTML>
<html>
<head>
  <title>Password Recovery</title>
</head>
<body>
<h2>Create New Password</h2>
         <form method="post" action="">
	 <p><label>New Password: </label> <input type="text" name="password" /></p>
         <p><label>Retype New Password: </label><input type="text" name="repassword" /></p>
	 <p><input type="submit" name="create" value="Submit"/></p>
	</form>

<?php
 if (isset($_GET['Email']) && ($_GET['code']!="")) {
  $code = $_GET['code'];
  $email = $_GET['Email'];

  $checkmail=$db->query("SELECT Email FROM users WHERE Email='$email' AND lost='$code' AND lost!='' ") or die(mysqli_error('Run time error...'));
  $count = mysqli_num_rows($checkmail);
  if ($count) {
   if (isset($_POST['password']) AND ($_POST['password']!="")){
    
     $password=md5($_POST['password']);
     $repassword=md5($_POST['repassword']);
     if ($password===$repassword) {

         $inserted=$db->query("UPDATE users SET lost='', Password='$password' WHERE Email='$email' ");

     if ($inserted) {
       echo "<h1>Successfully changed!</h1>
       <a href='login.php'>Return home</a>";
     }

     }
     else
     {
        echo "Password do not match!";
     }

     }
     }
     else
     {
     echo"<h2>Error occure! <a href='forgot.php'>Return</a></h2>";
     }

}
$db->close();
?>
</body>
</html>


