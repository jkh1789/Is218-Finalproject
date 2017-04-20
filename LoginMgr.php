<?php
header("Content-Type:text/html; charset=UTF-8");

?>

<?
  $ID = $_POST['uid'];
  $PW = $_POST['upwd'];

  if($ID == "kj59" & $PW == "0") {
      echo "<meta http-equiv='refresh' content='0;
      url=https://web.njit.edu/~kj59/is218_FinalProject/Welcome.php>";

    } else {
       echo '<script type = "text/javascript">alert("User ID or Password is incorrect.")</script> ';
       echo "<meta http-equiv='refresh' content='0; url=https://web.njit.edu/~kj59/is218_FinalProject/'>";

    }
?>
