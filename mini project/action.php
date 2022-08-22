<?php
  include "db.php";
  $username=$_POST["username"];
  $pass=$_POST["password"];
  $name = $_POST["name"];
  $email = $_POST["email"];


  $query1 = "select * from customer where username='$username' ";

  $result=mysqli_query($connect,$query1);

  if(mysqli_num_rows($result) >=1 )
  {
      echo "already exist";
  }
  else if(mysqli_num_rows($result) == 0)
  {
      $query2 = "insert into customer values('$username','$pass','$name','$email')";

      $result = mysqli_query($connect,$query2);

      if($result)
      {
        header("Location:signin.html");
      }
      

  }

?>