<?php

namespace admin\classes;

class Videosurfpro_Video
{

    private $video;
    public $video_link;
    public $video_id;
    private $database;

    public function __construct($video_link, $video_id)
    {
        $this->video_link = $video_link;
        $this->video_id = $video_id;
    }

    public function add_video() {
        if($this->validate()) {
            global $wpdb;
            // code if data is ok

            return true;
        }
        else {
            // code if data is not ok

            return false;
        }
    }

    private function validate() {
        if( $this->video_link == null )
            return false;
        if ($this->video_id == null)
            return false;
        return true;
    }

}