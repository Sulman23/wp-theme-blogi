<?php
/**
 * The template for displaying 404 pages (Not Found).
 *
 */

get_header(); ?>

	<section class="content-padder error-404 not-found">

		<header>
			<h2 class="page-title"><?php _e( 'Oops! Something went wrong here.', 'blogi' ); ?></h2>
		</header><!-- .page-header -->

		<div class="page-content">

			<p><?php _e( 'Nothing could be found at this location. Maybe try a search?', 'blogi' ); ?></p>

			<?php get_search_form(); ?>

		</div><!-- .page-content -->

	</section><!-- .content-padder -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>