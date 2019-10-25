<?php

namespace admin\classes;

class Videosurfpro_Advertisement
{

    private $advertisement_name;
    private $advertisement_link;

    public function __construct($advertisement_name, $advertisement_link)
    {
        $this->advertisement_name = $advertisement_name;
        $this->advertisement_link = $advertisement_link;
    }

    public function save()
    {
        $advertisement_name = $this->advertisement_name;
        $advertisement_link = $this->advertisement_link;
        if ($this->check_if_advertisement_exists()) {
            return 'The Advertisement already exists in the database';
        } else {
            global $wpdb;
            $table = $wpdb->prefix . ADVERTISEMENTS_TABLE;
            $result = $wpdb->insert($table, array('advertisement_name' => $advertisement_name, 'advertisement_link' => $advertisement_link));
            if($result) {
                return true;
            } else {
                return false;
            }
        }
    }

    private function check_if_advertisement_exists()
    {
        global $wpdb;
        $table = $wpdb->prefix . ADVERTISEMENTS_TABLE;
        $advertisement_link = $this->advertisement_link;
        $sql = "SELECT * FROM $table WHERE `advertisement_link`='" . $advertisement_link . "'";
        $result = $wpdb->get_row($sql);
        return $result;
    }
    
    public static function get_all_advertisements() {
        global $wpdb;
        $table = $wpdb->prefix . ADVERTISEMENTS_TABLE;
        $sql = "SELECT * FROM `$table`";
        $all_advertisements = $wpdb->get_results($sql);
        return $all_advertisements;
    }
}