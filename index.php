 
			<?php
		if ( have_posts() ) {

			// Load posts loop.
			while ( have_posts() ) {
				the_post();
				
			}

			// Previous/next page navigation.
			twentynineteen_the_posts_navigation();

		} else {

			// If no content, include the "No posts found" template.
			echo "No post";

		}
		?>