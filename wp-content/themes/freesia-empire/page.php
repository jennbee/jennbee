<?php
/**
 * The template for displaying all pages.
 *
 * @package Theme Freesia
 * @subpackage Freesia Empire
 * @since Freesia Empire 1.0
 */

get_header();
	$freesiaempire_settings = freesiaempire_get_theme_options();
	global $freesiaempire_content_layout;
	if( $post ) {
		$layout = get_post_meta( $post->ID, 'freesiaempire_sidebarlayout', true );
	}
	if( empty( $layout ) || is_archive() || is_search() || is_home() ) {
		$layout = 'default';
	}
	if( 'default' == $layout ) { //Settings from customizer
		if(($freesiaempire_settings['freesiaempire_sidebar_layout_options'] != 'nosidebar') && ($freesiaempire_settings['freesiaempire_sidebar_layout_options'] != 'fullwidth')){ ?>

<div id="primary">
<?php }
	}else{ // for page/ post
		if(($layout != 'no-sidebar') && ($layout != 'full-width')){ ?>
<div id="primary">
	<?php }
	}?>
	<div id="main">
	<?php
	if( have_posts() ) {
		while( have_posts() ) {
			the_post(); ?>
		<div class="entry-content">
			<?php the_content();
				wp_link_pages( array( 
				'before'            => '<div style="clear: both;"></div><div class="pagination clearfix">'.__( 'Pages:', 'freesia-empire' ),
				'after'             => '</div>',
				'link_before'       => '<span>',
				'link_after'        => '</span>',
				'pagelink'          => '%',
				'echo'              => 1
				) ); ?>
		</div> <!-- entry-content clearfix-->
		<?php  comments_template(); ?>
	<?php }
	} else { ?>
	<h1 class="entry-title"> <?php _e( 'No Posts Found.', 'freesia-empire' ); ?> </h1>
	<?php
	} ?>
	</div> <!-- #main -->
	<?php 
if( 'default' == $layout ) { //Settings from customizer
	if(($freesiaempire_settings['freesiaempire_sidebar_layout_options'] != 'nosidebar') && ($freesiaempire_settings['freesiaempire_sidebar_layout_options'] != 'fullwidth')): ?>
</div> <!-- #primary -->
<?php endif;
}else{ // for page/post
	if(($layout != 'no-sidebar') && ($layout != 'full-width')){
		echo '</div><!-- #primary -->';
	} 
}
get_sidebar();
get_footer(); ?>