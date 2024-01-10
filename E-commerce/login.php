
<?php
  if(isset($_POST['submit1'])){

      $username = $_POST['username'];
      $password = $_POST['password'];
       

      $host='localhost';
      $user='root';
      $pass='';
      $dbname='login';

      $conn=mysqli_connect($host,$user,$pass,$dbname);

      $sql="select * from users where username='".$username."' AND password='".$password."' limit 1 ";
      $result=mysqli_query($conn,$sql);

      if(mysqli_num_rows($result)==1)
      {
         
        header("Location: index.php");
      }
      else
      {
          header("Location: account.php");
      }
  }

?> 


 