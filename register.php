<?php include('php/server.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>Registration</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
  <div class="header">
  	<h2>Register</h2>
  </div>
	
  <form method="post" action="register.php">
  	<?php include('php/errors.php'); ?>
  	<div class="input-group">
  	  <input type="text" name="username" value="<?php echo $username; ?>" placeholder="Enter Username">
  	</div>
  	<div class="input-group">
  	  <input type="email" name="email" value="<?php echo $email; ?>" placeholder="Enter Email">
  	</div>
  	<div class="input-group">
  	  <input type="password" name="password_1" placeholder="Enter Password">
  	</div>
  	<div class="input-group">
  	  <input type="password" name="password_2" placeholder="Confirm Password">
  	</div>
  	<div class="input-group">
  	  <button type="submit" class="btn" name="reg_user">Register</button>
  	</div>
  	<p>
  		<center> Already have an account? <a href="login.php">Sign in</a> </center  >
  	</p>
  </form>
</body>
</html>