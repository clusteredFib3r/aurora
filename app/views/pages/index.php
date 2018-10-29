<?php require APPROOT . '/views/inc/header.php'; ?>
<h1><?= $data['title']; ?></h1>
<p>
  This is the homepage. <br>
  <h2>Here are the latest posts</h2>
  <ul>
    <?php foreach( $data['posts'] as $post ) : ?>
      <li><?= $post->title; ?></li>
    <?php endforeach; ?>
  </ul>
</p>
<?php require APPROOT . '/views/inc/footer.php'; ?>
