<?php
class Page_Home{
  public function __construct(){}

  public function get_hero_section(){
    return [
      'background_image_url' => get_field('field_59a35ce27651b'),
      'heading' => get_field('field_59a35d197651c'),
      'caption' => get_field('field_59a35d257651d'),
      'cta' => [
          'label' => get_field('field_59a35d747651f'),
          'link' => get_field('field_59a35d477651e')
      ]
    ];
  }

  public function get_about_section(){
    return [
      'heading' => get_field('field_59a38c422bdf9'),
      'caption' => get_field('field_59a38c502bdfa')
    ];
  }

  public function get_services_section(){
    return [
      'heading' => get_field('field_59a38ceeaf70b'),
      'services' => get_field('field_59a38d02af70c'),
      'cta' => [
          'label' => get_field('field_59a38d9f8c48c'),
          'link' => get_field('field_59a38d6f8c48b')
      ]
    ];
  }

  public function get_projects_section(){
    return [
      'heading' => get_field('field_59a38f1e69690'),
      'projects' => new WP_Query([ 'posts_per_page' => 3, 'post_type' => 'project' ]),
      'cta' => [
          'label' => get_field('field_59a3929ab74b0'),
          'link' => get_field('field_59a39277b74af')
      ]
    ];
  }

  public function get_blog_section(){
    return [
      'heading' => get_field('field_59a38de885c50'),
      'posts' => new WP_Query([ 'posts_per_page' => 3, 'post_type' => 'post' ]),
      'cta' => [
          'label' => get_field('field_59a398228ac21'),
          'link' => get_field('field_59a3980e8ac20')
      ]
    ];
  }

  public function get_contact_section(){
    return [
      'cta' => [
          'label' => get_field('field_59a4cc5c434d7'),
          'link' => get_field('field_59a4cc22434d6')
      ]
    ];
  }
}
?>
