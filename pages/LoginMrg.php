<?php session_start(); ?>
<?php
header("Content-Type:text/html; charset=UTF-8");
?>

<?
   include ("../model/database.php");

   $username = $_POST['username'];
   $password = $_POST['password'];

   $sql ="$select * FROM users where Username ='$username'and Password ='$password'";
   $result = mysqli_query($con,$sql) or die(mysql_error());
   $count=mysqli_num_rows($result);

  if($count==1){
    session_register("username");
    $_SESSION['username']=$username;
      echo "<meta http-equiv='refresh' content = '0;url=https://web.njit.edu/~kj59/is218_FinalProject/pages/index.php'>";
    }else{
      echo'<script type = "text/javascript">alert("Your Password or User name is wrong.")</script>';
      echo"<meta http-equiv='refresh' content='0; url=https://web.njit.edu/~kj59/is218_FinalProject/pages/login.php'>";
      }

?>

