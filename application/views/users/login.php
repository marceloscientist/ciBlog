<br><br>
<h1 class="text-center"><?php echo $title; ?></h1>
<?php echo validation_errors(); ?>

<div class="row">
    <div class="col-md-4 offset-md-4">
      <?php echo form_open('users/login'); ?>
        <div class="form-group">
            <input type="text" name="username" placeholder="Username" class="form-control" required autofocus>
            <input type="password" name="password" placeholder="Password" class="form-control" required autofocus>
            <button type="submit" class="btn btn-primary btn-block">Submit</button>
        </div>
      <?php form_close(); ?>
    </div>
</div>

