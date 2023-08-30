<?php
/*
Template Name: Blog Page
*/
?>

<?php get_header() ?>
<?php
function have_posts() {
	global $wp_query;

	if ( ! isset( $wp_query ) ) {
		return false;
	}

	return $wp_query->have_posts();
}
?>
<?php get_footer() ?>

<style>

</style>