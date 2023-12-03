<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>Registration</title>
  <link rel="stylesheet"  href="css/userstyle.css">
  <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Kdam+Thmor+Pro&family=Montserrat:wght@100;200;500&family=Patrick+Hand&family=Rubik&family=Tiro+Bangla&display=swap" rel="stylesheet">
</head>
<body>
	
  <div class="header">
  	<h2 class="register-h2">Register</h2>
  </div>
	
  <form method="post" action="register.php">
  	<?php include('errors.php'); ?>
  	<div class="input-group">
  	  <label>Username</label>
  	  <input type="text" name="username" value="<?php echo $username; ?>">
  	</div>
  	<div class="input-group">
  	  <label>Email</label>
  	  <input type="email" name="email" value="<?php echo $email; ?>">
  	</div>
  	<div class="input-group">
  	  <label>Password</label>
  	  <input type="password" name="password_1">
  	</div>
  	<div class="input-group">
  	  <label>Confirm password</label>
  	  <input type="password" name="password_2">
  	</div>
  	<div class="input-group">
  	  <button type="submit" class="btn btn-info btn-sm btn-block" name="reg_user">Register</button>
  	</div>
  	<p>
  		Already a member? 
	  <a href="login.php" class="btn btn-info btn-sm btn-block ">Login</a>
		  
      <a href="index.php" class="btn btn-info btn-sm btn-block"> Home</a>
  	</p>
  </form>
</body>
</html>