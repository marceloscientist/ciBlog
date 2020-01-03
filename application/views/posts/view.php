<h2><?php echo $post['title']; ?></h2>
<small class="post-date">Posted on: 
	<?php echo $post['created_at']; ?>
</small>

  <div class="row">
      <div class="offset-md-2 col-md-3">
        <img src="<?php echo site_url(); ?>assets/images/posts/<?php echo $post['post_image']; ?>" class="card-img-top" alt="Any Name">
      </div>
    </div>

    
<div class="post-body">
	<?php echo $post['body']; ?>
</div>

<hr>
<a class="btn btn-success pull-left" href="edit/<?php echo $post['slug']; ?>">Edit</a>
<?php echo form_open('posts/delete/'.$post['id']); ?>
	<input type="submit" class="btn btn-danger" value="delete">
</form>
