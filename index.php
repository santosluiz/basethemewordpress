<?php

	get_header();


	if(have_posts()){
		while(have_posts()){
			the_post();
?>

	<header>
		<h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
		<small><?php the_time('F jS, Y'); ?> by <?php the_author_posts_link(); ?></small>
		<p class="postsmetadata">Posted in <?php the_category(', '); ?></p>
		<h3><?php the_excerpt(); ?><span><a href="<?php the_permalink(); ?>">read more...</a></h3>

	</header>

<?php
	
		}


		//PAGINATION
		
		global $wp_query;

		$big = 99; // need an unlikely integer

		echo paginate_links( array(
			'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
			'format' => '?paged=%#%',
			'current' => max( 1, get_query_var('paged') ),
			'total' => $wp_query->max_num_pages
		) );
		
	
	}else{

		echo "<h1>Nenhum Post Encontrado</h1>";
	}

	get_footer();
?>