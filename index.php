<?php
/*
Plugin Name: VideoSurfPro
Plugin URI: https://github.com/SoylerProfile
Description: The best for Videos
Version: 1.0
Author: Soyler
Author URI: https://github.com/SoylerProfile
*/

// OUR
require __DIR__ . '/config.php';
require __DIR__ . '/functions.php';
require __DIR__ . '/libraries/YouTubeAPI/class-video-data-getter.php';
require __DIR__ . '/admin/classes/class-videosurfpro-video.php';
require __DIR__ . '/admin/classes/class-videosurfpro-category.php';
require __DIR__ . '/admin/classes/class-videosurfpro-provider.php';
require __DIR__ . '/admin/classes/class-videosurfpro-advertisement.php';
require __DIR__ . '/admin/classes/class-videosurfpro-template.php';
require __DIR__ . '/includes/class-videosurfpro-shortcode.php';
require __DIR__ . '/includes/class-videosurfpro-widget.php';

// CORE
//require_once ABSPATH . 'wp-includes/class-wp-widget.php';

use includes\Videosurfpro_Shortcode;
use admin\classes\Videosurfpro_Video;
use admin\classes\Videosurfpro_Category;

//use WP_Widget;


// Хук. Активация нашего плагина
register_activation_hook(__FILE__, 'videosurfpro_activation');

// Хук. Удаление плагина (удаляем все созданные плагином таблицы)
register_uninstall_hook(__FILE__, 'videosurfpro_uninstall');

// Подключаем скрипты до сайта
add_action('wp_enqueue_scripts', 'videosurfpro_enqueue_scripts');

// Подключаем скрипты до админки WordPress
//add_action('admin_head', 'videosurfpro_admin_scripts');

// Регистрируем меню нашего плагина
add_action('admin_menu', 'videosurfpro_admin_menu');

// Регистрируем шорткоды
//add_action('init', 'videosurfpro_shortcodes_register');

// Ajax функции плагина
add_action('wp_ajax_videosurfpro_delete_video', 'videosurfpro_delete_video');
add_action('wp_ajax_videosurfpro_change_video_status', 'videosurfpro_change_video_status');
add_action('wp_ajax_videosurfpro_get_video_data_by_link', 'videosurfpro_get_video_data_by_link');

add_action('wp_ajax_videosurfpro_delete_category', 'videosurfpro_delete_category');


/**
 * Регистрируем шорткоды
 */
$shortcode = 'videosurfpro-video';
add_shortcode($shortcode, function ($request) {
    if (is_admin()) {
        return '';
    } else {
        $video_id = $request['id'];
        $video = Videosurfpro_Video::get_all_video_data_from_db($video_id);
        if (empty($video)) {
            $result = 'Your Video is not exists on the Database';
            return $result;
        }
        $video = $video[0];
        $result = '<iframe title="' . $video->video_name . '" width="640" height="360" src="https://www.youtube.com/embed/' . $video->video_id . '?feature=oembed" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen=""></iframe>';
        return $result;
    }
});

$shortcode = 'videosurfpro-videos-page';
add_shortcode($shortcode, function ($request) {
    if (is_admin()) {
        return '';
    } else {
        // GET DATA
        include_once( 'public/partials/videosurfpro-all-videos-display.php' );
    }
});

/**
 * Create a custom template for single video
 */

add_filter('init', function ($template) {
    if (isset($_GET['videosurfpro_video_id'])) {
        $videosurfpro_video_id = $_GET['videosurfpro_video_id'];
        $video = Videosurfpro_Video::get_all_video_data_from_db($videosurfpro_video_id);
        Videosurfpro_Video::video_was_watched($videosurfpro_video_id);
        $html = "";
        if (empty($video)) {
            $html .= 'Видео с указанным идентификатором не существует';
        } elseif($video[0]->video_is_published == 0) {
            $html .= 'Данное видео скрыто администратором';
        } else{
            $video = $video[0];
            $video_iframe = '
                <div>
                    <iframe title="' . $video->video_name . '" width="640" height="360" src="https://www.youtube.com/embed/' . $video->video_id . '?feature=oembed" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen=""></iframe>
                </div>
            ';
            $html .= $video_iframe;
        }
        include plugin_dir_path(__FILE__) . 'public/partials/videosurfpro-single-video.php';
        die();
    }
});

/**
 * Create a custom template for single category
 */

add_filter('init', function ($template) {
    if (isset($_GET['videosurfpro_category_id'])) {
        $videosurfpro_category_id = $_GET['videosurfpro_category_id'];
        $category = Videosurfpro_Category::get_all_category_data_from_db($videosurfpro_category_id);
        $html = "";
        if (empty($category)) {
            $html .= 'Категория с указанным идентификатором не существует';
        } else{
            $category = $category[0];
            $category_name = $category->category_name;
            $html .= $category_name;
        }
        include plugin_dir_path(__FILE__) . 'public/partials/videosurfpro-single-category.php';
        die();
    }
});

// WIDGETS
add_action('widgets_init', 'videosurfpro_register_widgets');


add_filter('template_include', 'videos_template');
function videos_template( $template ) {

    # аналог второго способа
    // если это страница со слагом portfolio, используем файл шаблона page-portfolio.php
    // используем условный тег is_page()
    if( is_page('videos') ){
        return wp_normalize_path( WP_PLUGIN_DIR ) . '/videosurfpro/public/partials/videosurfpro-all-videos-display.php';
    }
//
//    # шаблон для группы рубрик
//    // этот пример будет использовать файл из папки темы tpl_special-cats.php,
//    // как шаблон для рубрик с ID 9, названием "Без рубрики" и слагом "php"
//    if( is_category( array( 9, 'Без рубрики', 'php') ) ){
//        return get_stylesheet_directory() . '/tpl_special-cats.php';
//    }
//
//    # шаблон для записи по ID
//    // файл шаблона расположен в папке плагина /my-plugin/site-template.php
//    global $post;
//    if( $post->ID == 12 ){
//        return wp_normalize_path( WP_PLUGIN_DIR ) . '/my-plugin/site-template.php';
//    }
//
//    # шаблон для страниц произвольного типа "book"
//    // предполагается, что файл шаблона book-tpl.php лежит в папке темы
//    global $post;
//    if( $post->post_type == 'book' ){
//        return get_stylesheet_directory() . '/book-tpl.php';
//    }

    return $template;

}