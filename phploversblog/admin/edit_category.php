<?php include 'includes/header.php'; ?>
<?php
  $id = $_GET['id'];
  // Create DB object
  $db = new Database();

  // Create query & run SELECT query for categories
  $query = "SELECT * FROM `categories`
            WHERE id = $id";
  $category = $db->select($query)->fetch_assoc();
?>
<form method="post" action="">
  <div class="form-group">
    <label>Name</label>
    <input type="text" name="title" class="form-control" placeholder="Enter Name" value="<?php echo $category['name']; ?>"/>
  </div>
  <div class="form-group">
    <button type="submit" name="submit" class="btn btn-default">Submit</button>
    <a href="index.php" class="btn btn-default">Cancel</a>
    <button type="submit" name="delete" class="btn btn-danger">Delete</button>
  </div>
</form>
<?php include 'includes/footer.php'; ?>
