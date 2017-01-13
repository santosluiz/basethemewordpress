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
		<h3><?php the_content(); ?><span></h3>
		<?php comments_template(); ?>

	</header>

<?php
	
		}
	
	}else{

		echo "<h1>Nenhum Post Encontrado</h1>";
	}

	get_footer();
?>