		<?php
			if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('blog_sidebar') ) : ?>
		  <?php
        global $id;
        $children = wp_list_pages("title_li=&child_of=$id&show_date=modified
        &date_format=$date_format&echo=0");
        if ($children) :
      ?>
      <p><strong><?php wp_title('', true, 'right'); ?></strong></p>
      <ul>
        <? echo $children ?>
      </ul>
      <?php endif; ?>

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
		
			<?php include (TEMPLATEPATH . '/templates/links.php'); ?>
		
			<?php include (TEMPLATEPATH . '/templates/categories.php'); ?>
	
			<?php if (function_exists('src_simple_recent_comments')) { ?>
				<p><strong>Recent comments</strong></p>
	
				<?php src_simple_recent_comments(4,60,'', ''); ?>
			<?php } ?>

			<p><strong>Monthly Archives</strong></p>
			<ul>
				<?php wp_get_archives('type=monthly'); ?>
			</ul>
		<?php endif; ?>