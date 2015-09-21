<!--

Name:     Ty Skelton
Course:   Projects in PHP & MySQL
Section:  [2] - Shoutit Shoutbox

-->
<?php include 'database.php'; ?>

<?php
  // Create select query
  $query = "SELECT * FROM shouts";
  $shouts = mysqli_query($conn, $query);
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <title>SHOUT IT!</title>
    <link rel="stylesheet" href="css/style.css" type="text/css" />
  </head>
  <body>
    <div id="container">
      <header>
        <h1>SHOUT IT! Shoutbox</h1>
      </header>
      <div id="shouts">
        <ul>
          <!-- loop over messages and list them -->
          <?php while($row = mysqli_fetch_assoc($shouts)) : ?>
            <li class="shout">
              <span>
                <?php echo $row['time']; ?>
              </span>
              <strong>
                <?php echo $row['user']; ?>
              </strong>
              <?php echo ': '.$row['message']; ?>
            </li>
          <?php endwhile; ?>
        </ul>
      </div>
    <div id="input">
      <form method="post" action="process.php">
        <input type="text" name="user" placeholder="Enter your name ">
        <input type="text" name="message" placeholder="Enter a message">
        <br />
        <input type="submit" class="shout-btn" name="submit" value="Shout it out" />
      </form>
    </div>
  </body>
</html>
