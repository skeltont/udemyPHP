<?php
  include 'database.php';

  // Check if form submitted
  if (isset($_POST['submit'])) {
    // strip any harmful content that's submitted (like html tags, etc.)
    // sometimes useful if you want to have html inserted, but I don't.
    $user = mysqli_real_escape_string($conn, $_POST['user']);
    $message = mysqli_real_escape_string($conn, $_POST['message']);

    // Set timezone
    date_default_timezone_set('America/Los_Angeles');
    $time = date('h:i:s', time());

    // Validate input
    if(!isset($user) || $user == '' || !isset($message) || $message == '') {
      $error = 'Please fill in your name and a message';
      header("Location: index.php?error=".urlencode($error));
      exit();
    } else {
      $query = "INSERT INTO shouts (user, message, time)
                VALUES ('$user', '$message', '$time')";
      if (!mysqli_query($conn, $query)) {
        die('Error: '.mysqli_error($conn));
      } else {
        header("Location: index.php");
        exit();
      }
    }
  }
?>
