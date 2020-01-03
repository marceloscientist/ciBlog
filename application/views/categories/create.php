<h2><?= $title ?></h2>
<p>How about creating a new Category...</p>

<?php echo validation_errors(); ?>
<?php echo form_open_multipart('categories/create') ?>
    <div class="form-group">
        <input type="text" class="form-control" placeholder="Add name" name="name">
    </div>
    <button class="btn btn-default" type="submit">Submit</button>
</form>