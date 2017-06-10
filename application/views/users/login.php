<?php echo validation_errors(); ?>
<?php echo form_open('users/login'); ?>
<div class="row">
    <div class="col-md-4 col-md-offset-4">
        <h2 class="text-center"><?= $title ?></h2>
        <div class="form-group">
            <label>Username</label>
            <input type="text" name="username" class="form-control" placeholder="Username">
        </div>
        <div class="form-group">
            <label>Password</label>
            <input type="password" name="password" class="form-control" placeholder="password">
        </div>
        <button class="btn btn-primary btn-block" type="submit">Login</button>
    </div>
</div>
</form>
