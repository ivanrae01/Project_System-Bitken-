<?php include('php/server.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>Registration system PHP and MySQL</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
  <div class="header">
  	<h2>Login</h2>
  </div>
	 
  <form method="post" action="login.php">
  	<?php include('php/errors.php'); ?>
  	<div class="input-group">
  		<input type="text" name="username" placeholder="Enter Username">
  	</div>
  	<div class="input-group">
  		<input type="password" name="password" placeholder="Enter Password">
  	</div>
  	<div class="input-group">
  		<button type="submit" class="btn" name="login_user">Login</button>
  	</div>
  	<p>
  		<center> New Here? <a href="register.php">Sign up</a> </center>
  	</p>
  </form>
</body>
</html>