<!DOCTYPE html>
<html>
<head>
<title>Account</title>
<link rel="stylesheet" type="text/css" href="Background.css">
<link rel="stylesheet" type="text/css" href="account.css">
</head>
<body>

<div class="background">
<div class="container">

  <div class="row">
    <div class="column" style="background-color:#aaa;">
      <h1>Your Details:</h1>
<?php include 'dbcdetails.php';?>
    </div>
    <div class="column" style="background-color:#bbb;">
      <h1>Your Appointments:</h1>
<?php include 'dbcappointments.php';?>
<a href="logout.php">Log Out</a>
    </div>
  </div>

</div>
</div>
</body>
</html>
