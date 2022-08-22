<?php
 
//  $servername="localhost";
//  $pass="";
//  $usernames="root";
//  $database="login";

 $connect=mysqli_connect("localhost","root","","dbms");

 if(!$connect)
 {
     echo "error in connecting to server";
 }
?>