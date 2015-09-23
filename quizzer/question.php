<?php include 'database.php'; ?>
<?php session_start(); ?>
<?php
  // Set question number
  $number = (int) $_GET['n'];

  // get question
  $query = "SELECT * FROM `questions`
            WHERE id = $number";
  $result = $mysqli->query($query) or die($mysqli->error.__LINE__);
  $question = $result->fetch_assoc();

  // get choices
  $query = "SELECT * FROM `choices`
            WHERE question_number = $number";
  $choices = $mysqli->query($query) or die($mysqli->error.__LINE__);

  // get total questions
  $query = "SELECT * FROM  `questions`";
  $results = $mysqli->query($query) or die($mysqli->error.__LINE__);
  $total = $results->num_rows;

  // $choices = $result->fetch_assoc();
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <title>PHP Quizz</title>
    <link rel="stylesheet" href="css/style.css" />
  </head>
  <body>
    <header>
      <div class="container">
        <h1>PHP Quizzer</h1>
      </div>
    </header>
    <main>
      <div class="container">
        <div class="current">Question <?php echo $question['id']; ?> of <?php echo $total; ?></div>
        <p class="question">
          <?php echo $question['text']; ?>
        </p>
        <form action="process.php" method="post">
          <ul class="choices">
            <?php while($row = $choices->fetch_assoc()) : ?>
              <li><input type="radio" name="choice" value="<?php echo $row['id']; ?>" /><?php echo $row['text']; ?></li>
            <?php endwhile; ?>
          </ul>
          <input type="submit" name="submit" value="Submit" />
          <input type="hidden" name="number" value="<?php echo $number; ?>">
        </form>
      </div>
    </main>
    <footer>
      <div class="container">
        Copyright &copy; 2014, PHP Quizzer
      </div>
    </footer>
  </body>
</html>
