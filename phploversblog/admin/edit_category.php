<?php include 'includes/header.php'; ?>
<form method="post" action="">
  <div class="form-group">
    <label>Name</label>
    <input type="text" name="title" class="form-control" placeholder="Enter Name">
  </div>
  <div class="form-group">
    <button type="submit" name="submit" class="btn btn-default">Submit</button>
    <a href="index.php" class="btn btn-default">Cancel</a>
    <button type="submit" name="delete" class="btn btn-danger">Delete</button>
  </div>
</form>
<?php include 'includes/footer.php'; ?>
