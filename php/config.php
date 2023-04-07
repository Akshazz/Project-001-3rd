<?php

$host="localhost";
$user="root";
$password="";
$db="student_information";  

 $conn  = mysqli_connect($host, $user, $password, $db);
  if(!$conn){
    echo "Database connection error".mysqli_connect_error();
  }
?>
