<!--

Name:     Ty Skelton
Course:   Projects in PHP & MySQL
Section:  [2] - Shoutit Shoutbox

-->

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
          <li class="shout"><span>10:15pm - </span>Brad: Hey what are you guys up to?</li>
          <li class="shout"><span>10:15pm - </span>John: I like turtles</li>
          <li class="shout"><span>10:15pm - </span>Steve: fuck you man.</li>
        </ul>
      </div>
    <div id="input">
      <form method="post" action="process.php">
        <input type="text" name="user" placeholder="Enter your name ">
        <input type="text" name="message" placeholder="Enter a message">
        <br />
        <input type="submit" class="shout" name="submit" value="Shout it out" />
      </form>
    </div>
  </body>
</html>
