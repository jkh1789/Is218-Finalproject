<!DOCTYPE HTML>
<html lang="en">

<head>
   <meta charset = utf-8>
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <meta name="description" content="">
   <meta name="author" content="">

   <title>To Do List Application</title>

   <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

   <link href="../vendor/metisMenu/metisMenu.min.css" rel="stylesheet">

   <link href="../dist/css/sb-admin-2.css" rel="stylesheet">

   <link href="../vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
 
</head>

<body>

<!--login and password-->

<div class="container">
	<div class="row">
	    <div class="col-md-4 col-md-offset-4">
	        <div class="login-panel panel panel-default">
		    <div class="panel-heading">
		        <h3 class="panel-title">Please Sign In</h3>
		    </div>
		    <div class="panel-body">
		        <form role="form">
		 <fieldset>
		    <div class="form-group">
	        	 <input class="form-control" placeholder="E-mail" name="email" type="email" autofocus>
		    </div>
		    <div class="form-group">
		        <input class="form-control" placeholder="Password" name="password" type="password" value="">
		    </div>
		    <div class="checkbox">
		    <label>
		        <input name="remember" type="checkbox" value="Remember Me">Remember Me
		    </label>
		    </div>
		    <!-- Change this to a button or input when using this as a form -->
		    <a href="Login.php" class="btn btn-lg btn-success btn-block">Login</a>
		 </fieldset>
	       </form>
	    </div>
          </div>
        </div>
      </div>
    </div>

    <script src="../vendor/jquery/jquery.min.js"></script>
    <script src="../vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="../vendor/metisMenu/metisMenu.min.js"></script>
    <script src="../dist/js/sb-admin-2.js"></script>

<!-- 
<form name = "submitform" action="LoginMgr.php" method="post">
<center>
<div style="position:relative;top:150px;background-image:url(images/Login.png);width:400px;height:250px;"> 
   <div style=""position:absolute;top:154px;left:54px;"><input type="text" name="uid" style="width:187px; height:17px;></div>
   <div style="position:absolute;top:182px;left:54px;"><input type="password" name="upwd" style="width:187px;height17px;"></div>
   <div style="position:absolute;top:152px;left:240px;width:115px;height:62px;"><a
   href="#"><img src="images/bt_login.jpg" border=0 onclick = "document.submitform.submit()";></div>
</div>
<!-->

</body>

</html>

