<?php
/**
 * The template used for displaying page content in page.php
 *
 * @package Peace
 * @since Peace 1.0
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<?php if ( !is_front_page() ) { ?>
		<header class="entry-header">
			<h1 class="entry-title"><?php the_title(); ?></h1>
		</header>
	<?php } ?>
	<div class="entry-content">
		<?php the_content(); ?>

		<h2><?php esc_html_e( 'Archives by Category', 'peace' ); ?></h2>
		<ul class="content-archives-by-category">
			<?php wp_list_categories( array(
				'showcount' => 'true',
				'title_li' => '',
				'show_count' => 'true'
			) ); ?>
		</ul>

		<h2><?php esc_html_e( 'Archives by Month', 'peace' ); ?></h2>
		<ul class="content-archives-by-month">
			<?php wp_get_archives( 'type=monthly' ); ?>
		</ul>

		<?php wp_link_pages( array( 'before' => '<div class="page-links">' . esc_html_e( 'Pages:', 'peace' ), 'after' => '</div>' ) ); ?>
	</div><!-- /.entry-content -->
	<footer class="entry-meta">
		<?php edit_post_link( esc_html_e( 'Edit', 'peace' ) . ' <i class="fa fa-angle-right"></i>', '<div class="edit-link">', '</div>' ); ?>
	</footer><!-- /.entry-meta -->
</article><!-- /#post -->