<?php
  $servername = "localhost";
  $username = "saadsite";
  $password = "Ruckholt18*";
  $dbname = "saadsite";

  $conn = new mysqli($servername, $username, $password, $dbname);

  if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
  } else {
      echo "Connection success";
  }
?>
