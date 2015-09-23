<?php include 'includes/header.php'; ?>
<?php
  // Create DB object
  $db = new Database();

  if (isset($_GET['category'])) {
    $category = $_GET['category'];
    
    // Create query & run SELECT query for posts with category
    $query = "SELECT * FROM `posts` WHERE category = '$category'";
  } else {
    // Create query & run SELECT query for posts
    $query = "SELECT * FROM `posts`";
  }

  $posts = $db->select($query);

  // Create query & run SELECT query for categories
  $query = "SELECT * FROM `categories`";
  $categories = $db->select($query);
?>

<?php if($posts) : ?>
  <?php while($row = $posts->fetch_assoc()) : ?>
    <div class="blog-post">
      <h2 class="blog-post-title"><?php echo $row['title']; ?></h2>
      <p class="blog-post-meta"><?php echo formatDate($row['date']); ?> by <a href="#"><?php echo $row['author']; ?></a></p>
      <p><?php echo shortenText($row['body']); ?></p>
      <a class="readmore" href="post.php?id=<?php echo urldecode($row['id']); ?>">Read More</a>
    </div>
  <?php endwhile; ?>
<?php else : ?>
  <p>There are no posts yet.</p>
<?php endif; ?>
<?php include 'includes/footer.php'; ?>
