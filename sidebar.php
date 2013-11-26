<?
// have to redeclare variables for sidebar to see them...
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

	<div id="sidebar">
	<?php
	  // if you want to show social networking area AND you want a custom home page and are not on it OR you don't want a custom home page
	  // redundant to show social networking area on the custom home page since it's part of the page but not reduntant to show on normal blog home page (if custom home page not selected to show)
	  if($bwd3_social_networking == "true" && ((($bwd3_custom_home_page == "true") && ($paged > 0) && is_home()) || ($bwd3_custom_home_page != "true") || !is_home())){ include(TEMPLATEPATH . '/templates/socialNetworking.php'); }

		if(is_404() || !have_posts()) include(TEMPLATEPATH . '/templates/404sidebar.php');
		elseif(is_page()) include(TEMPLATEPATH . '/templates/pageSidebar.php');
		// if you want a custom home page AND you're on the front page show the associated sidebar.  Otherwise you're on page 2, show normal blog sidebar
		elseif(($bwd3_custom_home_page == "true") && ($paged < 1) && is_home()) include(TEMPLATEPATH . '/templates/customHPSidebar.php');
		else include(TEMPLATEPATH . '/templates/blogSidebar.php');
	?>
	</div>
