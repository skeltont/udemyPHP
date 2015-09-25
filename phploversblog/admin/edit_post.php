<?php include 'includes/header.php'; ?>
<?php
  $id = $_GET['id'];
  // Create DB object
  $db = new Database();

  // Create query & run SELECT query for posts
  $query = "SELECT * FROM `posts` WHERE id = $id";
  $post = $db->select($query)->fetch_assoc();

  // Create query & run SELECT query for categories
  $query = "SELECT * FROM `categories`";
  $categories = $db->select($query);
?>
<form method="post" action="">
  <div class="form-group">
    <label>Title</label>
    <input type="text" name="title" class="form-control" placeholder="Enter Title" value="<?php echo $post['title']; ?>">
  </div>
  <div class="form-group">
    <label>Body</label>
    <textarea name="body" class="form-control" rows="8" cols="40">
      <?php echo $post['body']; ?>
    </textarea>
  </div>
  <div class="form-group">
    <label>Category</label>
    <select class="form-control" name="category">
      <?php while ($row = $categories->fetch_assoc()) : ?>
        <option value="<?php echo $row['id']; ?>" <?php echo ($post['category'] == $row['id']) ? 'selected' : '' ?>><?php echo $row['name']; ?></option>
      <?php endwhile; ?>
    </select>
  </div>
  <div class="form-group">
    <label>Author</label>
    <input type="text" name="author" class="form-control" placeholder="Enter Author Name" value="<?php echo $post['author']; ?>">
  </div>
  <div class="form-group">
    <label>Tags</label>
    <input type="text" name="tags" class="form-control" placeholder="Enter Tags" value="<?php echo $post['tags']; ?>">
  </div>
  <div class="form-group">
    <button type="submit" class="btn btn-default">Submit</button>
    <a href="index.php" class="btn btn-default">Cancel</a>
    <button type="submit" name="delete" class="btn btn-danger">Delete</button>
  </div>
</form>
<?php include 'includes/footer.php'; ?>
