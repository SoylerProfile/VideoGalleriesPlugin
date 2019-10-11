<?php

namespace admin\classes;

require __DIR__ . '/../../config.php';

class Videosurfpro_Video
{

    private $video_name;
    private $video_description;
    private $video_link;
    private $video_id;
    private $video_provider;
    private $video_category;
    private $video_author_id;
    private $video_created_at;
    private $video_seo_title;
    private $video_seo_description;
    private $video_seo_keywords;

    public function __construct($video_name, $video_description, $video_link, $video_id, $video_provider, $video_category, $video_author_id, $video_created_at, $video_seo_title, $video_seo_description, $video_seo_keywords)
    {
        $this->video_name = $video_name;
        $this->video_description = $video_description;
        $this->video_link = $video_link;
        $this->video_id = $video_id;
        $this->video_provider = $video_provider;
        $this->video_category = $video_category;
        $this->video_author_id = $video_author_id;
        $this->video_created_at = $video_created_at;
        $this->video_seo_title = $video_seo_title;
        $this->video_seo_description = $video_seo_description;
        $this->video_seo_keywords = $video_seo_keywords;
    }

    public function add_video() {
        if($this->validate()) {
            // code if data is ok
            global $wpdb;

            $table = $wpdb->prefix . VIDEOS_TABLE;

            $wpdb->insert(
                $table,
                array(
                    'video_name' => $this->video_name,
                    'video_description' => $this->video_description,
                    'video_link' => $this->video_link,
                    'video_id' => $this->video_id,
                    'video_provider' => $this->video_provider,
                    'video_category' => $this->video_category,
                    'video_author_id' => $this->video_author_id,
                    'video_created_at' => $this->video_created_at,
                    'video_seo_title' => $this->video_seo_title,
                    'video_seo_description' => $this->video_seo_description,
                    'video_seo_keywords' => $this->video_seo_keywords,
                ),
                array('%s', '%s', '%s', '%s', '%s', '%s', '%s', '%s', '%s', '%s', '%s',)
            );

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