	<?php
	if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('404_sidebar') ) : ?>
		<?php new_widget_cloud(''); ?>
		
		<p><strong>Recent Posts</strong></p>
		<?php query_posts('showposts=10'); ?>
		<ul>
		<?php while (have_posts()) : the_post(); ?>
			<li>
				<a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title(); ?>"><?php the_title(); ?></a>
			</li>
		<?php endwhile; ?>
		</ul>
	<?php endif; ?>