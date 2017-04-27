
<!DOCTYPE html>
<meta charset ="utf-8">

<head>
<title>Register Now!</title>
</head>

<body>
<form action="register.php" method="post" name="forml">
<table style="margin-left:auto; margin-right:auto; width:400px;">
   <tbody>
      <tr style="text-align:center">
         <td colspan="2"><h2 style="color:#00008b;">(Register Now)</h2><label
	 style="color:#FF0000;">*</labe> Fileds
      </tr>
      <tr>
        <td>Username<label style="color:#FF000;">*</label></td>
	<td><input type="text" name="username" required></td>
      </tr>
      <tr>
        <td>Password<label style="color:#FF000;">*</label></td>
	<td><input type="password" name="password" required></td>
      </tr>
      <tr>
        <td>First Name<label style="color:FF000;">*</label></td>
	<td><input type="text" name="fname" required></td>
      </tr>
        <td>Last Name<label style="color:#FF000;">*</label></td>
	<td><input type="text" name="lname" required></td>
      </tr>
      <tr>
        <td>Gender<label style="color:FF000;">*</label></td>
	<td><input type="radio" name="gender" value="Male" required> Male
	<input type="radio" name="gender" value="Female" required>Female</td>
      </tr>
      <tr>
        <td>Birthday<label style="color:FF000;">*</label></td>
	<td><input type="text" name="bday" required placeholder="month/date/year"></td>
      </tr>
      <tr>
        <td>Address<label style="color:#FF000;">*</label></td>
	<td><textarea name="address" cols="25" rows="5"
	required></textarea></td>
      </tr>
      <tr>
        <td>Email ID<label style="color:#FF000;">*</label></td>
	<td><input type="email" name="emailid" required placeholder="Enter a valid email"></td>
      </tr>
      <tr>
         <td>Phone<label style="color:#FF000;">*</label></td>
	 <td><input type="text" name="phone" required></td>
      </tr>
      <tr style="text-align:center">
       <td colspan="2"><input type="submit" name="submit" vlaue="Submit"> <input type="reset" name="Reset" value="Reset" required></td>
      </tr>
      </form>
      <tr>
      <td colspan="2">
      </td>
      </tr>
      <tr style="text-align:center">
      <td colspan="2">
      <?php
         if(isset($_GET['msg']))
	 {
	    $message = $_GET['msg'];
	    if($message == 1)
	        echo "<span style='color:green'>Your entry has been succesfully inserted!</span>";
         }
     ?>   
    </tbody>
  </table>
  </body>
  </html>
