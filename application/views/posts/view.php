<h3><?php echo $post['title']; ?></h3>
<small class="post-date">Posted On : <?php echo $post['created_at']; ?></small><br/>
<div class="post-body">
    <?php echo $post['body']; ?>
</div>
<a href="/posts/edit/<?php echo $post['slug']; ?>" class="btn btn-default pull-left">Edit</a>
<?php echo form_open('posts/delete/'.$post['id']); ?>
    <input type="submit" value="Delete" class="btn btn-danger">

</form>