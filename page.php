<?php
/** page.php
 *
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @author		CIVILIZATION
 * @package		The Clymb
 * @since		1.0.0 - 04.21.2013
 */

get_header(); ?>

<div id="primary" class="span12">
	<?php tha_content_before(); ?>
	<div id="content" role="main">
		<?php tha_content_top();
		
		the_post();
		get_template_part( '/partials/content', 'page' );
		comments_template();

		tha_content_bottom(); ?>
	</div><!-- #content -->
	<?php tha_content_after(); ?>
</div><!-- #primary -->

<?php
#get_sidebar();
get_footer();


/* End of file page.php */
/* Location: ./wp-content/themes/the-bootstrap/page.php */