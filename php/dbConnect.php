<?php

function connect(){
  $servername = "localhost";
  $username = "root";
  $password = "root";
  $dbname = "uselessform";

  // Create connection
  $conn = mysqli_connect($servername, $username, $password, $dbname);
  mysqli_query($conn,"SET NAMES 'utf8'");
  // Check connection
  if (!$conn) {
      die("Connection failed: " . $conn->connect_error);
  }

  return $conn;
}

 ?>
