	<form id="searchform" action="<?php bloginfo('url'); ?>/" method="get">
  	<fieldset>
  		<input type="text" value="<?php the_search_query(); ?>" name="s" id="s" />
		
  		<input class="submit" type="submit" id="searchsubmit" value="Search" />
  	</fieldset>
	</form>
