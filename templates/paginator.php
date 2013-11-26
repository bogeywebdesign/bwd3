	<?php if(function_exists('wp_pagenavi')) { wp_pagenavi(); } else { ?>
		<p class="paginate">
		  <span><?php next_posts_link('&lt;&lt; Previous Entries', '0') ?> </span>
		  <span><?php previous_posts_link('Next Entries &gt;&gt;') ?></span>
		</p>
	<?php } ?>