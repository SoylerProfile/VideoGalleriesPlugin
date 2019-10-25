<?php

namespace includes;

//require __DIR__ . '/../config.php';

class Videosurfpro_Activator {

    public static function activate() {
        self::create_tables();
    }

    private static function create_tables() {

        global $wpdb;
        $wpdb->show_errors();

        $table_name = $wpdb->prefix . VIDEOS_TABLE;

        if ($wpdb->get_var("show tables like '$table_name'") != $table_name) {
            $sql = "CREATE TABLE $table_name (
              id int(11) UNSIGNED AUTO_INCREMENT,
              video_name varchar(355),
              video_slug varchar(355),
              video_description text NOT NULL,
              video_link varchar(355),
              video_id varchar(355),
              video_provider varchar(255),
              video_category_id int(11),
              video_author_id int(11),
              video_views int(11) default 0,
              video_is_published int(11) default 0,
              video_created_at datetime DEFAULT NULL,
              video_seo_title varchar(155),
              video_seo_description varchar(255),
              video_seo_keywords varchar(255),
              UNIQUE KEY id (id)
            ) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci AUTO_INCREMENT=1;";

            require_once(ABSPATH . 'wp-admin/includes/upgrade.php');
            dbDelta($sql);
        }

        $table_name = $wpdb->prefix . CATEGORIES_TABLE;

        if ($wpdb->get_var("show tables like '$table_name'") != $table_name) {
            $sql = "CREATE TABLE $table_name (
              id int(11) UNSIGNED AUTO_INCREMENT,
              category_name varchar(355),
              category_slug varchar(355),
              category_description text NOT NULL,
              category_created_at datetime DEFAULT NULL,
              category_seo_title varchar(155),
              category_seo_description varchar(255),
              category_seo_keywords varchar(255),
              UNIQUE KEY id (id)
            ) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci AUTO_INCREMENT=1;";

            require_once(ABSPATH . 'wp-admin/includes/upgrade.php');
            dbDelta($sql);
        }


        $table_name = $wpdb->prefix . 'posts';
        $post_content = "<!-- wp:shortcode -->
                        [videosurfpro-videos-page]
                        <!-- /wp:shortcode -->";
        $date = date("Y-m-d H:i:s");
        if (empty($wpdb->get_var("SELECT * FROM `wp_posts` WHERE `post_title` = 'Videos'"))) {
            $wpdb->insert($table_name,
                array(
                    'post_author' => 1,
                    'post_date' => $date,
                    'post_date_gmt' => $date,
                    'post_content' => $post_content,
                    'post_title' => 'Videos',
                    'post_name' => 'videos',
                ),
                array( '%s', '%s', '%s' ));
        }
//        else {
//            $wpdb->update(
//                array(
//                'post_title' => 'Videos',
//                'post_content' => 'My shortcode',
//                'post_name' => 'Videos',
//            ), array(
//                'post_title' => 'Videos',
//            ));
//        }

        $table_name = $wpdb->prefix . PROVIDERS_TABLE;

        if ($wpdb->get_var("show tables like '$table_name'") != $table_name) {
            $sql = "CREATE TABLE $table_name (
              id int(11) UNSIGNED AUTO_INCREMENT,
              provider_name varchar(355),
              provider_api_key varchar(355),
              UNIQUE KEY id (id)
            ) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci AUTO_INCREMENT=1;";

            require_once(ABSPATH . 'wp-admin/includes/upgrade.php');
            dbDelta($sql);
        }

        // create next table below
        // ...
    }

}