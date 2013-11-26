<?php
// setting up options page
// original code: http://blog.themeforest.net/wordpress/create-an-options-page-for-your-wordpress-theme/
// modified heavily for my themes, but credit where credit is due 

// setting up short name for theme and fields needed for options page
$themename = "BogeyWebDesign 3";
$shortname = "bwd3";

$options = array (
  array("type" => "open"),
  array("name" => "Home Page Intro Header", "desc" => "Intro header for home page (HTML appended on, don't include HTML or you may have formatting issues)", "id" => $shortname."_intro_header", "type" => "text"),
  array("name" => "Home Page Intro Message", "desc" => "HTML Intro message for home page (must include HTML, even if only to wrap it in a &lt;p&gt;&lt;/p&gt;)", "id" => $shortname."_intro_message", "type" => "textarea"),
  array("name" => "Participate in CSS Naked Day?",  "desc" => "Check this box if you would like to participate in CSS Naked Day (http://naked.dustindiaz.com/ - SFW). Site will be CSS naked for one international day - 48 hours.",  "id" => $shortname."_css_naked_day", "type" => "checkbox", "std" => "false"),
  array("name" => "CSS Naked Day Message", "desc" => "HTML Message to show on CSS Naked Day. Shows at top of content block (above intro text).", "id" => $shortname."_css_naked_day_message", "type" => "textarea", "std" => "Default Message:\n\n<p><strong>What happened to the design?</strong></p>\n<p>To know more about why styles are disabled on this website visit the <a href='http://naked.dustindiaz.com'>  Annual CSS Naked Day</a> website for more information.</p>\n\nJust highlight all this text and replace it with what you want if you don't want the default. Put a single space if you want it blank. This content is not wrapped in HTML by the theme, so make sure to use html elements."),
  array("name" => "Custom Home Page?",  "desc" => "Check this box if you would like to enable a custom home page",  "id" => $shortname."_custom_home_page", "type" => "checkbox", "std" => "false"),
  array("name" => "Social Networking area?",  "desc" => "Check this box if you would like a social networking area displayed (does not include other links)",  "id" => $shortname."_social_networking", "type" => "checkbox", "std" => "false"),
  array("name" => "Email", "desc" => "Your email", "id" => $shortname."_email", "type" => "text_toggle"),
  array("name" => "Email HP", "id" => $shortname."_email_hp", "type" => "check_hp"),
  array("name" => "Email SN", "id" => $shortname."_email_sn", "type" => "check_sn"),
  array("name" => "Google Profile", "desc" => "Your Google Profile", "id" => $shortname."_google_profile", "type" => "text_toggle", "std" => "http://www.google.com/profiles/"),
  array("name" => "Google Profile HP", "id" => $shortname."_google_profile_hp", "type" => "check_hp"),
  array("name" => "Google Profile SN", "id" => $shortname."_google_profile_sn", "type" => "check_sn"),
  array("name" => "Twitter", "desc" => "Your Twitter", "id" => $shortname."_twitter", "type" => "text_toggle", "std" => "http://www.twitter.com/"),
  array("name" => "Twitter HP", "id" => $shortname."_twitter_hp", "type" => "check_hp"),
  array("name" => "Twitter SN", "id" => $shortname."_twitter_sn", "type" => "check_sn"),
  array("name" => "FriendFeed", "desc" => "Your FriendFeed", "id" => $shortname."_friendfeed", "type" => "text_toggle", "std" => "http://friendfeed.com/"),
  array("name" => "FriendFeed HP", "id" => $shortname."_friendfeed_hp", "type" => "check_hp"),
  array("name" => "FriendFeed SN", "id" => $shortname."_friendfeed_sn", "type" => "check_sn"),
  array("name" => "Facebook", "desc" => "Your Facebook", "id" => $shortname."_facebook", "type" => "text_toggle", "std" => "http://www.facebook.com/"),
  array("name" => "Facebook HP", "id" => $shortname."_facebook_hp", "type" => "check_hp"),
  array("name" => "Facebook SN", "id" => $shortname."_facebook_sn", "type" => "check_sn"),
  array("name" => "MySpace", "desc" => "Your MySpace", "id" => $shortname."_myspace", "type" => "text_toggle", "std" => "http://www.myspace.com/"),
  array("name" => "MySpace HP", "id" => $shortname."_myspace_hp", "type" => "check_hp"),
  array("name" => "MySpace SN", "id" => $shortname."_myspace_sn", "type" => "check_sn"),
  array("name" => "Delicious", "desc" => "Your Delicious", "id" => $shortname."_delicious", "type" => "text_toggle", "std" => "http://www.delicious.com/"),
  array("name" => "Delicious HP", "id" => $shortname."_delicious_hp", "type" => "check_hp"),
  array("name" => "Delicious SN", "id" => $shortname."_delicious_sn", "type" => "check_sn"),
  array("name" => "Reddit", "desc" => "Your Reddit", "id" => $shortname."_reddit", "type" => "text_toggle", "std" => "http://www.reddit.com/user/"),
  array("name" => "Reddit HP", "id" => $shortname."_reddit_hp", "type" => "check_hp"),
  array("name" => "Reddit SN", "id" => $shortname."_reddit_sn", "type" => "check_sn"),
  array("name" => "StumbleUpon", "desc" => "Your StumbleUpon", "id" => $shortname."_stumbleupon", "type" => "text_toggle", "std" => "http://www.stumbleupon.com/stumbler/"),
  array("name" => "StumbleUpon HP", "id" => $shortname."_stumbleupon_hp", "type" => "check_hp"),
  array("name" => "StumbleUpon SN", "id" => $shortname."_stumbleupon_sn", "type" => "check_sn"),
  array("name" => "Digg", "desc" => "Your Digg", "id" => $shortname."_digg", "type" => "text_toggle", "std" => "http://digg.com/users/"),
  array("name" => "Digg HP", "id" => $shortname."_digg_hp", "type" => "check_hp"),
  array("name" => "Digg SN", "id" => $shortname."_digg_sn", "type" => "check_sn"),
  array("name" => "Flickr", "desc" => "Your Flickr", "id" => $shortname."_flickr", "type" => "text_toggle", "std" => "http://www.flickr.com/photos/"),
  array("name" => "Flickr HP", "id" => $shortname."_flickr_hp", "type" => "check_hp"),
  array("name" => "Flickr SN", "id" => $shortname."_flickr_sn", "type" => "check_sn"),
  array("name" => "Picasa", "desc" => "Your Picasa", "id" => $shortname."_picasa", "type" => "text_toggle", "std" => "http://picasaweb.google.com/"),
  array("name" => "Picasa HP", "id" => $shortname."_picasa_hp", "type" => "check_hp"),
  array("name" => "Picasa SN", "id" => $shortname."_picasa_sn", "type" => "check_sn"),
  array("name" => "YouTube", "desc" => "Your YouTube", "id" => $shortname."_youtube", "type" => "text_toggle", "std" => "http://www.youtube.com/"),
  array("name" => "YouTube HP", "id" => $shortname."_youtube_hp", "type" => "check_hp"),
  array("name" => "YouTube SN", "id" => $shortname."_youtube_sn", "type" => "check_sn"),
  array("name" => "Show extra links?",  "desc" => "Check this box if you would like to show your extra links",  "id" => $shortname."_extra_links", "type" => "checkbox", "std" => "false"),
  array("name" => "Extra Links Title", "desc" => "Replace default text for your extra links on custom home page", "id" => $shortname."_extra_links_title", "type" => "text"),
  array("name" => "Other Link 1", "desc" => "Text to display with link, defaults to full URL", "id" => $shortname."_other_link_1_text", "type" => "link_text"),
  array("name" => "", "desc" => "Full URL", "id" => $shortname."_other_link_1", "type" => "text", "std" => "http://"),
  array("name" => "Other Link 2", "desc" => "Text to display with link, defaults to full URL", "id" => $shortname."_other_link_2_text", "type" => "link_text"),
  array("name" => "", "desc" => "Full URL", "id" => $shortname."_other_link_2", "type" => "text", "std" => "http://"),
  array("name" => "Other Link 3", "desc" => "Text to display with link, defaults to full URL", "id" => $shortname."_other_link_3_text", "type" => "link_text"),
  array("name" => "", "desc" => "Full URL", "id" => $shortname."_other_link_3", "type" => "text", "std" => "http://"),
  array("type" => "close")
);

// adding actual admin page call
function mytheme_add_admin() {
  global $themename, $shortname, $options;

  if ( $_GET['page'] == basename(__FILE__) ) {
    // saving changes
    if ( 'save' == $_REQUEST['action'] ) {
      foreach ($options as $value) {
        update_option( $value['id'], $_REQUEST[ $value['id'] ] ); }

      foreach ($options as $value) {
        if(isset($_REQUEST[ $value['id'] ])) { 
          update_option( $value['id'], $_REQUEST[ $value['id'] ]  ); 
        }
        else {
          delete_option( $value['id'] );
        }
      }

      header("Location: themes.php?page=optionsPage.php&saved=true");
      die;

    } 
    
    // resetting changes
    else if('reset' == $_REQUEST['action'] ) {
      foreach ($options as $value) {
        delete_option( $value['id'] );
      }

      header("Location: themes.php?page=optionsPage.php&reset=true");
      die;
    }
  }

  add_theme_page($themename." Options", "".$themename." Options", 'edit_themes', basename(__FILE__), 'mytheme_admin');
}

// designing admin page
function mytheme_admin() {
  global $themename, $shortname, $options;

  // alert on successful save/reset
  if ( $_REQUEST['saved'] ) echo '<div id="message" class="updated fade"><p><strong>'.$themename.' settings saved.</strong></p></div>';
  if ( $_REQUEST['reset'] ) echo '<div id="message" class="updated fade"><p><strong>'.$themename.' settings reset.</strong></p></div>';
?>
<div class="wrap">
  <h2><?php echo $themename; ?> Settings</h2>

  <form method="post">

  <?php 
  foreach ($options as $value) {
    switch ( $value['type'] ) {

      case "open":
      ?>
        <table width="100%" border="0" style="padding:10px;">
      <?php 
      break;

      case "close":
      ?>
        </table>
      <?php
      break;

      // adding a text field
      case 'text':
      ?>
        <tr>
          <td width="20%" style="padding:10px 0; border-bottom: 1px dotted;"><label><?php echo $value['name']; ?></label></td>
          <td width="80%" style="padding:10px 0; border-bottom: 1px dotted;"><input style="width:600px;" name="<?php echo $value['id']; ?>" id="<?php echo $value['id']; ?>" type="<?php echo $value['type']; ?>" value="<?php if ( get_settings( $value['id'] ) != "") { echo stripslashes(get_settings( $value['id'] )); } else { echo $value['std']; } ?>" />
            <label style="display:block"><?php echo $value['desc']; ?></label>
          </td>
        </tr>
      <?php
      break;

      // adding a text area
      case 'textarea':
      ?>
        <tr>
          <td width="20%" style="padding:10px 0; border-bottom: 1px dotted;"><label><?php echo $value['name']; ?></label></td>
          <td width="80%" style="padding:10px 0; border-bottom: 1px dotted;"><textarea name="<?php echo $value['id']; ?>" style="width:600px; height:200px;" type="<?php echo $value['type']; ?>" cols="" rows=""><?php if ( get_settings( $value['id'] ) != "") { echo stripslashes(get_settings( $value['id'] )); } else { echo $value['std']; } ?></textarea>
            <label style="display:block"><?php echo $value['desc']; ?></label>
          </td>
        </tr>
      <?php
      break;
      
      // adding a check box
      case "checkbox":
      ?>
        <tr>
          <td width="20%" style="padding:10px 0; border-bottom: 1px dotted;">
            <label><?php echo $value['name']; ?></label>
          </td>
          <td width="80%" style="padding:10px 0; border-bottom: 1px dotted;">
            <? if(get_settings($value['id'])){ $checked = "checked=\"checked\""; }else{ $checked = ""; } ?>
            <input type="checkbox" name="<?php echo $value['id']; ?>" id="<?php echo $value['id']; ?>" value="true" <?php echo $checked; ?> />
            <label for="<?php echo $value['id']; ?>"><?php echo $value['desc']; ?></label>
          </td>
        </tr>
    <?php
      break;

      // adding a text field with display toggle checkboxes
      case 'text_toggle':
      ?>
        <tr>
          <td width="20%" style="padding-top:10px"><label><?php echo $value['name']; ?></label></td>
          <td width="80%" style="padding-top:10px"><input style="width:600px;" name="<?php echo $value['id']; ?>" id="<?php echo $value['id']; ?>" type="text" value="<?php if ( get_settings( $value['id'] ) != "") { echo stripslashes(get_settings( $value['id'] )); } else { echo $value['std']; } ?>" />
            <label style="display:block"><?php echo $value['desc']; ?></label></td>
        </tr>
      <?php
      break;
      
      // checkbox for showing items on custom home page
      case "check_hp":
      ?>
        <tr>
          <td width="20%" style="padding:10px 0; border-bottom: 1px dotted;"></td>
          <td width="80%" style="padding:10px 0; border-bottom: 1px dotted;">
            <? if(get_settings($value['id'])){ $checked = "checked=\"checked\""; }else{ $checked = ""; } ?>
            <input type="checkbox" name="<?php echo $value['id']; ?>" id="<?php echo $value['id']; ?>" value="true" <?php echo $checked; ?> />
            <label for="<?php echo $value['id']; ?>">Show <?php echo $value['desc']; ?> on the custom home page?</label><br />
      <?php
      break;
      
      // checkbox for showing items in social networking area
      case "check_sn":
      ?>
            <? if(get_settings($value['id'])){ $checked = "checked=\"checked\""; }else{ $checked = ""; } ?>
            <input type="checkbox" name="<?php echo $value['id']; ?>" id="<?php echo $value['id']; ?>" value="true" <?php echo $checked; ?> />
            <label for="<?php echo $value['id']; ?>">Show <?php echo $value['desc']; ?> in the social networking area?</label>
          </td>
        </tr>
      <?php
      break;
      
      // adding a link text field
      case 'link_text':
      ?>
        <tr>
          <td width="20%" style="padding:10px 0"><label><?php echo $value['name']; ?></label></td>
          <td width="80%" style="padding:10px 0"><input style="width:600px;" name="<?php echo $value['id']; ?>" id="<?php echo $value['id']; ?>" type="text" value="<?php if ( get_settings( $value['id'] ) != "") { echo stripslashes(get_settings( $value['id'] )); } else { echo $value['std']; } ?>" />
            <label style="display:block"><?php echo $value['desc']; ?></label>
          </td>
        </tr>
      <?php
      break;
    }
  }
  ?>
    <p class="submit">
      <input name="save" type="submit" value="Save changes" />
      <input type="hidden" name="action" value="save" />
    </p>
  </form>
  <form method="post">
    <input name="reset" type="submit" value="Reset" />
    <input type="hidden" name="action" value="reset" />
  </form>
</div>
<?php
}

add_action('admin_menu', 'mytheme_add_admin');
?>