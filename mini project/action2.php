<?php
  include "db.php";
  $username= $_POST["username"];
  $password = $_POST["password"];

  $query = "select  username , passwd from customer where username='$username' and passwd='$password' ";
  $result = mysqli_query($connect,$query);
  $t=mysqli_num_rows($result);
  if ($t == 1 )
  {
    header("Location:index.html");
  }  
  else{
    echo "wrong credentials";
  }

  
  

 ?>
