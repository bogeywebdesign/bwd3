			<?php $links = wp_list_bookmarks('exclude_category=&category_before=&category_after=&title_before=<p><strong>&title_after=</strong></p>&echo=0');
			
			if($links) { ?>
				<?php echo $links; ?>
			<?php } ?>