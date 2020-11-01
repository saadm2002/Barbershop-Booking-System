<style>
#appointments {
  font: arial;
  border-collapse: collapse;
  width: 100%;
}

#appointments th, #appointments td {
  border: 1px solid #ddd;
  padding: 8px;
}

#appointments tr:nth-child(even){background-color: #f2f2f2;}
#appointments tr:nth-child(odd){background-color: #ddd;}

#appointments th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: centre;
  background-color: #0039e6;
  color: white;
}
</style>
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
<table id="appointments">
<tr>
  <th>Barber</th>
  <th>Date</th>
  <th>Time</th>
  <th>Services</th>
</tr>
<?php
$query = mysqli_query($dbconnect, "SELECT * FROM appointments")
  or die (mysqli_error($dbconnect));
while ($row = mysqli_fetch_array($query)) {
  echo
  "<tr>
  <td>{$row['barber_id']}</td>
  <td>{$row['date']}</td>
  <td>{$row['time']}</td>
  <td>{$row['services']}</td>
  </tr>\n";
}
?>
</table>
