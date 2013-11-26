<ul id="socialNetworking">
<?php 
  if($bwd3_email != "" && $bwd3_email_hp == "true"){ 
    echo '<li><img src="' . get_bloginfo('template_url') . '/images/email_16.png" /> <a href="mailto:' . $bwd3_email . '">Email me</a></li>'; 
  }
  if($bwd3_google_profile != "" && $bwd3_google_profile != "http://www.google.com/profiles/" && $bwd3_google_profile_hp == "true"){ 
    echo '<li><img src="' . get_bloginfo('template_url') . '/images/google_16.png" /> <a href="' . $bwd3_google_profile . '">Google Profile</a></li>'; 
  }
  if($bwd3_twitter != "" && $bwd3_twitter != "http://www.twitter.com/" && $bwd3_twitter_hp == "true"){
    echo '<li><img src="' . get_bloginfo('template_url') . '/images/twitter_16.png" /> <a href="' . $bwd3_twitter . '">Twitter</a></li>'; 
  }
  if($bwd3_friendfeed != "" && $bwd3_friendfeed != "http://friendfeed.com/" && $bwd3_friendfeed_hp == "true"){
    echo '<li><img src="' . get_bloginfo('template_url') . '/images/friendfeed_16.png" /> <a href="' . $bwd3_friendfeed . '">FriendFeed</a></li>'; 
  }
  if($bwd3_facebook != "" && $bwd3_facebook != "http://www.facebook.com/" && $bwd3_facebook_hp == "true"){
    echo '<li><img src="' . get_bloginfo('template_url') . '/images/facebook_16.png" /> <a href="' . $bwd3_facebook . '">Facebook</a></li>'; 
  }
  if($bwd3_myspace != "" && $bwd3_myspace != "http://www.myspace.com/" && $bwd3_myspace_hp == "true"){
    echo '<li><img src="' . get_bloginfo('template_url') . '/images/myspace_16.png" /> <a href="' . $bwd3_myspace . '">MySpace</a></li>'; 
  }
  if($bwd3_delicious != "" && $bwd3_delicious != "http://www.delicious.com/" && $bwd3_delicious_hp == "true"){
    echo '<li><img src="' . get_bloginfo('template_url') . '/images/delicious_16.png" /> <a href="' . $bwd3_delicious . '">Delicious</a></li>'; 
  }
  if($bwd3_reddit != "" && $bwd3_reddit != "http://www.reddit.com/user/" && $bwd3_reddit_hp == "true"){
    echo '<li><img src="' . get_bloginfo('template_url') . '/images/reddit_16.png" /> <a href="' . $bwd3_reddit . '">Reddit</a></li>'; 
  }
  if($bwd3_stumbleupon != "" && $bwd3_stumbleupon != "http://www.stumbleupon.com/stumbler/" && $bwd3_stumbleupon_hp == "true"){
    echo '<li><img src="' . get_bloginfo('template_url') . '/images/stumbleupon_16.png" /> <a href="' . $bwd3_stumbleupon . '">Stumbleupon</a></li>'; 
  }
  if($bwd3_digg != "" && $bwd3_digg != "http://digg.com/users/" && $bwd3_digg_hp == "true"){
    echo '<li><img src="' . get_bloginfo('template_url') . '/images/digg_16.png" /> <a href="' . $bwd3_digg . '">Digg</a></li>'; 
  }
  if($bwd3_flickr != "" && $bwd3_flickr != "http://www.flickr.com/photos/" && $bwd3_flickr_hp == "true"){
    echo '<li><img src="' . get_bloginfo('template_url') . '/images/flickr_16.png" /> <a href="' . $bwd3_flickr . '">Flickr</a></li>'; 
  }
  if($bwd3_picasa != "" && $bwd3_picasa != "http://picasaweb.google.com/" && $bwd3_picasa_hp == "true"){
    echo '<li><img src="' . get_bloginfo('template_url') . '/images/picasa_16.png" /> <a href="' . $bwd3_picasa . '">Picasa</a></li>'; 
  }
  if($bwd3_youtube != "" && $bwd3_youtube != "http://www.youtube.com/" && $bwd3_youtube_hp == "true"){
    echo '<li><img src="' . get_bloginfo('template_url') . '/images/youtube_16.png" /> <a href="' . $bwd3_youtube . '">Youtube</a></li>'; 
  }
?>
  <li><img src="<?php bloginfo('template_url') ?>/images/article-16.gif" /> <a href="page/1">Read my blog</a></li>
</ul>
