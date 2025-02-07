<?php

namespace admin;

//require_once __DIR__ . '/classes/class-videosurfpro-video.php';
use admin\classes\Videosurfpro_Video;

class Videosurfpro_Admin {

    public static function add_plugin_admin_menu() {
        add_menu_page( 'VideoSurfPro', 'VideoSurfPro', 'manage_options', 'videosurfpro_admin_menu', 'videosurfpro_display_admin_menu_main', '', 4 );
        add_submenu_page( 'videosurfpro_admin_menu', 'Videos', 'Videos', 'manage_options', 'videosurfpro_admin_menu', 'videosurfpro_display_admin_menu_main' );
        add_submenu_page( 'videosurfpro_admin_menu', 'Categories', 'Categories', 'manage_options', 'videosurfpro_submenu_all_categories', 'videosurfpro_display_submenu_all_categories' );
//        add_submenu_page( 'videosurfpro_admin_menu', 'Galleries', 'Galleries', 'manage_options', 'videosurfpro_submenu_all_galleries', 'videosurfpro_display_submenu_all_galleries' );
        add_submenu_page( 'videosurfpro_admin_menu', 'Add Video', 'Add Video', 'manage_options', 'videosurfpro_submenu_add_video', 'videosurfpro_display_submenu_add_video' );
        add_submenu_page( 'videosurfpro_admin_menu', 'Add Category', 'Add Category', 'manage_options', 'videosurfpro_submenu_add_category', 'videosurfpro_display_submenu_add_category' );
        add_submenu_page( 'videosurfpro_admin_menu', 'Advertisement', 'Advertisement', 'manage_options', 'videosurfpro_submenu_advertisement', 'videosurfpro_display_submenu_advertisement' );
        add_submenu_page( 'videosurfpro_admin_menu', 'All Providers', 'All Providers', 'manage_options', 'videosurfpro_submenu_providers', 'videosurfpro_display_submenu_providers' );
        add_submenu_page( 'videosurfpro_admin_menu', 'FAQ', 'FAQ', 'manage_options', 'videosurfpro_submenu_faq', 'videosurfpro_display_submenu_faq' );

        /**
        * Hidden menus
        */
        add_submenu_page( null, 'Edit Video', null, 'manage_options', 'videosurfpro_submenu_edit_video', 'videosurfpro_display_submenu_edit_video' );
        add_submenu_page( null, 'Edit Category', null, 'manage_options', 'videosurfpro_submenu_edit_category', 'videosurfpro_display_submenu_edit_category' );
        add_submenu_page( null, 'YouTube Settings', null, 'manage_options', 'videosurfpro_submenu_youtube_settings', 'videosurfpro_display_submenu_youtube_settings' );

        /**
         * ROUTES
         */
        add_submenu_page( null, 'Routes', null, 'manage_options', 'videosurfpro_admin_routes', 'videosurfpro_admin_routes' );
    }

    public static function videosurfpro_display_admin_menu_main() {
        // make some logic
        // ...
        if (isset($_GET['edit_video_by_id'])) {
            // Edit Video
            include_once('partials/videosurfpro-edit-video-display.php');
        } else {
            // All Videos
            include_once( 'partials/videosurfpro-all-videos-display.php' );
        }
    }

    public static function videosurfpro_display_submenu_all_videos() {
        // make some logic
        // ...

        // show the view
        include_once( 'partials/videosurfpro-all-videos-display.php' );
    }

    public static function videosurfpro_display_submenu_all_categories() {
        // make some logic
        // ...
        if (isset($_GET['edit_category_by_id'])) {
            // Edit Category
            include_once('partials/videosurfpro-edit-category-display.php');
        } else {
            // All Categories
            include_once('partials/videosurfpro-all-categories-display.php');
        }
    }

//    public static function videosurfpro_display_submenu_all_galleries() {
//        // make some logic
//        // ...
//
//        // show the view
//        include_once( 'partials/videosurfpro-all-galleries-display.php' );
//    }

    public static function videosurfpro_display_submenu_add_video() {
        // make some logic
        // ...

        // show the view
        include_once( 'partials/videosurfpro-add-video-display.php' );
    }

    public static function videosurfpro_display_submenu_add_category() {
        // make some logic
        // ...

        // show the view
        include_once( 'partials/videosurfpro-add-category-display.php' );
    }

    public static function videosurfpro_display_submenu_advertisement() {
        // make some logic
        // ...

        // show the view
        include_once( 'partials/videosurfpro-advertisement-display.php' );
    }

    public static function videosurfpro_display_submenu_providers() {
        // make some logic
        // ...

        // show the view
        include_once( 'partials/videosurfpro-providers-display.php' );
    }

    public static function videosurfpro_display_submenu_faq() {
        // make some logic
        // ...

        // show the view
        include_once( 'partials/videosurfpro-faq-display.php' );
    }

    /**
     * Hidden menus
     */
    public static function videosurfpro_display_submenu_edit_video() {
        // make some logic
        // ...

        // show the view
        include_once( 'partials/videosurfpro-edit-video-display.php' );
    }

    public static function videosurfpro_display_submenu_edit_category() {
        // make some logic
        // ...

        // show the view
        include_once( 'partials/videosurfpro-edit-category-display.php' );
    }
    public static function videosurfpro_display_submenu_youtube_settings() {
        // make some logic
        // ...

        // show the view
        include_once( 'partials/videosurfpro-youtube-settings-display.php' );
    }

    /**
     * ROUTES
     */
    public static function videosurfpro_admin_routes() {
        // make some logic
        // ...

        // show the view
        include_once( 'partials/routes.php' );
    }

}