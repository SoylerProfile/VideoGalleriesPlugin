<?php

namespace libraries\YouTubeAPI;

class DataGetter
{
    private $api_key = 'AIzaSyBGsDH2N4Gt5A92hY3eYoa69WNJKZKsOpM';
    private $pattern;

    public function __construct()
    {
        $this->pattern = 'https://www.googleapis.com/youtube/v3/videos?part=snippet&key=' . $this->api_key . '&id=';
    }

    public function get_video_data($video_id) {
        $json_output = file_get_contents($this->pattern .= $video_id);
        $json_video_data_array = json_decode($json_output, true);
        return $json_video_data_array;
    }

}