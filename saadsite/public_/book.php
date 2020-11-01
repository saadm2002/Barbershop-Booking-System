<!DOCTYPE html>
<html>
<head>
<title>Book Now!</title>
<link rel="stylesheet" type="text/css" href="Background.css">
<link rel="stylesheet" type="text/css" href="book.css">
</head>
<body>

<?php include 'navbar.php';?>

<div class="background">

<div class="container">

  <div class="row">
    <div class="column left" style="background-color:#aaa;">
      <h2>Choose Your Barber & Services:</h2>
<div class="div1">
<form action="dbbook.php" method="post">
      <table id="appointments" style="width:100%">
        <tr>
    <th>Barber:</th>
    <td><select name="barber_id">
        <option value="">Select Barber:</option>
        <option value="1">Adam</option>
        <option value="2">Shazzie</option>
      </select></td>
  </tr>
  <tr>
    <th>Appointment Date:</th>
    <td><input type="date" placeholder="Enter Date" name="date" required></td>
  </tr>
  <tr>
    <th>Appointment Time:</th>
    <td><select name="time">
        <option value="">Select Time:</option>
        <option value="10:00 AM">10:00 AM</option>
        <option value="10:30 AM">10:30 AM</option>
        <option value="11:00 AM">11:00 AM</option>
        <option value="11:30 AM">11:30 AM</option>
        <option value="12:00 PM">12:00 PM</option>
        <option value="12:30 PM">12:30 PM</option>
        <option value="13:00 PM">13:00 PM</option>
        <option value="13:30 PM">13:30 PM</option>
        <option value="14:00 PM">14:00 PM</option>
        <option value="14:30 PM">14:30 PM</option>
        <option value="15:00 PM">15:00 PM</option>
        <option value="15:30 PM">15:30 PM</option>
        <option value="16:00 PM">16:00 PM</option>
        <option value="16:30 PM">16:30 PM</option>
        <option value="17:00 PM">17:00 PM</option>
        <option value="17:30 PM">17:30 PM</option>
        <option value="18:00 PM">18:00 PM</option>
        <option value="18:30 PM">18:30 PM</option>
        <option value="19:00 PM">19:00 PM</option>
        <option value="19:30 PM">19:30 PM</option>
      </select></td>
  </tr>
  <tr>
    <th>Services:</th>
    <td><select name="services">
        <option value="">Select Service Required:</option>
        <option value="All">All</option>
        <option value="Beard">Beard</option>
        <option value="Skin Fade">Skin Fade</option>
        <option value="Hot Towel Shave">Hot Towel Shave</option>
        <option value="Haircut">Haircut</option>
        <option value="Shape Up">Shape Up</option>
      </select></td>
  </tr>
  </table>
</div>
    </div>
    <div class="column right" style="background-color:#bbb;">
      <h2>Your Details:</h2>
      <label for="firstname"><b>First Name:</b></label>
      <input type="text" placeholder="Enter First Name" name="firstname">
  <br>
  <label for="surname"><b>Surname:</b></label>
  <input type="text" placeholder="Enter Surname" name="surname">
  <br>
      <label for="email"><b>Email:</b></label>
      <input type="text" placeholder="Enter Email" name="email1">
  <br>
  <label for="phonenumber"><b>Phone Number:</b></label>
  <input type="text" placeholder="Enter Phone Number" name="phonenumber">
  <br>
      <label for="password"><b>Password:</b></label>
      <input type="password" placeholder="Enter Password" name="password1">
  <br>
      <label for="password-repeat"><b>Repeat Password:</b></label>
      <input type="password" placeholder="Repeat Password" name="password-repeat">
      <div class="div2"><button type="submit" name="signup" value="signup"class="block">Confirm & Sign Up</button></div>
      <hr>
      <h2>Or Log in:</h2>
      <hr>
      <label for="email"><b>Email:</b></label>
      <input type="text" placeholder="Enter Email" name="email">
      <br>
      <label for="password"><b>Password:</b></label>
      <input type="password" placeholder="Enter Password" name="password">
      <div class="div3"><button type="submit" name="login" value="login" class="block">Confirm & Log In</button></div>
</form>
    </div>

  </div>
</div>
</div>
</body>
</html>
