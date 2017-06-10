<h3><?php echo $post['title']; ?></h3>
<small class="post-date">Posted On : <?php echo $post['created_at']; ?> </small><br/>
<img class="img-thumbnail" src="<?php echo site_url() . 'application/assets/images/posts/' . $post['post_image']; ?>">
<br/>
<div class="post-body">
    <?php echo $post['body']; ?>
</div>
<?php if ($this->session->userdata('user_id') == $post['user_id']) : ?>
    <a href="/posts/edit/<?php echo $post['slug']; ?>" class="btn btn-default pull-left">Edit</a>
    <?php echo form_open('posts/delete/' . $post['id']); ?>
    <input type="submit" value="Delete" class="btn btn-danger">
<?php endif; ?>
</form>

<hr/>
<h3>Comments</h3>
<?php if ($comments) : ?>
    <?php foreach ($comments as $comment) : ?>
        <div class="well">
            <h5><?php echo $comment['body']; ?> [by <strong><?php echo $comment['name']; ?></strong>]</h5>
        </div>
    <?php endforeach; ?>
<?php else : ?>
    <p>No Comments To Display</p>
<?php endif; ?>

<?php echo validation_errors(); ?>

<?php echo form_open('comments/create/' . $post['id']); ?>
<div class="form-group">
    <label class="control-label">Name</label>
    <input type="text" name="name" placeholder="Add Name" class="form-control">
</div>
<div class="form-group">
    <label class="control-label">Email</label>
    <input type="email" name="email" placeholder="Add Email" class="form-control">
</div>
<div class="form-group">
    <label class="control-label">Body</label>
    <textarea name="body" placeholder="Add Body" class="form-control"></textarea>
</div>
<input type="hidden" name="slug" value="<?= $post['slug'] ?>">
<button type="submit" class="btn btn-primary">Submit</button>
</form>
