<!DOCTYPE html>
<html>
<head>
<title>Log In/Sign Up</title>
<link rel="stylesheet" type="text/css" href="Background.css">
<link rel="stylesheet" type="text/css" href="linsup.css">
</head>
<body>

<?php include 'navbar.php';?>

<div class="background">

  <form action="login.php" method="post">
    <div class="imgcontainer">
      <img src="UserLogIn.png">
    </div>
    <div class="div1">
      <label for="email"><b>Email:</b></label>
      <input type="text" placeholder="Enter Email" name="email" required>
      <br>
      <label for="password"><b>Password:</b></label>
      <input type="password" placeholder="Enter Password" name="password" required>
      <button type="submit" class="btn login">Login</button>
    </div>
  </form>

  <form action="register.php" method="post">
      <div class="div2">
        <h1>Sign Up</h1>
        <p>Please fill in this form to create an account.</p>
        <hr>
        <label for="firstname"><b>First Name:</b></label>
        <input type="text" placeholder="Enter First Name" name="firstname" required>
    <br>
    <label for="surname"><b>Surname:</b></label>
    <input type="text" placeholder="Enter Surname" name="surname" required>
    <br>
        <label for="email"><b>Email:</b></label>
        <input type="text" placeholder="Enter Email" name="email" required>
    <br>
    <label for="phonenumber"><b>Phone Number:</b></label>
    <input type="text" placeholder="Enter Phone Number" name="phonenumber" required>
    <br>
        <label for="password"><b>Password:</b></label>
        <input type="password" placeholder="Enter Password" name="password" required>
    <br>
        <label for="password-repeat"><b>Repeat Password:</b></label>
        <input type="password" placeholder="Repeat Password" name="password-repeat" required>
        <div class="clearfix">
          <button type="reset" class="cancelbtn">Cancel</button>
          <button type="submit" class="signupbtn">Sign Up</button>
        </div>
      </div>
    </form>

</div>
</body>
</html>
