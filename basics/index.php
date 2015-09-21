<!--

Name:     Ty Skelton
Course:   Projects in PHP & MySQL
Section:  [1] - Getting Started

-->

<?php
  // $fruit = array('f1' => 'Apple', 'f2' => 'Orange', 'f3' => 'Grapes');
  $fruits = array('Apple','Orange','Grapes');
  $users = array('first_name' => 'Brad', 'last_name' => 'Traversy',
                 'email' => 'techguyinfo@gmail.com');
?>

<ul>
  <?php foreach ($users as $key => $value) : ?>
    <li><?php echo $key; ?> : <?php echo $value; ?></li>
  <?php endforeach; ?>
</ul>

<hr>

<?php
  $x = 1;

  if ($x == 1) {
    echo 'YES';
  } else {
    echo 'NOOOOO';
  }
?>
