<?php

include("connection.php");

if (isset($_POST['login'])){

  $username=$_POST['username'];
  $password=$_POST['password'];

  $query="SELECT * FROM signup WHERE username='$username' AND password='$password'";

  $result=mysqli_query($connect,$query);

  if (mysqli_num_rows($result)==1){

  	 echo "<script>alert('Welcome to our website')</script>";

  	 $role="SELECT role FROM signup WHERE username='$username' AND password='$password'";
  	 $roles=mysqli_query($connect,$role);

  	 $row=mysqli_fetch_array($roles);

  if($row['role']=="Admin") {
  	 	$_SESSION['admin']=$username;
  	 	header("Location:admin.php");
  	 }
  	 else if($row['role']=="User"){
  	 	$_SESSION['user']=$username;

  	 	header("Location:user.php");

  	 }

  }else{
  	echo "<script>alert('Invalid Account')</script>";
  }

}

?>



<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Login Form</title>
	<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css">
</head>
<body>
	<center>
    <img src=images/logo.png></center bg="dark blue">
	<div class="container">
		<div class="col-md-12">
			<div class="row">
				<div class="col-md-3"></div>
				<div class="col-md-6">
				<h4 class="text-center">Login</h4>

					<form method="post">
						<div class="form-group">
							<label>Username</label>
							<input type="text" name="username" class="form-control" autocomplete="off" placeholder="Enter Username">
						</div>

						<div class="form-group">
							<label>Password</label>
							<input type="password" name="password" class="form-control">
						</div>

						<h2></h2>
						<input type="Submit" name="login" class="btn btn-info" value="Login">
						 <br></br>
              			<a href="reg.php">Register new account</a>
					</form>
				</div>
				<div class="col-md-3"></div>
			</div>
		</div>
	</div>

</body>
</html>