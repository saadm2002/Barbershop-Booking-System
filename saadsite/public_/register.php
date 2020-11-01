<?php include 'db_connection.php';?>

<?php

  $firstname = $_POST['firstname'];
  $surname = $_POST['surname'];
  $email = $_POST['email'];
  $phonenumber = $_POST['phonenumber'];
  $password = $_POST['password'];

  $sql = "INSERT INTO customers (`firstname`,`surname`,`email`,`phonenumber`,`password`)
  VALUES ('$firstname','$surname','$email','$phonenumber','$password')";

  if ($conn->query($sql) === TRUE) {
    header('Location: account.php');
  }
  else
  {
      echo "Error: " . $sql . "<br>" . $conn->error;
  }

    $conn->close();

?>
