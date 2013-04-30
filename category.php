<?php
/** category.php
 *
 * The template for displaying Category Archive pages.
 *
 * @author		Konstantin Obenland
 * @package		The Bootstrap
 * @since		1.0.0 - 05.02.2012
 */

get_header(); ?>

<section id="primary" class="span12">

	<?php tha_content_before(); ?>
	<div id="content" role="main">
		<?php tha_content_top();

		if ( have_posts() ) : ?>

			<header class="page-header">
				<div class="contain">
					<div class="blue category-heading">
						<h1 class="page-title"><?php
						printf( __( '%s', 'the-bootstrap' ), '<span>' . single_cat_title( '', false ) . '</span>' );
					?></h1>
		
					<?php if ( $category_description = category_description() ) {
						echo apply_filters( 'category_archive_meta', '<div class="category-archive-meta">' . $category_description . '</div>' );
					} ?>
					</div>
					<?php if (function_exists('z_taxonomy_image_url')) ?><img class="category-image" src="<?php echo z_taxonomy_image_url(); ?>" />
				</div>
			</header><!-- .page-header -->
			<div class="row">
			<?php
			while ( have_posts() ) {
				the_post();
				get_template_part( '/partials/content-only-posts-with-thumbnails', get_post_format() );
			}

			the_bootstrap_content_nav();

		else :
			get_template_part( '/partials/content', 'not-found' );
		endif;
		
		tha_content_bottom(); ?>
			</div>
	</div><!-- #content -->
	<?php tha_content_after(); ?>
</section><!-- #primary -->

<?php
//get_sidebar();
get_footer();


/* End of file index.php */
/* Location: ./wp-content/themes/the-bootstrap/category.php */