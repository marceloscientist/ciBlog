<h2><?= $title ?></h2>
<?php echo validation_errors(); ?>

<?php echo form_open('users/register'); ?>
    <div class="form-group">
        <label>Name</label>
        <input type="text" name="name" placeholder="name" id="" class="form-control">
    </div>
    <div class="form-group">
        <label>Zipcode</label>
        <input type="text" name="zipcode" placeholder="Zipcode" id="" class="form-control">
    </div>
    <div class="form-group">
        <label>Email</label>
        <input type="email" name="email" placeholder="Email" id="" class="form-control">
    </div>
    <div class="form-group">
        <label>Username</label>
        <input type="text" name="username" placeholder="Username" id="" class="form-control">
    </div>
    <div class="form-group">
        <label>Password</label>
        <input type="password" name="password" placeholder="Password" id="" class="form-control">
    </div>
    <div class="form-group">
        <label>Confirm Password</label>
        <input type="password" name="password2" placeholder="Confirm Password" id="" class="form-control">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>

<?php echo form_close(); ?>