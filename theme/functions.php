<?php 

register_nav_menus( array(
	'pages' => __( 'Menu Pages'),
	'footer' => __( 'Menu Footer'),

));

function my_acf_init() {
	
	acf_update_setting('google_api_key', 'AIzaSyCHYkZBOoc7jY2zs9hN8Uy7yBC1pNBuIz0');
}

add_action('acf/init', 'my_acf_init');