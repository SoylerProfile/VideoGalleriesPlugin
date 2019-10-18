<?php
/*
Plugin Name: VideoSurfPro
Plugin URI: http://videosurfpro.com
Description: The best for Videos
Version: 1.0
Author: Fuze
Author URI: http://fuze.com
*/

require __DIR__ . '/config.php';
require __DIR__ . '/functions.php';
require __DIR__ . '/libraries/YouTubeAPI/class-video-data-getter.php';
require __DIR__ . '/admin/classes/class-videosurfpro-video.php';
require __DIR__ . '/admin/classes/class-videosurfpro-category.php';
require __DIR__ . '/includes/class-videosurfpro-shortcode.php';

use includes\Videosurfpro_Shortcode;
use admin\classes\Videosurfpro_Video;


// Хук. Активация нашего плагина
register_activation_hook( __FILE__, 'videosurfpro_activation' );

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

/**
 * Регистрируем шорткоды
 */
$shortcode = 'videosurfpro-video';
add_shortcode($shortcode, function($request) {
    if(is_admin()) {
        return '';
    }
    else {
        $video_id = $request['id'];
        $video = Videosurfpro_Video::get_all_video_data_from_db($video_id);
        if(empty($video)) {
            $result = 'Your Video is not exists on the Database';
            return $result;
        }
        $video = $video[0];
        $result = '<iframe title="'. $video->video_name .'" width="640" height="360" src="https://www.youtube.com/embed/' . $video->video_id . '?feature=oembed" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen=""></iframe>';
        return $result;
    }
});