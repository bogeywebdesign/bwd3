		<?php 
		  // if you want to show extra links on the custom home page AND at least one of them contains something
		  // title defaults to "My Links" if you don't override
		  // link text defaults to URL if you don't override
		  if(($bwd3_extra_links == "true") && (($bwd3_other_link_1 != "" && $bwd3_other_link_1 != "http://") || ($bwd3_other_link_2 != "" && $bwd3_other_link_2 != "http://") || ($bwd3_other_link_3 != "" && $bwd3_other_link_3 != "http://"))) { ?>
		  <p><strong><?php if ($bwd3_extra_links_title) {echo $bwd3_extra_links_title;} else { ?>My Links<?php } ?></strong></p>
		  
			<ul>
			 <?php if ($bwd3_other_link_1 != "" && $bwd3_other_link_1 != "http://") { ?>
			   <li><a href="<?php echo $bwd3_other_link_1 ?>"><?php if($bwd3_other_link_1_text) {echo $bwd3_other_link_1_text;} else {echo $bwd3_other_link_1;} ?></li>
			 <?php } ?>
			 <?php if ($bwd3_other_link_2 != "" && $bwd3_other_link_2 != "http://") { ?>
			   <li><a href="<?php echo $bwd3_other_link_2 ?>"><?php if($bwd3_other_link_2_text) {echo $bwd3_other_link_2_text;} else {echo $bwd3_other_link_2;} ?></li>
			 <?php } ?>
			 <?php if ($bwd3_other_link_3 != "" && $bwd3_other_link_3 != "http://") { ?>
			   <li><a href="<?php echo $bwd3_other_link_3 ?>"><?php if($bwd3_other_link_3_text) {echo $bwd3_other_link_3_text;} else {echo $bwd3_other_link_3;} ?></li>
			 <?php } ?>
			</ul>
		<?php } ?>
    
    <?php
			if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('custom_hp_sidebar') ) : ?>
			<?php new_widget_cloud(''); ?>
		<?php endif; ?>