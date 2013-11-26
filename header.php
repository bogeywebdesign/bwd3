<?
// have to redeclare variables for header to see them...
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

<div id="header"><div>
	<?php include (TEMPLATEPATH . '/searchform.php'); ?>
	
	<p><strong><?php bloginfo('title'); ?></strong></p>
	<p><?php bloginfo('description'); ?></p>
	
	<ul>
		<li id="home" <?php if(is_home()){echo 'class="current_page_item"';}?>><a href="<?php echo get_option('home'); ?>/" title="Home">Home</a></li>
		<?php if ($bwd3_custom_home_page == "true") { ?><li><a href="<?php bloginfo('url'); ?>/page/1">Blog</a></li><?php }?>
  	<?php wp_list_pages('title_li=&depth=1&sort_column=menu_order');?>
	</ul>
</div></div>
