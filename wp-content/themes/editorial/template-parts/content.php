<?php
/**
 * Template part for displaying posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Mystery Themes
 * @subpackage Editorial
 * @since 1.0.0
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<?php if( has_post_thumbnail() ) { ?>
			<div class="post-image">
				<a href="<?php the_permalink();?>" title="<?php the_title_attribute();?>">
					<figure><?php the_post_thumbnail( 'editorial-single-large' ); ?></figure>
				</a>
			</div>
	<?php } ?>

	<div class="archive-desc-wrapper clearfix">
		<header class="entry-header">
			<?php
				do_action( 'editorial_post_categories' );
				if ( is_single() ) {
					the_title( '<h1 class="entry-title">', '</h1>' );
				} else {
					the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
				}
			?>
		</header><!-- .entry-header -->
		<div class="entry-meta">
			<?php
				editorial_posted_on();
				editorial_post_comment();
			?>
		</div><!-- .entry-meta -->
		<div class="entry-content">
			<?php the_excerpt(); ?>
		</div><!-- .entry-content -->

		<footer class="entry-footer">			
			<?php editorial_entry_footer(); ?>
		</footer><!-- .entry-footer -->
	</div><!-- .archive-desc-wrapper -->
</article><!-- #post-## -->
