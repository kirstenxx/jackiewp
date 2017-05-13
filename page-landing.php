<?php

/*
	Template Name: Landing Page
*/

get_header(); ?>

<?php

if( have_posts() ):

	while( have_posts() ): the_post(); ?>


			<?php the_content(); ?>

			<hr>

		<?php endwhile;

	endif;

	?>


<?php get_footer(); ?>
