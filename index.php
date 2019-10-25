<?php
/*
Plugin Name: VideoSurfPro
Plugin URI: http://videosurfpro.com
Description: The best for Videos
Version: 1.0
Author: Fuze
Author URI: http://fuze.com
*/

// OUR
require __DIR__ . '/config.php';
require __DIR__ . '/functions.php';
require __DIR__ . '/libraries/YouTubeAPI/class-video-data-getter.php';
require __DIR__ . '/admin/classes/class-videosurfpro-video.php';
require __DIR__ . '/admin/classes/class-videosurfpro-category.php';
require __DIR__ . '/admin/classes/class-videosurfpro-provider.php';
require __DIR__ . '/includes/class-videosurfpro-shortcode.php';
require __DIR__ . '/includes/class-videosurfpro-widget.php';

// CORE
//require_once ABSPATH . 'wp-includes/class-wp-widget.php';

use includes\Videosurfpro_Shortcode;
use admin\classes\Videosurfpro_Video;

//use WP_Widget;


// Хук. Активация нашего плагина
register_activation_hook(__FILE__, 'videosurfpro_activation');

// Хук. Удаление плагина (удаляем все созданные плагином таблицы)
register_uninstall_hook(__FILE__, 'videosurfpro_uninstall');

// Подключаем скрипты до сайта
//add_action('wp_enqueue_scripts', 'videosurfpro_enqueue_scripts');

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
        if (isset($_POST['videos_sortby_views'])) {
            $all_orderby_views_videos = Videosurfpro_Video::get_all_videos_orderby_views_desc();
            $videos = $all_orderby_views_videos;

        } else if (isset($_POST['videos_sortby_latest'])) {
            $all_orderby_latest_videos = Videosurfpro_Video::get_all_videos_orderby_latest_desc();
            $videos = $all_orderby_latest_videos;
        }
        else {
            $all_videos = Videosurfpro_Video::get_all_videos();
            $videos = $all_videos;
        }
        $html = "";
        $content = "";
        $domain = get_site_url();
        $videos_sort_div = "
        <div style='display: grid; grid-template-columns: 1fr 1fr; grid-gap: 5px; max-width: 100vw;'>
            <form action='' method='POST'>
                <input type='submit' name='videos_sortby_views' value='Sort by Views'>
            </form>
            <form action='' method='POST'>
                <input type='submit' name='videos_sortby_latest' value='Latest Videos'>
            </form>
        </div>
    ";
        $content .= $videos_sort_div;

        $latest_videos = "<div style='margin:0; display: grid; grid-template-columns: 1fr 1fr; grid-gap: 5px;'>";
        // INSERT DATA
        foreach ($videos as $video) {
            if ($video->video_is_published == true) {
//                if (Videosurfpro_Video::is_exists_youtube_video_thumbnail($video->video_id) == true) {
                    $latest_videos .= '
                        <a href="' . $domain . '/?videosurfpro_video_id=' . $video->id . '">
                            <img src="http://img.youtube.com/vi/' . $video->video_id . '/mqdefault.jpg" />
                        </a>
                    ';
//                }
            }
        }
        $latest_videos .= '</div';

        // RETURN DATA
        $content .= $latest_videos;
        $html .= $content;
        return $html;
    }
});

/**
 * Create a custom template for single videos
 */

add_filter('init', function ($template) {
    if (isset($_GET['videosurfpro_video_id'])) {
        $videosurfpro_video_id = $_GET['videosurfpro_video_id'];
        $video = Videosurfpro_Video::get_all_video_data_from_db($videosurfpro_video_id);
        Videosurfpro_Video::video_was_watched($videosurfpro_video_id);
        $html = "";
        if (empty($video)) {
            $html .= 'Видео с указанным идентификатором не существует';
        } else {
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

// WIDGETS
add_action('widgets_init', 'videosurfpro_widget_last_videos');