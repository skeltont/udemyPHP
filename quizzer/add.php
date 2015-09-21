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
        <form action="add.php" method="post">
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
            <input type="submit" value="Submit">
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
