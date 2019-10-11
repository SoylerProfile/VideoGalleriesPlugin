<?php

namespace includes;

class Videosurfpro_Activator {

    public static function activate() {
        self::create_tables();
    }

    private static function create_tables() {

        global $wpdb;
        $wpdb->show_errors();
        
        $table_name = $wpdb->prefix . "videosurfpro_videos";

        if ($wpdb->get_var("show tables like '$table_name'") != $table_name) {
            $sql = "CREATE TABLE $table_name (
              id INTEGER(11) UNSIGNED AUTO_INCREMENT,
              link varchar(1024),
              video_id varchar(1024),
              UNIQUE KEY id (id)
            ) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci AUTO_INCREMENT=1;";

            require_once(ABSPATH . 'wp-admin/includes/upgrade.php');
            dbDelta($sql);
        }

        // create next table below
        // ...
    }

}