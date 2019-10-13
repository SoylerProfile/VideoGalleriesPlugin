<?php
/*
Plugin Name: VideoSurfPro
Plugin URI: http://videosurfpro.com
Description: The best for Videos
Version: 1.0
Author: Fuze
Author URI: http://fuze.com
*/

require __DIR__ . '/functions.php';
require __DIR__ . '/config.php';

// Хук. Активация нашего плагина
register_activation_hook( __FILE__, 'videosurfpro_activation' );

// Хук. Удаление плагина (удаляем все созданные плагином таблицы)
register_uninstall_hook(__FILE__, 'videosurfpro_uninstall');

// Подключаем скрипты до сайта
add_action('wp_enqueue_scripts', 'videosurfpro_enqueue_scripts');

// Подключаем скрипты до админки WordPress
add_action('admin_head', 'videosurfpro_admin_scripts');

// Регистрируем меню нашего плагина
add_action('admin_menu', 'videosurfpro_admin_menu');

//// Регистрируем шорткоды
//add_action('init', 'videosurfpro_shortcodes_register');