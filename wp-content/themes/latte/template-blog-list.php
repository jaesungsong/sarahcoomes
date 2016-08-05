<?php 
/**
 * Template Name: Blog list Template
 */
	get_header();

	$latte_blogposts_display = get_theme_mod('latte_blogposts_display');

	if( isset($latte_blogposts_display) && $latte_blogposts_display != 1 ):
		do_action( 'latte_blogposts_before' );
		get_template_part( 'sections/blogposts' );
		do_action( 'latte_blogposts_after' );
	endif;

	get_footer();

?>
