<?php
remove_action( 'wp_head', 'wp_generator' );

if(function_exists('register_sidebar')){
		function replace_widgets() {
			unregister_sidebar_widget('tag_cloud');
		}
		
		add_action('widgets_init','replace_widgets');
		
		register_sidebar(array(
		'id' => 'blog_sidebar',
		'name' => 'Blog Sidebar',
		'before_widget' => '',
		'after_widget' => '',
		'before_title' => '<p><strong>',
		'after_title' => '</strong></p>'));
		
		register_sidebar(array(
		'id' => 'custom_hp_sidebar',
		'name' => 'Custom Home Page Sidebar',
		'before_widget' => '',
		'after_widget' => '',
		'before_title' => '<p><strong>',
		'after_title' => '</strong></p>'));
		
		register_sidebar(array(
		'id' => 'page_sidebar',
		'name' => 'Page Sidebar',
		'before_widget' => '',
		'after_widget' => '',
		'before_title' => '<p><strong>',
		'after_title' => '</strong></p>'));
		
		register_sidebar(array(
		'id' => '404_sidebar',
		'name' => '404 Sidebar',
		'before_widget' => '',
		'after_widget' => '',
		'before_title' => '<p><strong>',
		'after_title' => '</strong></p>'));
}

// make the tag cloud easier to style
function new_widget_cloud() {
	global $wpdb, $post;
	$options = get_option('widget_tag_cloud');
	$title = empty($options['title']) ? __('Popular Tags') : apply_filters('widget_title', $options['title']);
	
	if(function_exists('wp_tag_cloud')){
		echo "<p><strong>" . $title . "</strong></p>
		<p id=\"tagCloud\">";
			wp_tag_cloud("smallest=1&largest=2.4&unit=em&number=25");
		echo "</p>";
	}
}

// keep the option to change the title for tag cloud
function new_widget_cloud_control() {
	$options = $newoptions = get_option('widget_tag_cloud');

	if ( isset($_POST['tag-cloud-submit']) ) {
		$newoptions['title'] = strip_tags(stripslashes($_POST['tag-cloud-title']));
	}

	if ( $options != $newoptions ) {
		$options = $newoptions;
		update_option('widget_tag_cloud', $options);
	}

	$title = attribute_escape( $options['title'] );
?>
	<p><label for="tag-cloud-title">
	<?php _e('Title:') ?> <input type="text" class="widefat" id="tag-cloud-title" name="tag-cloud-title" value="<?php echo $title ?>" /></label>
	</p>
	<input type="hidden" name="tag-cloud-submit" id="tag-cloud-submit" value="1" />
<?php
}

// get the copyright range
function copyright() {
  global $wpdb;

  $posts = $wpdb->get_results("SELECT YEAR(post_date_gmt) AS year FROM $wpdb->posts WHERE post_date_gmt > 1970 ORDER BY post_date_gmt ASC");
  $first = $posts[0]->year;

  $copyright = __('&copy; Copyright ') . $first;
  
  if($first != date('Y')) {
    $copyright .= ' &ndash; ' . date('Y');
  }

  return $copyright;
}

// check if it's CSS Naked Day - http://naked.dustindiaz.com/ (SFW)
function is_naked_day() {
	$nd_stime = gmmktime(-12, 0, 0, 4, 9); // Start of April 9 on GMT+12
	$nd_etime = gmmktime(36, 0, 0, 4, 9);  // End of April 9 on GMT-12
	$nd_ntime = time(); // Time now

	if ($nd_ntime >= $nd_stime && $nd_ntime <= $nd_etime) return true;
	else return false;
}

$widget_ops = array('classname' => 'new_widget_cloud', 'description' => __( "Tag Cloud") );
wp_register_sidebar_widget('new_widget_cloud', __('Tag Cloud'), 'new_widget_cloud', $widget_ops);
wp_register_widget_control('new_widget_cloud', __('Tag Cloud'), 'new_widget_cloud_control' );

// including options page for home page intro text and custom home page setup
include(TEMPLATEPATH . '/functions/optionsPage.php');
?>