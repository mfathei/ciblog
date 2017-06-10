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
    <textarea id="editor1" class="form-control" name="body"
              placeholder="Add body"><?php echo $post['body']; ?></textarea>
</div>
<div class="form-group">
    <label for="selectcat">Category</label>
    <select id="selectcat" name="category_id">
        <?php foreach ($categories as $category) : ?>
            <option value="<?php echo $category['id']; ?>" <?php if ($post['category_id'] === $category['id']){ echo "selected='selected'" ;} ?> ><?php echo $category['name']; ?></option>
        <?php endforeach; ?>
    </select>
</div>
<button type="submit" class="btn btn-default">Submit</button>
</form>