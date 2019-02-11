<?php

namespace App\Controllers;

use Sober\Controller\Controller;
use WP_Query;

class FrontPage extends Controller
{
  static function get_picked_article() {
    $size = 'medium';
    $descLength = 300;

    $args = array(
        'meta_key'   => 'slider',
        'meta_value' =>  true
    );
    $the_query = new WP_Query( $args );

    if ( $the_query->have_posts() ) {
      $the_query->the_post();
      $c = get_the_category();
      $title = get_the_title();
      $shortDesc = get_post_meta($the_query->post->ID, 'short_description', true);
      // if (strlen($shortDesc) > $descLength) {
      //     $shortDesc = mb_strimwidth($shortDesc, 0, $descLength, "...", "UTF-8");
      // }
      
      $output = array(
          'link' => get_permalink(),
          'title' => $title,
          'category' => $c[0]->cat_name,
          'tags' => get_the_tags(),
          'short_description' => $shortDesc,
          'image' =>  get_the_post_thumbnail_url($the_query->post->ID, 'large'),
      );
    }
    return $output;
  }

  static function get_picked_from_category($cat_name) {
    $args = array(
      'meta_key'   => 'slider',
      'meta_value' =>  true,
      'category_name' => $cat_name,
    );
    $the_query = new WP_Query( $args );

    if ( $the_query->have_posts() ) {
      $the_query->the_post();
      
      $output = array(
          'link' => get_permalink(),
          'title' => get_the_title(),
          'tags' => get_the_tags(),
          'image' =>  get_the_post_thumbnail_url($the_query->post->ID, 'midium'),
      );
    }
    return $output;
  }

  static function get_members_data() {
    $member_ids = get_users( array( 'fields' => array( 'ID' ) ) );
    $members_data = array();
    $i = 0; // TODO: delete

    foreach($member_ids as $id) {
      if ($i < 3) {
        $member = get_user_meta($id->ID);
        $member_data = array(
          'avator' =>get_avatar_url($id->ID, array("size"=>350)),
          'name' => $member['nickname'][0],
          'role' => $member['role'][0],
          'color' => $member['color'][0],
          'words' => $member['favorite_words'][0],
          'desc' => $member['description'][0],
        );
        array_push($members_data, $member_data);
      }
      $i ++;
    }
    return $members_data;
  }
}

