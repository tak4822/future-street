<?php

namespace App\Controllers;

use Sober\Controller\Controller;
use WP_Query;

class App extends Controller
{
    public function siteName()
    {
        return get_bloginfo('name');
    }

    static function is_mobile() {
        $userAgents = array(
            'iPhone',          // iPhone
            'iPod',            // iPod touch
            'Android.*mobile', // 1.5+ Android** Only mobile
            'Windows.*Phone',  // *** Windows Phone
            'dream',           // Pre 1.5 Android
            'CUPCAKE',         // 1.5+ Android
            'blackberry9500',  // Storm
            'blackberry9530',  // Storm
            'blackberry9520',  // Storm v2
            'blackberry9550',  // Storm v2
            'blackberry9800',  // Torch
            'webOS',           // Palm Pre Experimental
            'incognito',       // Other iPhone browser
            'webmate',         // Other iPhone browser
            'ipad',
        );
        $pattern = '/'.implode('|', $userAgents).'/i';
        return preg_match($pattern, $_SERVER['HTTP_USER_AGENT']);
    }

    function latest_posts() {
        $args = array(
            'post_status' => 'publish',
            'post_type' => 'post',
            'orderby' => 'post_date',
            'order' => 'DESC',
            'paged' => get_query_var('paged'),
        );

        return new WP_Query( $args );
    }

    function popular_posts() {
        $args = array(
            'post_status' => 'publish',
            'meta_key' => 'post_views_count',
            'orderby' => 'meta_value_num',
            'order' => 'DESC',
            'paged' => get_query_var('paged'),
        );
        return new WP_Query( $args );
    }

    public static function get_category_posts($cat_name) {
        $args = array(
            'post_status' => 'publish',
            'post_type' => 'post',
            'orderby' => 'post_date',
            'order' => 'DESC',
            'category_name' => $cat_name,
            'paged' => get_query_var('paged'),
          ); 
        $the_query = new WP_Query( $args );

        $count = 0;
        $cat_posts = array();
        while ( $the_query->have_posts() && $count < 5) {
            $the_query->the_post();

            $output = array(
                'date' => get_post_time('M j, Y'),
                'link' => get_permalink(),
                'title' => get_the_title(),
                'tags' => get_the_tags(),
                'image' =>  get_the_post_thumbnail_url($the_query->post->ID, 'normal_thumb'),
            );
            array_push($cat_posts, $output);
            $count ++;
          }
          return $cat_posts;
    }

    public static function get_categories() {
        return array(
            'interview',
            'study',
            'lifestyle',
            'hangout',
            'travel'
        );
    }

    public function current_template() {
        if (is_front_page()) return 'frontpage';
        if (is_category() || is_tag() || is_page( 'new') || is_page( 'popular') || is_search() || is_author()) return 'articles';
        if (is_single()) return 'posts';

        return 'others';
    }

    static function getImage() {
        if ( is_single() ) {
            $post_ID = get_queried_object()->ID;
            return get_the_post_thumbnail_url($post_ID, 'normal_thumb');
        } else {
            return null;
        }
    }

    static function getTitle() {
        $post = get_queried_object();
        if ( is_front_page() ) {
            return 'Canarie';
        } else if ( is_single() ) {
            return $post->post_title . '｜Canarie';
        } else if (is_author()) {
            return 'Canarie メンバー | ' . get_the_author();
        } else if (is_category()) {
            return 'Canarie カテゴリー | '. get_the_archive_title();
        } else if (is_tag()) {
            return 'Canarie タグ | ' . get_the_archive_title();
        } else if (is_search()) {
            return sprintf(__('Canarie 検索結果：%s', 'sage'), get_search_query());
        } else if (is_archive()) {
            return get_the_archive_title();
        } else {
            return get_the_title();
        }
    }

    static function getDescription() {
        if ( is_single() ) {
            return get_post_meta(get_the_ID(), 'short_description', true);
        } else {
            return 'カナダのリアルを伝えるメディアサイト';
        }
    }

    static function getUrl() {
        global $post;
        if ( is_front_page() ) {
            return 'https://canarie.jp';
        } else if( is_category() ){
            $category = get_the_category();
            return get_category_link( $category[0]->term_id );
        } else if( is_tag() ){
            $name = single_tag_title('', false);
            $tag = get_term_by('name', $name, 'post_tag');
            return get_tag_link($tag->term_id);
        } else if( is_author() ){
            return get_author_posts_url($post->post_author);
        } else if( is_search() ){
            return get_search_link(get_search_query());
        } else {
            return get_page_link(get_queried_object_id());
        }
    }

    static function getType() {
        if ( is_single() ) {
            return 'article';
        } else {
            return 'website';
        }
    }

    public static function get_recommended_keyword() {
        return array(
            '留学',
            'ワーホリ',
            'バンクーバー',
            'トロント',
            '保存版',
            '準備',
            '短期',
            'カフェ',
            '美容',
            'アクティビティ',
            '学校',
            'デートスポット',
            '現地就職',
            'あるある',
            '自炊',
        );
    } 
}
