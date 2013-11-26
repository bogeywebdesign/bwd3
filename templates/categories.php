			<?php
			  if($empty == true) $catList = wp_list_categories('title_li=0&hierarchical=0&order=ASC&echo=0'); 
			  else $catList = wp_list_categories('title_li=0&hierarchical=1&order=ASC&echo=0'); 
			
			if($catList) { ?>
			<p><strong>Categories</strong></p>
			<ul>
				<?php echo $catList; ?>
			</ul>
			<?php } ?>