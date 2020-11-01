<!DOCTYPE html>
<html>
<head>
<style>
#reviews {
  font: arial;
  border-collapse: collapse;
  width: 100%;
}

#reviews th, #reviews td {
  border: 1px solid #ddd;
  padding: 8px;
}

#reviews tr:nth-child(even){background-color: #f2f2f2;}
#reviews tr:nth-child(odd) {background-color: #ddd;}

#reviews th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #0039e6;
  color: white;
}
</style>
</head>
<body>
<?php

$hostname = "localhost";
$username = "saadsite";
$password = "Ruckholt18*";
$db = "saadsite";

$dbconnect=mysqli_connect($hostname,$username,$password,$db);

if ($dbconnect->connect_error) {
  die("Database connection failed: " . $dbconnect->connect_error);
}

?>
<table id="reviews">
<tr>
  <th>Reviewer Name</th>
  <th>Stars</th>
  <th>Comment</th>
</tr>

<?php

$query = mysqli_query($dbconnect, "SELECT * FROM reviews")
or die (mysqli_error($dbconnect));

while ($row = mysqli_fetch_array($query)) {
  echo
  "<tr>
   <td>{$row['reviewer_name']}</td>
   <td>{$row['star_rating']}</td>
   <td>{$row['comment']}</td>
  </tr>\n";

}
?>
</table>
</body>
</html>
