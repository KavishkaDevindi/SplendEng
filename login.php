<?php include('server.php') ?>


<!DOCTYPE html>
<html>
<head>
  <title>Registration</title>
  <link rel="stylesheet"  href="css/userstyle.css">
  <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
<link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Kdam+Thmor+Pro&family=Montserrat:wght@100;200;500&family=Patrick+Hand&family=Rubik&family=Tiro+Bangla&display=swap" rel="stylesheet">

</head>
<body >
  <div class="header">
  	<h2>Login</h2>
  </div>
	 
  <form method="post" action="login.php">
  	<?php include('errors.php'); ?>
  	<div class="input-group">
  		<label>Username</label>
  		<input type="text" name="username" >
  	</div>
  	<div class="input-group">
  		<label>Password</label>
  		<input type="password" name="password">
  	</div>
  	<div class="input-group">
  		<button type="submit" class="btn btn-info btn-sm btn-block" role="button" name="login_user">Login</button>
  	</div>
   <p>Not yet a member?</p>
    <a href="register.php" class="btn btn-info btn-sm btn-block ">Sign up</a>


  <a href="index.php" class="btn btn-info btn-sm btn-block">Home</a>

  		

  </form>
</body>
</html>