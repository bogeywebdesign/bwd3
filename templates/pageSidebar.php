	<?php $children = wp_list_pages('title_li=&child_of='.$post->ID.'&echo=0'); ?>
	
	<?php if ($children){ ?>
	  <p><strong><?php wp_title('', true, 'right'); ?></strong></p>
	  
	  <ul>
	    <?php echo $children; ?>
	  </ul>
	<?php } ?>
	
	<?php
	if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('page_sidebar') ) : ?>
		<?php new_widget_cloud(''); ?>
	<?php endif; ?>