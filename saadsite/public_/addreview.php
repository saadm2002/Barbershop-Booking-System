<?php
$hostname = "localhost";
$username = "saadsite";
$password = "Ruckholt18*";
$db = "saadsite";

$dbconnect=mysqli_connect($hostname,$username,$password,$db);

if ($dbconnect->connect_error)
{
  die("Database connection failed: " . $dbconnect->connect_error);
}

if(isset($_POST['submit']))
{
  $reviewer_name=$_POST['reviewer_name'];
  $star_rating=$_POST['star_rating'];
  $comment=$_POST['comment'];

  $query = "INSERT INTO reviews (reviewer_name, star_rating, comment)
  VALUES ('$reviewer_name', '$star_rating', '$comment')";

  if (!mysqli_query($dbconnect, $query))
  {
    die('An error occured. Your review has not been submitted.');
  }
  else
  {
    header('Location: reviews.php');
  }
}
?>
