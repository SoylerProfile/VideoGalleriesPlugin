<?php

namespace libraries\YouTubeAPI;

class DataGetter
{
//    private $api_key = 'AIzaSyBGsDH2N4Gt5A92hY3eYoa69WNJKZKsOpM';
    private $api_key;
    private $pattern;

    public function __construct()
    {
        $this->api_key = $this->get_api_key();
        $this->pattern = 'https://www.googleapis.com/youtube/v3/videos?part=snippet&key=' . $this->api_key . '&id=';
    }

    public function get_video_data($video_link)
    {
        $video_id = $this->get_video_id($video_link);
        $json_output = file_get_contents($this->pattern .= $video_id);
        $video_data_array = json_decode($json_output, true);
//        echo "<pre>";
//        print_r($json_video_data_array);
//        die();
        return $video_data_array;
    }

    private function get_video_id($video_link)
    {
        parse_str(parse_url($video_link, PHP_URL_QUERY), $arguments);
        $video_id = $arguments['v'];
        return $video_id;
    }

    public function get_json_video_data($video_link)
    {
        $video_id = $this->get_video_id($video_link);
        $json_video_data = file_get_contents($this->pattern .= $video_id);
        return $json_video_data;
    }

    private function get_api_key()
    {
        global $wpdb;
        $table = $wpdb->prefix . PROVIDERS_TABLE;
        $sql = "SELECT `provider_api_key` FROM $table WHERE `provider_name`='YouTube'";
        $api_key = $wpdb->get_var($sql);
        return $api_key;
    }
}