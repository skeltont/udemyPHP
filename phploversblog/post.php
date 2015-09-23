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

<div class="blog-post">
  <h2 class="blog-post-title"><?php echo $post['title']; ?></h2>
  <p class="blog-post-meta"><?php echo formatDate($post['date']); ?> by <a href="#"><?php echo $post['author']; ?></a></p>
  <p><?php echo shortenText($post['body']); ?></p>
  <a class="readmore" href="post.php?id=<?php echo urldecode($post['id']); ?>">Read More</a>
</div>

<?php include 'includes/footer.php'; ?>
