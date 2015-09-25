<?php include 'includes/header.php'; ?>
<?php
  $db = new Database();
  // Create query & run SELECT query for categories
  $query = "SELECT * FROM `categories`";
  $categories = $db->select($query);

  if (isset($_POST['submit'])) {
    $title = mysqli_real_escape_string($db->link, $_POST['title']);
    $body = mysqli_real_escape_string($db->link, $_POST['body']);
    $category = mysqli_real_escape_string($db->link, $_POST['category']);
    $author = mysqli_real_escape_string($db->link, $_POST['author']);
    $tags = mysqli_real_escape_string($db->link, $_POST['tags']);

    // Simple validation for any empty fields
    if ($title == '' || $body == '' || $category == '' || $author == '') {
      $error = 'Please fill out all required fields.';
    } else {
      $query = "INSERT INTO `posts` (title, body, category, author, tags) VALUES ('$title', '$body', $category, '$author', '$tags')";
      $insert_row = $db->insert($query);
    }
  }
?>
<form method="post" action="">
  <div class="form-group">
    <label>Title</label>
    <input type="text" name="title" class="form-control" placeholder="Enter Title">
  </div>
  <div class="form-group">
    <label>Body</label>
    <textarea name="body" class="form-control" rows="8" cols="40"></textarea>
  </div>
  <div class="form-group">
    <label>Category</label>
    <select class="form-control" name="category">
      <?php while ($row = $categories->fetch_assoc()) : ?>
        <option value="<?php echo $row['id']; ?>"><?php echo $row['name']; ?></option>
      <?php endwhile; ?>
    </select>
  </div>
  <div class="form-group">
    <label>Author</label>
    <input type="text" name="author" class="form-control" placeholder="Enter Author Name">
  </div>
  <div class="form-group">
    <label>Tags</label>
    <input type="text" name="tags" class="form-control" placeholder="Enter Tags">
  </div>
  <div class="form-group">
    <button type="submit" name="submit" class="btn btn-default">Submit</button>
    <a href="index.php" class="btn btn-default">Cancel</a>
  </div>
</form>
<?php include 'includes/footer.php'; ?>
