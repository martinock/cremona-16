<?php
//add_filter('show_admin_bar', '__return_true');

add_theme_support('menus');

function register_theme_menus() {
	register_nav_menus(
		array(
			'header-menu' => __('Header Menu')
		)
	);
}

add_action('init', 'register_theme_menus');

function create_widget($name, $id, $description) {
	register_sidebar(array (
		'name' => __($name),
		'id' => $id,
		'description' => __($description),
		'before_widget' => '<div class="widget">',
		'after_widget' => '</div>',
		'before_title' => '<h3>',
		'after_title' => '</h3>'
	));
}

create_widget('Slider 1', 'slider1','Menampilkan slide 1');
create_widget('Slider 2', 'slider2','Menampilkan slide 2');
create_widget('Front Page Left', 'front-left', 'Menampilkan ke bagian kiri dari homepage');
create_widget('Front Page Center', 'front-center', 'Menampilkan ke bagian tengah dari homepage');
create_widget('Front Page Right', 'front-right', 'Menampilkan ke bagian kanan dari homepage');

function wpb_list_child_pages() {
	global $post;
	if (is_page() && $post->post_parent) {
		$childpages = wp_list_pages('sort_column=menu_order&title_li=&child_of='. $post->post_parent.'&echo=0');
	} else {
		$childpages = wp_list_pages('sort_column=menu_order&title_li=&child_of='. $post->ID.'&echo=0');
	}

	if ($childpages) {
		$string = '<ul>'.$childpages.'</ul>';
	}

	return $string;
}

add_shortcode('wpb_childpages', 'wpb_list_child_pages');
?>