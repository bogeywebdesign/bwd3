	<?php include(TEMPLATEPATH . '/templates/head.php'); ?>
	
	<div class="page">
	<?php while (have_posts()) : the_post(); ?>
		<?php include(TEMPLATEPATH . '/templates/getPostTitle.php'); ?>
		<?php edit_post_link('(edit this)', '<p>', '</p>'); ?>

		<?php the_content('Read the rest of this entry »'); ?>
  <?php endwhile; ?>
	</div>
	<?php include(TEMPLATEPATH . '/templates/postPagination.php'); ?>
 	<?php include(TEMPLATEPATH . '/templates/commenting.php'); ?>
	<?php include(TEMPLATEPATH . '/templates/backToTop.php'); ?>
	
	<?php include(TEMPLATEPATH . '/templates/foot.php'); ?>
