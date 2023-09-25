<?php
function register_client_cpt(){
  register_post_type( 'client', array(
    'labels'             => array(
      'name'               => _x( 'Clients', 'post type general name', 'themobidevco' ),
      'singular_name'      => _x( 'Client', 'post type singular name', 'themobidevco' ),
      'menu_name'          => _x( 'Clients', 'admin menu', 'themobidevco' ),
      'name_admin_bar'     => _x( 'Clients', 'add new on admin bar', 'themobidevco' ),
      'add_new'            => _x( 'Add New', 'project', 'themobidevco' ),
      'add_new_item'       => __( 'Add New Client', 'themobidevco' ),
      'new_item'           => __( 'New Client', 'themobidevco' ),
      'edit_item'          => __( 'Edit Client', 'themobidevco' ),
      'view_item'          => __( 'View Client', 'themobidevco' ),
      'all_items'          => __( 'All Clients', 'themobidevco' ),
      'search_items'       => __( 'Search Clients', 'themobidevco' ),
      'parent_item_colon'  => __( 'Parent Clients:', 'themobidevco' ),
      'not_found'          => __( 'No clients found.', 'themobidevco' ),
      'not_found_in_trash' => __( 'No clients found in Trash.', 'themobidevco' )
    ),
    'description'        => __( 'Description.', 'themobidevco' ),
    'public'             => false,
    'publicly_queryable' => false,
    'show_ui'            => true,
    'show_in_menu'       => true,
    'query_var'          => true,
    'rewrite'            => array( 'slug' => 'clients' ),
    'has_archive'        => false,
    'hierarchical'       => false,
    'menu_position'      => 25,
    'menu_icon'          => 'dashicons-businessman',
    'supports'           => array( 'title', 'editor', 'thumbnail')
  ));
}
?>
