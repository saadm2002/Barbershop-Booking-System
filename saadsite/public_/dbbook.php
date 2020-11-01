<?php include 'db_connection.php';?>

<?php
if ($_POST['signup']) {

      $firstname = $_POST['firstname'];
      $surname = $_POST['surname'];
      $email = $_POST['email1'];
      $phonenumber = $_POST['phonenumber'];
      $password = $_POST['password1'];

      $sql = "INSERT INTO customers (`firstname`,`surname`,`email`,`phonenumber`,`password`)
          VALUES ('$firstname','$surname','$email','$phonenumber','$password')";

      if ($conn->query($sql) === TRUE) {
          $sql = "SELECT id, email FROM customers WHERE email='$email'";
          $result = $conn->query($sql);
          $row = $result->fetch_row();
          $customers_id = $row[0];

          $barber_id = $_POST['barber_id'];
          $date = $_POST['date'];
          $time = $_POST['time'];
          $services = $_POST['services'];

          $sql = "INSERT INTO appointments (`customers_id`,`barber_id`,`date`,`time`,`services`)
              VALUES ('$customers_id','$barber_id','$date','$time','$services')";

          if ($conn->query($sql) === TRUE) {
            header('Location: account.php');
          }
          else
          {
              echo "Error: " . $sql . "<br>" . $conn->error;
          }

      }
      else
      {
          echo "Error: " . $sql . "<br>" . $conn->error;
      }

      $conn->close();

}

elseif ($_POST['login']) {

        $email = stripslashes($_REQUEST['email']);
        $email = mysqli_real_escape_string($conn,$email);
        $password = stripslashes($_REQUEST['password']);
        $password = mysqli_real_escape_string($conn,$password);

      $sql = "SELECT id, email FROM customers WHERE email='$email' and password='$password'";

      $result = $conn->query($sql);

      $row = $result->fetch_row();

      if($row){

          $customers_id = $row[0];

          $barber_id = $_POST['barber_id'];
          $date = $_POST['date'];
          $time = $_POST['time'];
          $services = $_POST['services'];

          $sql = "INSERT INTO appointments (`customers_id`,`barber_id`,`date`,`time`,`services`)
          VALUES ('$customers_id','$barber_id','$date','$time','$services')";

          if ($conn->query($sql) === TRUE) {
            header('Location: account.php');
          }
          else
          {
              echo "Error: " . $sql . "<br>" . $conn->error;
          }
      }
      else
      {
          echo "Email Or Password Is Incorrect";
      }
      $conn->close();

}

 ?>
