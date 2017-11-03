<?php

function marble_setup()
{
    add_theme_support('title-tag');

    add_theme_support('html5', array(
    'search-form',
    'comment-form',
    'comment-list',
    'gallery',
    'caption',
    ));

    add_theme_support('post-thumbnails',array('post','portfolios'));

    //add size image
    add_image_size('img-special-size',1024,300,true);
    add_image_size('little-thumbnail',240,180,true);
    add_image_size('single-thumbnail',400,120,true);
    add_image_size('home-thumbnail',400,280,true);
    //add_image_size('img-large-size',1024,768,true);

    register_nav_menus(array(
    'main_menu' => 'Navigation principale',
    'footer_menu' => 'Navigation de pied de page',
    ));
}

add_action('after_setup_theme', 'marble_setup');


function marble_widgets_init()
{
    register_sidebar(array(
        'name' => 'Sidebar droite',
        'id' => 'right-sidebar',
        'description' => 'Le contenu de la sidebar du site',
        'before_widget' => '<div id="%1$s" class="widget-box widget %2$s">',
    'after_widget'  => '</div>',
    'before_title'  => '<h2 class="widgettitle">',
    'after_title'   => '</h2>',
    ));

    register_sidebar(array(
        'name' => 'Widgets du pied de page',
        'id' => 'footer-sidebar',
        'description' => 'Les widgets du pied de page',
        'before_widget' => '<div id="%1$s" class="col widget %2$s">',
    'after_widget'  => '</div>',
    'before_title'  => '<h4 class="widgettitle">',
    'after_title'   => '</h4>',
    ));
}

add_action('widgets_init', 'marble_widgets_init');


function marble_scripts() {
    wp_enqueue_style( 'normalize', get_template_directory_uri() . '/css/normalize.css' );
    wp_enqueue_style( 'marble-fonts', 'https://fonts.googleapis.com/css?family=Roboto|Roboto+Condensed:400,700|Roboto+Slab:400,700' );
    wp_enqueue_style( 'marble-css', get_template_directory_uri() . '/css/styles.css' );
    wp_enqueue_script( 'marble-script',
    get_template_directory_uri() . '/js/script.js',
    array(jquery), //dependencies
    '1.0.0', //version
    true ); //loaded in the footer
}

add_action( 'wp_enqueue_scripts', 'marble_scripts' );


// Register Custom Post Type

function portfolios_post_type() {

	$labels = array(
		'name'                  => _x( 'Portfolios', 'Post Type General Name', 'text_domain' ),
		'singular_name'         => _x( 'Portfolio', 'Post Type Singular Name', 'text_domain' ),
		'menu_name'             => __( 'Portfolios', 'text_domain' ),
		'name_admin_bar'        => __( 'Portfolio', 'text_domain' ),
		'archives'              => __( 'Item Archives', 'text_domain' ),
		'attributes'            => __( 'Item Attributes', 'text_domain' ),
		'parent_item_colon'     => __( 'Parent Portfolio:', 'text_domain' ),
		'all_items'             => __( 'All Portfolios', 'text_domain' ),
		'add_new_item'          => __( 'Add New Portfolio', 'text_domain' ),
		'add_new'               => __( 'New Portfolio', 'text_domain' ),
		'new_item'              => __( 'New Item', 'text_domain' ),
		'edit_item'             => __( 'Edit Portfolio', 'text_domain' ),
		'update_item'           => __( 'Update Portfolio', 'text_domain' ),
		'view_item'             => __( 'View Portfolio', 'text_domain' ),
		'view_items'            => __( 'View Items', 'text_domain' ),
		'search_items'          => __( 'Search portfolios', 'text_domain' ),
		'not_found'             => __( 'No portfolio found', 'text_domain' ),
		'not_found_in_trash'    => __( 'No portfolios found in Trash', 'text_domain' ),
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
	$rewrite = array(
		'slug'                  => 'portfolio',
		'with_front'            => true,
		'pages'                 => true,
		'feeds'                 => true,
	);
	$args = array(
		'label'                 => __( 'Portfolio', 'text_domain' ),
		'description'           => __( 'Portfolio information pages.', 'text_domain' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'revisions', ),
		'taxonomies'            => array( 'color', 'type',''),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 20,
		'menu_icon'             => 'dashicons-chart-line',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => 'references',
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'query_var'             => 'portfolio',
		'rewrite'               => $rewrite,
		'capability_type'       => 'post',
		'show_in_rest'          => false,
	);
	register_post_type( 'portfolios', $args );

}
add_action( 'init', 'portfolios_post_type', 0 );

/***** Taxonomy definition ***/

// Register Custom Taxonomy
function portfolio_color_taxonomy() {

	$labels = array(
		'name'                       => _x( 'Colors', 'Taxonomy General Name', 'marble' ),
		'singular_name'              => _x( 'Color', 'Taxonomy Singular Name', 'marble' ),
		'menu_name'                  => __( 'Color', 'marble' ),
		'all_items'                  => __( 'All Items', 'marble' ),
		'parent_item'                => __( 'Parent Item', 'marble' ),
		'parent_item_colon'          => __( 'Parent Item:', 'marble' ),
		'new_item_name'              => __( 'New Item Name', 'marble' ),
		'add_new_item'               => __( 'Add New Item', 'marble' ),
		'edit_item'                  => __( 'Edit Item', 'marble' ),
		'update_item'                => __( 'Update Item', 'marble' ),
		'view_item'                  => __( 'View Item', 'marble' ),
		'separate_items_with_commas' => __( 'Separate items with commas', 'marble' ),
		'add_or_remove_items'        => __( 'Add or remove items', 'marble' ),
		'choose_from_most_used'      => __( 'Choose from the most used', 'marble' ),
		'popular_items'              => __( 'Popular Items', 'marble' ),
		'search_items'               => __( 'Search Items', 'marble' ),
		'not_found'                  => __( 'Not Found', 'marble' ),
		'no_terms'                   => __( 'No items', 'marble' ),
		'items_list'                 => __( 'Items list', 'marble' ),
		'items_list_navigation'      => __( 'Items list navigation', 'marble' ),
	);
	$args = array(
		'labels'                     => $labels,
		'hierarchical'               => false,
		'public'                     => true,
		'show_ui'                    => true,
		'show_admin_column'          => true,
		'show_in_nav_menus'          => true,
		'show_tagcloud'              => true,
		'show_in_rest'               => false,
	);
	register_taxonomy( 'color', array( 'portfolios' ), $args );

}
add_action( 'init', 'portfolio_color_taxonomy', 0 );

// Register Custom Taxonomy
function portfolio_type_taxonomy() {

	$labels = array(
		'name'                       => _x( 'Types', 'Taxonomy General Name', 'marble' ),
		'singular_name'              => _x( 'Type', 'Taxonomy Singular Name', 'marble' ),
		'menu_name'                  => __( 'Type', 'marble' ),
		'all_items'                  => __( 'All Items', 'marble' ),
		'parent_item'                => __( 'Parent Item', 'marble' ),
		'parent_item_colon'          => __( 'Parent Item:', 'marble' ),
		'new_item_name'              => __( 'New Item Name', 'marble' ),
		'add_new_item'               => __( 'Add New Item', 'marble' ),
		'edit_item'                  => __( 'Edit Item', 'marble' ),
		'update_item'                => __( 'Update Item', 'marble' ),
		'view_item'                  => __( 'View Item', 'marble' ),
		'separate_items_with_commas' => __( 'Separate items with commas', 'marble' ),
		'add_or_remove_items'        => __( 'Add or remove items', 'marble' ),
		'choose_from_most_used'      => __( 'Choose from the most used', 'marble' ),
		'popular_items'              => __( 'Popular Items', 'marble' ),
		'search_items'               => __( 'Search Items', 'marble' ),
		'not_found'                  => __( 'Not Found', 'marble' ),
		'no_terms'                   => __( 'No items', 'marble' ),
		'items_list'                 => __( 'Items list', 'marble' ),
		'items_list_navigation'      => __( 'Items list navigation', 'marble' ),
	);
	$args = array(
		'labels'                     => $labels,
		'hierarchical'               => true,
		'public'                     => true,
		'show_ui'                    => true,
		'show_admin_column'          => true,
		'show_in_nav_menus'          => true,
		'show_tagcloud'              => true,
		'show_in_rest'               => false,
	);
	register_taxonomy( 'type', array( 'portfolios' ), $args );

}
add_action( 'init', 'portfolio_type_taxonomy', 0 );
