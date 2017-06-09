<h2><?= $title ?></h2>

<?php echo validation_errors(); ?>

<?php echo form_open('posts/update'); ?>
<input type="hidden" id="id" name="id" value="<?php echo $post['id']; ?>">
<div class="form-group">
    <label>Title</label>
    <input type="text" value="<?php echo $post['title']; ?>" class="form-control" name="title" placeholder="Add Title">
</div>
<div class="form-group">
    <label>Body</label>
    <textarea id="editor1" class="form-control" name="body" placeholder="Add body"><?php echo $post['body']; ?></textarea>
</div>
<button type="submit" class="btn btn-default">Submit</button>
</form>