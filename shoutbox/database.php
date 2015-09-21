<?php
  //Connect to database
  $conn = mysqli_connect(
    "localhost",
    "root",
    "",
    "test"
  );

  //Test connection_status
  if(mysqli_connect_errno()) {
    echo 'Failed to connect to MySQL: '.mysqli_connect_error();
  }
?>
