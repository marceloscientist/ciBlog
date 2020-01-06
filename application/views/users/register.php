<br><br>

<div class="row">
    <div class="col-md-4 offset-md-4">


<h2><?= $title; ?></h2>
<?php echo validation_errors(); ?>

<?php echo form_open('users/register'); ?>
    <div class="form-group">
        <label>Name</label>
        <input type="text" name="name" placeholder="Add name" class="form-control">
    </div>
    <div class="form-group">
        <label>Zipcode</label>
        <input type="text" name="zipcode" placeholder="Add Zipcode" class="form-control">
    </div>
    <div class="form-group">
        <label>Email</label>
        <input type="email" name="email" placeholder="Add Email" class="form-control">
    </div>
    <div class="form-group">
        <label>Username</label>
        <input type="text" name="username" placeholder="Add Username" class="form-control">
    </div>
    <div class="form-group">
        <label>Password</label>
        <input type="password" name="password" placeholder="Add Password" class="form-control">
    </div>
    <div class="form-group">
        <label>Confirm Password</label>
        <input type="password" name="password2" placeholder="Add Confirm Password" class="form-control">
    </div>
    <button type="submit" class="btn btn-primary btn-block">Submit</button>

<?php echo form_close(); ?>

</div>
</div> 