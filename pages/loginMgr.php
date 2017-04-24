<?php session_start(); ?>
<?php
header("Content-Type: text/html; charset=UTF-8");
?>

<?php
include('../model/database.php');

$username = $_POST['username']
$password = $_POST['password']

$sql = "select *from kj59 where id = '$username' and pw = '$password'";
$result = mysqli_query($con,$sql) or die(mysql_error());
$cound = mysqli_num_rows($result);

if ($count == 1) {
  session_register("username");
  $_SESSION['username'] = $username;
  	echo "<meta https-equiv='refresh'content = '0; url=https://web.njit.edu/~kj59/is218_FinalProject/pages/index.php'>";
	} else {
		echo '<script type = "text/javascript">alert("username or password is incorrect")</script>';
		echo "<meta hattps-equiv='refresh' content='0;
		url=https://web.njit.edu/~kj59/is218_FinalProject/pages/login.php'>";
	}
	


?>
