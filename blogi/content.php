<?php
/**
 * @package _tk
 */
?>


<?php // Styling Tip!

// Want to wrap for example the post content in blog listings with a thin outline in Bootstrap style?
// Just add the class "panel" to the article tag here that starts below.
// Simply replace post_class() with post_class('panel') and check your site!
// Remember to do this for all content templates you want to have this,
// for example content-single.php for the post single view. ?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header>
		<h1 class="page-title"><a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a></h1>

		<?php if ( 'post' == get_post_type() ) : ?>
		<div class="entry-meta">
			<?php _tk_posted_on(); ?>
		</div><!-- .entry-meta -->
		<?php endif; ?>
	</header><!-- .entry-header -->


	
	<div class="entry-content">

			<?php 
			    if (has_post_thumbnail()) {
			        echo '<div class="img-thumbnail index-img">';
			        echo '<a href="' . get_permalink() . '" title="' . __('Read ', '_tk') . get_the_title() . '" rel="bookmark">';
			        echo the_post_thumbnail('index-thumb');
			        echo '</a>';
			        echo '</div>';
			    }
			?>


		<?php the_excerpt(); ?>

		<div class=" continue-reading">
		    <?php echo '<a href="' . get_permalink() . '" title="' . __('Continue Reading ', '_tk') . get_the_title() . '" rel="bookmark">Continue Reading<i class="fa fa-arrow-circle-o-right"></i></a>'; ?>
		</div><!-- .entry-footer -->
		
	</div><!-- .entry-content -->
	

	<footer class="entry-meta">
		<?php if ( 'post' == get_post_type() ) : // Hide category and tag text for pages on Search ?>
			<?php
				/* translators: used between list items, there is a space after the comma */
				$categories_list = get_the_category_list( __( ', ', '_tk' ) );
				if ( $categories_list && _tk_categorized_blog() ) :
			?>
			<span class="cat-links">
				<?php printf( __( '<i  class="fa fa-folder"></i> %1$s', '_tk' ), $categories_list ); ?>
			</span>
			<?php endif; // End if categories ?>

			<?php
				/* translators: used between list items, there is a space after the comma */
				$tags_list = get_the_tag_list( '', __( ', ', '_tk' ) );
				if ( $tags_list ) :
			?>
			<span class="tags-links">
				<?php printf( __( '<i  class="fa fa-tags"></i> %1$s', '_tk' ), $tags_list ); ?>
			</span>
			<?php endif; // End if $tags_list ?>
		<?php endif; // End if 'post' == get_post_type() ?>

		<?php if ( ! post_password_required() && ( comments_open() || '0' != get_comments_number() ) ) : ?>
		<span class="comments-link"><?php comments_popup_link( __( '<i  class="fa fa-comment"></i> Leave a comment', '_tk' ), __( '<i  class="fa fa-comment"></i> 1 Comment', '_tk' ), __( '<i  class="fa fa-comment"></i> % Comments', '_tk' ) ); ?></span>
		<?php endif; ?>

		<?php edit_post_link( __( '<i  class="fa fa-edit"></i> Edit', '_tk' ), '<span class="edit-link">', '</span>' ); ?>
	</footer><!-- .entry-meta -->
</article><!-- #post-## -->
