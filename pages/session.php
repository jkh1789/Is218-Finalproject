<?php
session_start();

include("../model/database.php");

$user_check = $_SESSION['Username'];
$ses_sql = mysqli_query($con, "SELECT Username from users where id = '$user_check'");
$row = mysqli_fetch_array($ses_sql);
$login_session = $row['Username'];

if(!isset($login_session))
{
	echo "<meta https-equiv='refresh' content='0; url=https://web.njit.edu/~kj59/is218_FinalProject/pages/login.php'>";
}

?>
