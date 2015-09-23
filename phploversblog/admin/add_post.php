<?php include 'includes/header.php'; ?>
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
      <option value="news">News</option>
      <option value="events">Events</option>
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
