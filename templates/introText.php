	  <?php // if you're on the front page and either header or message is set show them
	  if(is_home() && ($bwd3_intro_header || $bwd3_intro_message) && ($paged < 1)) { ?>
	  <div id="introText">
	    <?php if($bwd3_intro_header) {
        if ($bwd3_custom_home_page == "true") echo "<h1>" . $bwd3_intro_header . "</h1>";  
        else echo "<p><strong>" . $bwd3_intro_header . "</strong></p>"; 
	    }?>
	    <?php if($bwd3_intro_message) { echo $bwd3_intro_message; } ?>
	  </div>
	  <?php } ?>