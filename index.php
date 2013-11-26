<?
global $options;

foreach ($options as $value) {
  if (get_settings( $value['id'] ) === FALSE) { 
    $$value['id'] = $value['std']; 
  }
  else { 
    $$value['id'] = stripslashes(get_settings( $value['id'] )); 
  }
}
?>
<?php echo $s; ?>
	<?php include(TEMPLATEPATH . '/templates/head.php'); ?>
  
  <?php include(TEMPLATEPATH . '/templates/cssNakedDayMessage.php'); ?>
  <?php include(TEMPLATEPATH . '/templates/introText.php'); ?>
  
  <?php if (($bwd3_custom_home_page == "true") && ($paged < 1) && !is_search()) : ?>
    <?php include(TEMPLATEPATH . '/templates/customHomePage.php'); ?>
  <?php else : ?>
  	<?php if (have_posts()) : ?>
  		<?php $postnumber = '1' ?>

  		<?php while (have_posts()) : the_post(); ?>
  		<div class="post<?php if($postnumber == '1') echo " post" . $postnumber; $postnumber++; ?><?php sticky_class(); ?> " id="post-<?php the_ID(); ?>">
  			<?php include(TEMPLATEPATH . '/templates/titleBlock.php'); ?>

  			<?php the_content('Read the rest of this entry »'); ?>
			
  			<?php include(TEMPLATEPATH . '/templates/postPagination.php'); ?>
			
  			<p><?php the_tags( 'Tags:</span> ', ', ', ''); ?></p>
  		</div>
		
  		<p class="comments"><?php comments_popup_link(); ?></p>
    	<?php endwhile; ?>
	
  		<?php include(TEMPLATEPATH . '/templates/backToTop.php'); ?>
  	<?php else : ?>
  		<?php include(TEMPLATEPATH . '/templates/postNotFound.php'); ?>
  	<?php endif; ?>
	
  	<?php include(TEMPLATEPATH . '/templates/paginator.php'); ?>
  <?php endif; ?>
	
	<?php include(TEMPLATEPATH . '/templates/foot.php'); ?>