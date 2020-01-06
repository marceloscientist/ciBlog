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
<hr>
<h3>Add Comments</h3>
<?php if($comments) : ?>
  <ul class="list-group" >
<?php foreach ($comments as $comment) : ?>
  <li class="list-group-item">  
    <div class="row">  
      <div class="col-xs-2 col-md-1">
        <img src="http://placehold.it/80" class="img-circle img-responsive" alt=""></div>
      <div class="col-xs-10 col-md-11">
        <div>
          <div class="mic-info"> By: <a href="#"><?php echo $comment['name']; ?></a> on <?php echo $comment['created_at']; ?></div>
        </div>
        <div class="comment-text">
          <?php echo $comment['body']; ?>
        </div>  
      </div>
    </div> 
  </li>
<?php endforeach ?>
</ul>


<?php else : ?> 
  <p>NO COMMENTS YET!</p>
<?php endif; ?> 

<hr>
<h3>Add Comments</h3>
<?php echo validation_errors(); ?>
<?php echo form_open('comments/create/'.$post['id']); ?>
  <div class="form-group">
      <label>Name</label>
      <input type="text" name="name" class="form-control">    
  </div>
  <div class="form-group">
    <label>Email</label>
    <input type="email" name="email" class="form-control">    
  </div>
  <div class="form-group">
    <label>Comment</label>
    <textarea type="text" name="body" class="form-control"></textarea>
  </div>
  <input type="hidden" name="slug" value="<?php echo $post['slug']; ?>">
  <button class="btn btn-primary " type="submit">Submit</button>
</form>