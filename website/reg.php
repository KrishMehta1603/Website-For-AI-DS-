

<?php

include("connection.php");

if (isset($_POST['signup'])){

  $username=$_POST['username'];
  $email=$_POST['email'];
  $password=$_POST['password'];
  $role=$_POST['role'];

  $query="INSERT INTO signup(username,email,password,role) VALUES('$username','$email','$password','$role')";

  $result=mysqli_query($connect,$query);

  if($result){

    echo"<script>alert('You have successfully signup')</script>";
    header("Location:login1.php");

  }else{
    echo"<script>alert('Failed to signup')</script>";
  }


}

?>
<!doctype html>

<html>
<head>
  <title>Registeration form</title>
  <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css">
</head>
<body>
      <
      <center>
      <img src=images/logo.png></center bg="dark blue">
      <div class="container">
        <div class="col-md-12">
          <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-6">
            <h3 class="text-center">Sign-Up</h3>


            <form method="post">
              <div class="form-group">
                <label>Username</label>
                <input type="text" name="username" class="form-control" placeholder="Enter Username" autocomplete="off">
              </div>

               <div class="form-group">
                <label>Email</label>
                <input type="email" name="email" class="form-control" placeholder="Enter Email" autocomplete="off">
              </div>



               <div class="form-group">
                <label>Password</label>
                <input type="password" name="password" class="form-control" autocomplete="off">
              </div>
              <div class="form-group">
                <label>Select Usertype</label>
                <select name="role" class="form-control">
                  <option value="">Select Usertype</option>
                  <option value="Admin">Admin</option>
                  <option value="User">User</option>
                </select>
              </div>
              <h3></h3>

              <input type="submit" name="signup" class="btn btn-success">
              <br></br>
              <a href="login1.php"> Already have an account</a>
            </form>
          </div>
          <div class="col-md-3"></div>
        </div>
      </div>
    </div>






</body>
</html>