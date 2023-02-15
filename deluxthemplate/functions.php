<?php
add_action('wp_enqueue_scripts', function () {
	wp_enqueue_style('googleapis', 'https://fonts.googleapis.com', false, null);
	wp_enqueue_style('gstatic', 'https://fonts.gstatic.com', false, null);
	wp_enqueue_style('fontsGoogle', 'https://fonts.googleapis.com/css2?family=Comfortaa:wght@400;500;600;700&family=Montserrat:wght@400;500;600;700&display=swap', false, null);
	wp_enqueue_style('reset', get_template_directory_uri() . '/css/reset.css', false, null);
	wp_enqueue_style('swiper', 'https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css', false, null);
	wp_enqueue_style('leaflet', 'https://unpkg.com/leaflet@1.9.3/dist/leaflet.css', false, null);
	wp_enqueue_style('animate', 'https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css', false, null);
	wp_enqueue_style('main_styles', get_template_directory_uri() . '/css/style.css', false, null);

});
add_action('wp_enqueue_scripts', function () {

	wp_deregister_script('jquery');
	wp_register_script('jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js', false, null, true);
	wp_enqueue_script('jquery');

	wp_enqueue_script('swiper', 'https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js', false, null, true);
	wp_enqueue_script('leaflet', 'https://unpkg.com/leaflet@1.9.3/dist/leaflet.js', false, null, true);
	wp_enqueue_script('PageScroll2id', get_template_directory_uri() . '/js/jquery.malihu.PageScroll2id.min.js', array('jquery'), null, true);
	wp_enqueue_script('main-script', get_template_directory_uri() . '/js/main.js', array('jquery'), null, true);
});

add_action( 'after_setup_theme', function(){

	add_theme_support('post-thumbnails');
	add_theme_support('custom-logo');
	add_theme_support('title-tag');
	
});


function cf7_select_dropdown($tag, $unused ) {
	if ( $tag['name'] != 'select-menu' )
		return $tag;

	global $post;
	$myposts = get_posts([
		'numberposts' => -1,
		'category_name' => 'Homes',
	]);
	if ($myposts) {
		
		foreach (array_reverse($myposts) as $post) {
			setup_postdata($post);
			$tag['raw_values'][] = get_the_title();
			$tag['labels'][] = get_the_title();
		}
		wp_reset_postdata();
	}		
	$pipes = new WPCF7_Pipes($tag['raw_values']);
	$tag['values'] = $pipes->collect_befores();
	$tag['pipes'] = $pipes;

	return $tag;
}

add_filter( 'wpcf7_form_tag', 'cf7_select_dropdown', 10, 2); 

?>