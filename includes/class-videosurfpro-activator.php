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
              video_description text NOT NULL,
              video_link varchar(355),
              video_id varchar(355),
              video_provider varchar(255),
              video_category int(11),
              video_author_id int(11),
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

        // create next table below
        // ...
    }

}
