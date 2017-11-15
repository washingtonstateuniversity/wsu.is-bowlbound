<?php
/**
 * Template Name: Builder Template
 */

get_header();
?>

<main id="wsuwp-main" class="spine-blank-template">

	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

		<div id="page-<?php the_ID(); ?>" <?php post_class(); ?>>
			<?php

			// Load up the 2017 hero stuff for pages with the 2017 category.
			if ( has_category( '2017', get_the_ID() ) ) {
				get_template_part( 'parts/hero' );
			}

			/**
			 * `the_content` is fired on builder template pages while it is saved
			 * rather than while it is output in order for some advanced tags to
			 * survive the process and to avoid autop issues.
			 */
			remove_filter( 'the_content', 'wpautop', 10 );
			add_filter( 'wsu_content_syndicate_host_data', 'spine_filter_local_content_syndicate_item', 10, 3 );
			the_content();
			remove_filter( 'wsu_content_syndicate_host_data', 'spine_filter_local_content_syndicate_item', 10 );
			add_filter( 'the_content', 'wpautop', 10 );

			?>
		</div><!-- #post -->

	<?php
	endwhile;
	endif;
	?>
</main>

<?php get_footer();
