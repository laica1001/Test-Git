<h2><?php echo $post['title']; ?></h2>
<small class="post-date">Posted on: <?php echo $post['created_as']; ?></small><br>
<img src="<?php echo site_url(); ?>assets/images/posts/<?php echo $post['post_image']; ?>">
		
<div class="post-body">
	<?php echo $post['body']; ?>
</div>

<hr>
<a class="btn btn-default btn-sm pull-left" href="edit/<?php echo $post['slug']; ?>">Edit</a>

<?php echo form_open('posts/delete/'.$post['id']); ?>
		<input type="submit" value="Delete"class="btn btn-danger btn-sm">
</form>
