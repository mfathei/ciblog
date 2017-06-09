
<h2><?= $title ?></h2>

<?php foreach($posts as $post) : ?>
    <h3><?php echo $post['title']; ?></h3>
    <small class="post-date">Posted On : <?php echo $post['created_at']; ?></small><br/>
    <?php echo $post['body']; ?>
    <br/><br/>
    <a class="btn btn-default" href="<?php echo site_url('/posts/'.$post['slug']); ?>">Read More</a>
<?php endforeach; ?>
