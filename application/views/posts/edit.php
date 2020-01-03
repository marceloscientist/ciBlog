<h2><?= $title ?></h2>
<p>How about creating a new Post...</p>

<?php echo validation_errors(); ?>

<?php echo form_open('posts/update'); ?>
  <input type="hidden" name="id" 
  value="<?php echo $post['id']; ?>">
  <div class="form-group">
    <label>Title</label>
    <input type="text" class="form-control" name="title" 
      placeholder="Add Title" value="<?php echo $post['title'] ?>">
  </div>


  <!-- <div class="row">
      <div class="offset-md-2 col-md-3">
        <img src="<?php echo site_url(); ?>assets/images/posts/<?php echo $post['post_image']; ?>" class="card-img-top" alt="Any Name">
      </div>
    </div>
-->


  <div class="form-group">
    <label>Body</label>
    <textarea id="editor1" name="body" class="form-control" placeholder="Add Body">
      <?php echo $post['body'] ?>
    </textarea>
  </div>
  <div class="form-group">
    <label>Category</label>
      <select name="category_id" class="form-control">
        <?php foreach ($categories as $category): ?>
          <option value="<?php echo $category['id']; ?>">
            <?php echo $category['name']; ?>
          </option>
        <?php endforeach; ?>
      </select>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>