<?php include 'database.php'; ?>
<?php
  if (isset($_POST['submit'])) {
    // Get post variables
    $question_number = $_POST['question_number'];
    $question_text = $_POST['question_text'];
    $correct_choice = $_POST['correct_choice'];
    $choices = array(
      $_POST['choice_1'],
      $_POST['choice_2'],
      $_POST['choice_3'],
      $_POST['choice_4'],
      $_POST['choice_5']
    );

    // Insert Question
    $query = "INSERT INTO `questions` (text) VALUES ('$question_text')";
    $insert_row = $mysqli->query($query) or die($mysqli->error.__LINE__);

    if ($insert_row) {
      foreach($choices as $choice => $value) {
        if($value != '') {
          if($correct_choice == $choice + 1) {
            $is_correct = 1;
          } else {
            $is_correct = 0;
          }
          $query = "INSERT INTO `choices` (question_number, is_correct, text)
                    VALUES ($question_number, $is_correct, '$value')";
          $insert_row = $mysqli->query($query) or die($mysqli->error.__LINE__);

          if($insert_row) {
            continue;
          } else {
            die('Error : ('.$mysqli->errno.') '.$mysqli->error);
          }
        }
      }
      // header('Location: add.php');
      // exit();
      $msg = 'Question has been added';
    }


  }
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
        <h2>Add A Question</h2>
        <?php
          if(isset($msg)) {
            echo '<p>'.$msg.'</p>';
          }
        ?>
        <form action="" method="post">
          <p>
            <label>Question Number:</label>
            <input type="number" name="question_number">
          </p>
          <p>
            <label>Question Text:</label>
            <input type="text" name="question_text">
          </p>
          <p>
            <label>Choice #1:</label>
            <input type="text" name="choice_1">
          </p>
          <p>
            <label>Choice #2:</label>
            <input type="text" name="choice_2">
          </p>
          <p>
            <label>Choice #3:</label>
            <input type="text" name="choice_3">
          </p>
          <p>
            <label>Choice #4:</label>
            <input type="text" name="choice_4">
          </p>
          <p>
            <label>Choice #5:</label>
            <input type="text" name="choice_5">
          </p>
          <p>
            <label>Correct Choice #</label>
            <input type="number" name="correct_choice">
          </p>
          <p>
            <input type="submit" name="submit" value="Submit">
          </p>

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
