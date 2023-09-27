<?php
function register_project_cpt(){
  register_post_type( 'project', array(
    'labels'             => array(
      'name'               => _x( 'Projects', 'post type general name', 'themobidevco' ),
      'singular_name'      => _x( 'Project', 'post type singular name', 'themobidevco' ),
      'menu_name'          => _x( 'Projects', 'admin menu', 'themobidevco' ),
      'name_admin_bar'     => _x( 'Projects', 'add new on admin bar', 'themobidevco' ),
      'add_new'            => _x( 'Add New', 'project', 'themobidevco' ),
      'add_new_item'       => __( 'Add New Project', 'themobidevco' ),
      'new_item'           => __( 'New Project', 'themobidevco' ),
      'edit_item'          => __( 'Edit Project', 'themobidevco' ),
      'view_item'          => __( 'View Project', 'themobidevco' ),
      'all_items'          => __( 'All Projects', 'themobidevco' ),
      'search_items'       => __( 'Search Projects', 'themobidevco' ),
      'parent_item_colon'  => __( 'Parent Projects:', 'themobidevco' ),
      'not_found'          => __( 'No projects found.', 'themobidevco' ),
      'not_found_in_trash' => __( 'No projects found in Trash.', 'themobidevco' )
    ),
    'description'        => __( 'Description.', 'themobidevco' ),
    'public'             => true,
    'publicly_queryable' => true,
    'show_ui'            => true,
    'show_in_menu'       => true,
    'query_var'          => true,
    'rewrite'            => array( 'slug' => 'projects' ),
    'has_archive'        => true,
    'hierarchical'       => false,
    'menu_position'      => 25,
    'menu_icon'          => 'dashicons-portfolio',
    'supports'           => array( 'title', 'editor', 'thumbnail', 'author')
  ));

  register_taxonomy('project_tag', 'project', array(
      'hierarchical' => false,
      'label' => __( 'Tags', 'themobidev' ),
      'singular_name' => __( 'Tag', 'themobidev' ), 
      'rewrite' => true,
      'query_var' => true
    )
  );
}
?>
