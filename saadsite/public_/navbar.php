<!DOCTYPE html>
<html>
<head>
<style>
body {
  margin: 0;
  font-family: Arial;
}

.topnav {
  overflow: hidden;
  background-color: #262626;
  position: fixed;
  top: 0;
  width: 100%;
}

.topnav a {
  float: left;
  color: #f2f2f2;
  text-align: center;
  padding: 15px 15px;
  text-decoration: none;
  font-size: 20px;
}

.topnav a:hover {
  background-color: #ffffff;
  color: black;
}

.topnav a.active {
  background-color: #0039e6;
  color: black;

}
</style>
</head>
<body>
  <div class="topnav">
    <a class="active" href="index.php">Home</a>
    <a href="services.php">Services</a>
    <a href="reviews.php">Reviews</a>
    <a style="float:right" href="linsup.php">Log In/Sign Up</a>
    <a style="float:right" href="book.php">Book Now!</a>
</div>
</body>
