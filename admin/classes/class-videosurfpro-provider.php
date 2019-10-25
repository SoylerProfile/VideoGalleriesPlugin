<?php

namespace admin\classes;

class Videosurfpro_Provider
{

    private $provider_name;
    private $provider_api_key;

    public function __construct($provider_name, $provider_api_key)
    {
        $this->provider_name = $provider_name;
        $this->provider_api_key = $provider_api_key;
    }

    public function save()
    {
        $provider_name = $this->provider_name;
        $provider_api_key = $this->provider_api_key;
        if ($this->check_if_api_key_exists()) {
            // UPDATE
            global $wpdb;
            $table = $wpdb->prefix . PROVIDERS_TABLE;
            $result = $wpdb->update($table,
                array('provider_name' => $provider_name, 'provider_api_key' => $provider_api_key),
                array('provider_name' => $provider_name)
            );
            if ($result) {
                return 'updated';
            } else {
                return 'cannot_update';
            }
        } else {
            // SET
            global $wpdb;
            $table = $wpdb->prefix . PROVIDERS_TABLE;
            $result = $wpdb->insert($table, array('provider_name' => $provider_name, 'provider_api_key' => $provider_api_key));
            if($result) {
                return 'created';
            } else {
                return 'cannot_insert';
            }
        }
    }

    private function check_if_api_key_exists()
    {
        global $wpdb;
        $table = $wpdb->prefix . PROVIDERS_TABLE;
        $provider_name = $this->provider_name;
        $sql = "SELECT * FROM $table WHERE `provider_name`='" . $provider_name . "'";
        $result = $wpdb->get_row($sql);
        return $result;
    }

    public static function get_provider_api_key($provider_name) {
        global $wpdb;
        $table = $wpdb->prefix . PROVIDERS_TABLE;
        $sql = "SELECT `provider_api_key` FROM $table WHERE `provider_name`='" . $provider_name . "'";
        $result = $wpdb->get_var($sql);
        return $result;
    }
}