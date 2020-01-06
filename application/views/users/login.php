<br><br>

<div class="row">
    <div class="col-md-4 offset-md-4">
<?php form_open('users/login'); ?>
        <h1 class="text-center"><?php echo $title; ?></h1>
        <div class="form-group">
            <input type="text" name="username" placeholder="Username" class="form-control" required autofocus>
            <input type="password" name="password" placeholder="Password" class="form-control" required autofocus>
            <button type="submit" class="btn btn-primary btn-block">Submit</button>
        </div>
    </div>
</div>

<?php form_close(); ?>
</div>
</div>
