<?php include 'db_connection.php';?>

<?php

    if (isset($_POST['email'])){
      $email = stripslashes($_REQUEST['email']);
      $email = mysqli_real_escape_string($conn,$email);
      $password = stripslashes($_REQUEST['password']);
      $password = mysqli_real_escape_string($conn,$password);

      $sql = "SELECT * FROM customers WHERE email='$email' and password='$password'";

      $result = $conn->query($sql);
      $rows = mysqli_num_rows($result);

      if($rows==1){
          $_SESSION['email'] = $email;
          header('Location: account.php');
      }
      else
      {
          echo "Email Or Password Is Incorrect";
      }
    }
      $conn->close();

?>
