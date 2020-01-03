<h2><?= $title ?></h2>
<p>Let's create a new post today?</p>
    <p>
      <a class="btn btn-success" href="<?php echo site_url('/posts/create');  ?>">Create a Post</a>
    </p>


<div class="list-group">
<?php foreach ($posts as $post) : ?>
  <a href="#" class="list-group-item list-group-item-action flex-column align-items-start" >
    <div class="d-flex w-100 justify-content-between">
      <h5 class="mb-1"><?php echo $post['title'] ?></h5>
      <p class="post-category"><?php echo $post['name'] ?></p>
      <small class="post-date"><?php echo $post['created_at'] ?></small>
    </div>
    <div class="row">
      <div class="offset-md-2 col-md-3">
        <img src="<?php echo site_url(); ?>assets/images/posts/<?php echo $post['post_image']; ?>" class="card-img-top" alt="Any Name">
      </div>
    </div>
        <p class="mb-6">
        	<?php echo word_limiter($post['body'], 30); ?>
        </p>	
        </a>
        <p>
      		<a class="btn btn-secondary" href="<?php echo site_url('/posts/' .$post['slug']);  ?>">Read More</a>
        </p>
<?php endforeach; ?>
</div>



