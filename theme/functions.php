<?php 

register_nav_menus( array(
	'pages' => __( 'Menu Pages'),
	'footer' => __( 'Menu Footer'),

));

// Register Custom Post Type
function custom_post_type() {

    $labels = array(
        'name'                  => _x( 'gmap', 'Post Type General Name', 'text_domain' ),
        'singular_name'         => _x( 'gmap', 'Post Type Singular Name', 'text_domain' ),
        'menu_name'             => __( 'Post Types', 'text_domain' ),
        'name_admin_bar'        => __( 'Post Type', 'text_domain' ),
        'archives'              => __( 'Item Archives', 'text_domain' ),
        'attributes'            => __( 'Item Attributes', 'text_domain' ),
        'parent_item_colon'     => __( 'Parent Item:', 'text_domain' ),
        'all_items'             => __( 'All Items', 'text_domain' ),
        'add_new_item'          => __( 'Add New Item', 'text_domain' ),
        'add_new'               => __( 'Add New', 'text_domain' ),
        'new_item'              => __( 'New Item', 'text_domain' ),
        'edit_item'             => __( 'Edit Item', 'text_domain' ),
        'update_item'           => __( 'Update Item', 'text_domain' ),
        'view_item'             => __( 'View Item', 'text_domain' ),
        'view_items'            => __( 'View Items', 'text_domain' ),
        'search_items'          => __( 'Search Item', 'text_domain' ),
        'not_found'             => __( 'Not found', 'text_domain' ),
        'not_found_in_trash'    => __( 'Not found in Trash', 'text_domain' ),
        'featured_image'        => __( 'Featured Image', 'text_domain' ),
        'set_featured_image'    => __( 'Set featured image', 'text_domain' ),
        'remove_featured_image' => __( 'Remove featured image', 'text_domain' ),
        'use_featured_image'    => __( 'Use as featured image', 'text_domain' ),
        'insert_into_item'      => __( 'Insert into item', 'text_domain' ),
        'uploaded_to_this_item' => __( 'Uploaded to this item', 'text_domain' ),
        'items_list'            => __( 'Items list', 'text_domain' ),
        'items_list_navigation' => __( 'Items list navigation', 'text_domain' ),
        'filter_items_list'     => __( 'Filter items list', 'text_domain' ),
    );
    $args = array(
        'label'                 => __( 'gmap', 'text_domain' ),
        'description'           => __( 'gmap', 'text_domain' ),
        'labels'                => $labels,
        'supports'              => array( ),
        'taxonomies'            => array( 'category', 'post_tag' ),
        'hierarchical'          => false,
        'public'                => true,
        'show_ui'               => true,
        'show_in_menu'          => true,
        'menu_position'         => 5,
        'show_in_admin_bar'     => true,
        'show_in_nav_menus'     => true,
        'can_export'            => true,
        'has_archive'           => true,        
        'exclude_from_search'   => false,
        'publicly_queryable'    => true,
        'capability_type'       => 'page',
    );
    register_post_type( 'gmap', $args );

}
add_action( 'init', 'custom_post_type', 0 );

/*AJOUTER REALISATION*/
add_filter('acf/pre_save_post' , 'tsm_do_pre_save_post_partenaire' );
function tsm_do_pre_save_post_partenaire( $post_id ) {
    // Bail if not logged in or not able to post
    if ( ! ( is_user_logged_in() || current_user_can('publish_posts') ) ) {
        return;
    }
    // check if this is to be a new post
    if( $post_id != 'new_post_partenaire' ) {
        return $post_id;
    }
    // Create a new post
    $post_partenaire = array(
        'post_type'     => 'post', // Your post type ( post, page, custom post type )
        'post_status'   => 'publish', // (publish, draft, private, etc.)
        'post_title'    => wp_strip_all_tags($_POST['acf']['field_59648d7e74324']), // Post Title ACF field key
    );
    // insert the post
    $post_id = wp_insert_post( $post_partenaire );
    // Save the fields to the post
    do_action( 'acf/save_post' , $post_id );

    wp_redirect( site_url()."/realisations/");
    //return $post_id;
}

function my_acf_init() {
	
	acf_update_setting('google_api_key', 'AIzaSyCHYkZBOoc7jY2zs9hN8Uy7yBC1pNBuIz0');
}

add_action('acf/init', 'my_acf_init');


// Delete from Front-End Link
function wp_delete_post_link($link = 'Supprimer', $before = '', $after = '', $title="Supprimer article", $cssClass="delete-post") {
    global $post;
    if ( $post->post_type == 'page') {
        if ( !current_user_can( 'edit_page' ) )
            return;
    } else {
        if ( !current_user_can( 'edit_post' ) )
            return;
    }
    $delLink = wp_nonce_url( site_url() . "/wp-admin/post.php?action=trash&post=" . $post->ID, 'trash-' . $post->post_type . '_' . $post->ID);
    $link = '<a class="supprimer-post ' . $cssClass . '" href="' . $delLink . '" onclick="alert(\'Supprimer cet article?\') return false;" title="'.$title.'" />'.$link."</a>";
    return $before . $link . $after;
}