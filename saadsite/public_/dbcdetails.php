<style>
#customers {
  font: arial;
  border-collapse: collapse;
  width: 100%;
}

#customers th, #customers td {
  border: 1px solid #ddd;
  padding: 8px;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}
#customers tr:nth-child(odd){background-color: #ddd;}

#customers th {
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
<table id="customers">
<tr>
  <th>ID</th>
  <th>First Name</th>
  <th>Surname</th>
  <th>Email</th>
  <th>Phone Number</th>
  <th>Password</th>
</tr>
<?php
$query = mysqli_query($dbconnect, "SELECT * FROM customers")
  or die (mysqli_error($dbconnect));
while ($row = mysqli_fetch_array($query)){ 
  echo
  "<tr>
  <td>{$row['id']}</td>
  <td>{$row['firstname']}</td>
  <td>{$row['surname']}</td>
  <td>{$row['email']}</td>
  <td>{$row['phonenumber']}</td>
   <td>{$row['password']}</td>
  </tr>\n";
}
?>
</table>
