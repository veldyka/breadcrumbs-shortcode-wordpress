<?php
// Add breadcrumbs
function breadcrumbs() {
	if(!is_home()) {
		echo '<div class="breadcrumbs all-link">';
		echo '<span class="breadcrumb"><a href="'.home_url('/blog').'">Blog</a></span><span class="divider"> / </span>';
		if (is_category() || is_single()) {
		if (is_single()) {
	     $category = get_the_category();
       $first_category = $category[0];
       echo sprintf( '<a href="%s">%s</a>', get_category_link( $first_category ), $first_category->name );
							}
		} 
		echo '</div>';
	}
}
add_shortcode( 'breadcrumbs', 'breadcrumbs' );
?>
