<?php
/**
 * The template for homepage posts with "Excerpt" style
 *
 * @package WordPress
 * @subpackage PATHWELL
 * @since PATHWELL 1.0
 */

pathwell_storage_set('blog_archive', true);

get_header(); 

if (have_posts()) {

	pathwell_show_layout(get_query_var('blog_archive_start'));

	?><div class="posts_container"><?php
	
	$pathwell_stickies = is_home() ? get_option( 'sticky_posts' ) : false;
	$pathwell_sticky_out = pathwell_get_theme_option('sticky_style')=='columns' 
							&& is_array($pathwell_stickies) && count($pathwell_stickies) > 0 && get_query_var( 'paged' ) < 1;
	if ($pathwell_sticky_out) {
		?><div class="sticky_wrap columns_wrap"><?php	
	}
	while ( have_posts() ) { the_post(); 
		if ($pathwell_sticky_out && !is_sticky()) {
			$pathwell_sticky_out = false;
			?></div><?php
		}
		get_template_part( 'content', $pathwell_sticky_out && is_sticky() ? 'sticky' : 'excerpt' );
	}
	if ($pathwell_sticky_out) {
		$pathwell_sticky_out = false;
		?></div><?php
	}
	
	?></div><?php

	pathwell_show_pagination();

	pathwell_show_layout(get_query_var('blog_archive_end'));

} else {

	if ( is_search() )
		get_template_part( 'content', 'none-search' );
	else
		get_template_part( 'content', 'none-archive' );

}

get_footer();
?>