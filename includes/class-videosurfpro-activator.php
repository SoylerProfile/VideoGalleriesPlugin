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
              id INTEGER(11) UNSIGNED AUTO_INCREMENT,
              video_name varchar(1024),
              video_description varchar(1024),
              video_link varchar(1024),
              video_id varchar(1024),
              video_provider varchar(1024),
              video_category varchar(1024),
              video_author_id varchar(1024),
              video_is_published varchar(1024) default 'FALSE',
              video_created_at varchar(1024),
              video_seo_title varchar(1024),
              video_seo_description varchar(1024),
              video_seo_keywords varchar(1024),
              UNIQUE KEY id (id)
            ) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci AUTO_INCREMENT=1;";

            require_once(ABSPATH . 'wp-admin/includes/upgrade.php');
            dbDelta($sql);
        }

        // create next table below
        // ...
    }

}