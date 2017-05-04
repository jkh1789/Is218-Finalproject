<?php
  include '../model/database.php';
?>

<!DOCTYPE HTML>
<html>
<head>
    <title>Find Password</title>
</head>
<body>
    <h2>Reset Password</h2>
      <form method="post"action="#">

        <p><label>Email:</label><input type="text" name="email" /></p>
	<p><input type="submit" name="submit" value="Reset"/></p>
      </form>
</body>
</html>

    <?php
    if (isset($_POST['Email']) && ($_POST['Email']!="")) {
    $email=trim($_POST['Email']);
    $code=md5(uniqid(true));

    if(!filter_var($email, FILTER_VALIDATE_EMAIL) === false) {

       $checkmail=$db->query("SELECT Email FROM users WHERE Email=$email'") or die(mysqli_error('Run time error...'));
       $count=mysqli_num_rows($checkmail);

       if ($count==1) {
       $inserted=$db->query("UPDATE users SET lost='$code' WHERE Email='$email'");
       $to = $email;
       $subject = "reset password link";
       $header = "By To do";
       $body = "here is your link to reset your password For active your account, visit the link below to
       complete: https://web.njit.edu/~kj59/is218_FinalProject/pages/updatepassword.php?Email=$email&code=$code";

       $sent=mail($to,$subject,$body,$header);
       
       if ($inserted){
        echo("Check your mail we have sent you reset link to change your password! <br>");

        }
       }
       else
       {
        echo("Oops!Sorry, $email does not belong to any account!");
       }

      } else {
        echo("$email is not a valid email address");
      }
      }
      $db->close();
?>

