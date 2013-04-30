<?php
/** content.php
 *
 * The default template for displaying content
 *
 * @author		Konstantin Obenland
 * @package		The Bootstrap
 * @since		1.0.0 - 05.02.2012
 */


tha_entry_before(); ?>
<?php if( has_post_thumbnail() ) { ?>


<article id="post-<?php the_ID(); ?>" <?php post_class('span6 short_post'); ?>>
	<?php tha_entry_top(); ?>
	


	
	<div class="entry-content clearfix">
		
		
		<?php
if ( has_post_thumbnail()) { ?>
<a class="category-post-thumbnail" href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
			<img src="<?php echo catch_that_image() ?>" />
			<?php //the_post_thumbnail( 'post-image' ); ?>
</a>
<?php } else { ?>
<a class="category-post-thumbnail" href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
	<img src="http://placehold.it/550x350">
</a>

<?php } ?>
		<div class="center-content">
		<p class="post-category-title"><?php printf( __( '%s', 'the-bootstrap' ), '<span>' . single_cat_title( '', false ) . '</span>' ); ?></p>
			<a href="<?php the_permalink() ?>">
				<h2 class="category-post-title">
			<?php
			$thetitle = $post->post_title; /* or you can use get_the_title() */
			$getlength = strlen($thetitle);
			$thelength = 100;
			echo substr($thetitle, 0, $thelength);
			if ($getlength > $thelength) echo "...";
			?>
				</h2>
			</a>		
			<div class="category-post-excerpt">
				<?php 
				the_excerpt( __( 'Read More <span class="meta-nav">&rarr;</span>', 'the-bootstrap' ) );
				the_bootstrap_link_pages(); ?>
			</div>
		</div><!-- .center-content -->
	</div><!-- .entry-content -->
	

	
	
	<?php tha_entry_bottom(); ?>
</article><!-- #post-<?php the_ID(); ?> -->
 

<?php } ?>


<?php tha_entry_after();


/* End of file content.php */
/* Location: ./wp-content/themes/the-bootstrap/partials/content.php */