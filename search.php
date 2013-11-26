	<?php include(TEMPLATEPATH . '/templates/head.php'); ?>

	<?php if (have_posts()) : ?>
	  <?php $post = $posts[0]; // Hack. Set $post so that the_date() works. ?>

	  <p><strong>Search Results For '<?php echo $s; ?>'</strong></p>
  	
  	<?php if(is_tag() && tag_description()) { echo tag_description(); } ?>
  	<?php if(is_category() && category_description()) { echo category_description(); } ?>

  	<?php $postnumber = '1' ?>

  	<?php while (have_posts()) : the_post(); ?>
  	<div class="post<?php if($postnumber == '1') echo " post" . $postnumber; $postnumber++; ?>" id="post-<?php the_ID(); ?>">
  		<?php include(TEMPLATEPATH . '/templates/titleBlock.php'); ?>

  		<?php the_content('Read the rest of this entry »'); ?>
			
			<p><?php the_tags( 'Tags:</span> ', ', ', ''); ?></p>
		
  		<?php wp_link_pages(array('before' => '<p><strong>Pages:</strong> ', 'after' => '</p>', 'next_or_number' => 'number')); ?>

  		<p class="comments"><?php comments_popup_link('No Comments', '1 Comment', '% Comments'); ?></p>
  	</div>
    <?php endwhile; ?>

	<?php else : ?>
		<?php include(TEMPLATEPATH . '/templates/postNotFound.php'); ?>
	<?php endif; ?>
	
	<?php include(TEMPLATEPATH . '/templates/paginator.php'); ?>

  <?php include(TEMPLATEPATH . '/templates/backToTop.php'); ?>
	
	<?php include(TEMPLATEPATH . '/templates/foot.php'); ?>
