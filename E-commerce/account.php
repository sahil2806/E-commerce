<?php
  if(isset($_POST['submit'])){

      $username = $_POST['username'];
      $password = $_POST['password'];
      $confirm_password=$_POST['confirm_password'];

      $host='localhost';
      $user='root';
      $pass='';
      $dbname='login';

      $conn=mysqli_connect($host,$user,$pass,$dbname);

      $sql="INSERT INTO users (username,password) values ('$username','$password')";
      mysqli_query($conn,$sql);

     if(mysqli_query($conn, $sql)) {
        echo "Record inserted successfully.";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
  }

?>





 




















 