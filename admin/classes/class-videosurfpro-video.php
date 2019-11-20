<?php

namespace admin\classes;

use libraries\YouTubeAPI\DataGetter;

class Videosurfpro_Video
{

    private $video_name;
    private $video_slug;
    private $video_description;
    private $video_link;
    private $video_id;
    private $video_provider;
    private $video_category_id;
    private $video_author_id;
    private $video_created_at;
    private $video_seo_title;
    private $video_seo_description;
    private $video_seo_keywords;

    public function __construct($video_name, $video_slug, $video_description, $video_link, $video_provider, $video_category_id, $video_author_id, $video_created_at, $video_seo_title, $video_seo_description, $video_seo_keywords)
    {
        $this->video_name = $video_name;
        $this->video_slug = $video_slug;
        $this->video_description = $video_description;
        $this->video_link = $video_link;
//        $this->video_id = $video_id;
        $this->video_provider = $video_provider;
        $this->video_category_id = $video_category_id;
        $this->video_author_id = $video_author_id;
        $this->video_created_at = $video_created_at;
        $this->video_seo_title = $video_seo_title;
        $this->video_seo_description = $video_seo_description;
        $this->video_seo_keywords = $video_seo_keywords;

        $this->get_video_data();
    }

    public function add_video()
    {
        if ($this->validate()) {
            //нужно отрефакторить, создать класс валидатор
            $this->validate_all_data();
            if ($this->check_if_video_exists($this->video_link))
                return 'This video already exists in the database!';
//            $this->print_all_data();
//            die();

            // code if data is ok
            global $wpdb;

            $table = $wpdb->prefix . VIDEOS_TABLE;

            $result = $wpdb->insert(
                $table,
                array(
                    'video_name' => $this->video_name,
                    'video_slug' => $this->video_slug,
                    'video_description' => $this->video_description,
                    'video_link' => $this->video_link,
                    'video_id' => $this->video_id,
                    'video_provider' => $this->video_provider,
                    'video_category_id' => $this->video_category_id,
                    'video_author_id' => $this->video_author_id,
                    'video_created_at' => $this->video_created_at,
                    'video_seo_title' => $this->video_seo_title,
                    'video_seo_description' => $this->video_seo_description,
                    'video_seo_keywords' => $this->video_seo_keywords,
                ),
                array('%s', '%s', '%s', '%s', '%s', '%s', '%d', '%d', '%s', '%s', '%s', '%s')
            );
            if ($result)
                return true;
            else
                return false;
        } else {
            // code if data is not ok
            return false;
        }
    }

    private function validate()
    {
        if ($this->video_link == null)
            return false;
        if ($this->video_id == null)
            return false;
        return true;
    }

    private function get_video_data()
    {
        $youtube_video_data_getter = new DataGetter();
        // get DATA
        $video_data = $youtube_video_data_getter->get_video_data($this->video_link);
        // set DATA
        $this->video_name = $video_data['items'][0]['snippet']['title'];
        $this->video_description = $video_data['items'][0]['snippet']['description'];
        $this->video_id = $video_data['items'][0]['id'];
    }

    public static function get_all_videos()
    {
        global $wpdb;
        $table = $wpdb->prefix . VIDEOS_TABLE;
        $sql = "SELECT * FROM `$table`";
        $all_videos = $wpdb->get_results($sql);
        return $all_videos;
    }

    public function print_all_data()
    {
        echo 'video_name - ' . $this->video_name . "<br>";
        echo 'video_slug - ' . $this->video_slug . "<br>";
        echo 'video_description - ' . $this->video_description . "<br>";
        echo 'video_link - ' . $this->video_link . "<br>";
        echo 'video_id - ' . $this->video_id . "<br>";
        echo 'video_provider - ' . $this->video_provider . "<br>";
        echo 'video_category_id - ' . $this->video_category_id . "<br>";
        echo 'video_author_id - ' . $this->video_author_id . "<br>";
        echo 'video_created_at - ' . $this->video_created_at . "<br>";
        echo 'video_seo_title - ' . $this->video_seo_title . "<br>";
        echo 'video_seo_description - ' . $this->video_seo_description . "<br>";
        echo 'video_seo_keywords - ' . $this->video_seo_keywords . "<br>";
    }

    private function validate_all_data()
    {
        $this->video_name = htmlspecialchars(strip_tags(stripslashes(trim($this->video_name))));
        $this->video_slug = htmlspecialchars(strip_tags(stripslashes(trim($this->video_slug))));
        $this->video_description = htmlspecialchars(strip_tags(stripslashes(trim($this->video_description))));
        $this->video_link = htmlspecialchars(strip_tags(stripslashes(trim($this->video_link))));
//        $this->video_id = htmlspecialchars(strip_tags(stripslashes(trim($this->video_id))));
        $this->video_provider = htmlspecialchars(strip_tags(stripslashes(trim($this->video_provider))));
        $this->video_category_id = htmlspecialchars(strip_tags(stripslashes(trim($this->video_category_id))));
        $this->video_author_id = htmlspecialchars(strip_tags(stripslashes(trim($this->video_author_id))));
        $this->video_seo_title = htmlspecialchars(strip_tags(stripslashes(trim($this->video_seo_title))));
        $this->video_seo_description = htmlspecialchars(strip_tags(stripslashes(trim($this->video_seo_description))));
        $this->video_seo_keywords = htmlspecialchars(strip_tags(stripslashes(trim($this->video_seo_keywords))));

        $this->video_name = $this->remove_emoji($this->video_name);
        $this->video_slug = $this->remove_emoji($this->video_slug);
        $this->video_description = $this->remove_emoji($this->video_description);
//        $this->video_id = $this->remove_emoji($this->video_id);
        $this->video_provider = $this->remove_emoji($this->video_provider);
        $this->video_category_id = $this->remove_emoji($this->video_category_id);
        $this->video_author_id = $this->remove_emoji($this->video_author_id);
        $this->video_seo_title = $this->remove_emoji($this->video_seo_title);
        $this->video_seo_description = $this->remove_emoji($this->video_seo_description);
        $this->video_seo_keywords = $this->remove_emoji($this->video_seo_keywords);

//        $result = $this->check_if_video_exists($this->video_link);
//
//        return $result;
    }

    private function remove_emoji($string)
    {

        $regex_emoticons = '/[\x{1F600}-\x{1F64F}]/u';
        $clear_string = preg_replace($regex_emoticons, '', $string);

        $regex_symbols = '/[\x{1F300}-\x{1F5FF}]/u';
        $clear_string = preg_replace($regex_symbols, '', $clear_string);

        $regex_transport = '/[\x{1F680}-\x{1F6FF}]/u';
        $clear_string = preg_replace($regex_transport, '', $clear_string);

        $regex_misc = '/[\x{2600}-\x{26FF}]/u';
        $clear_string = preg_replace($regex_misc, '', $clear_string);

        $regex_emoticons = '/[^\p{L}\p{N}\s]/u';
        $clear_string = preg_replace($regex_emoticons, '', $clear_string);

        return $clear_string;
    }

    public static function change_video_status($video_id, $new_value)
    {
        global $wpdb;
        $table = $wpdb->prefix . VIDEOS_TABLE;
        $wpdb->update($table, array('video_is_published' => $new_value), array('id' => $video_id));
    }

    public static function get_all_video_data_from_db($video_id)
    {
        global $wpdb;
        $table = $wpdb->prefix . VIDEOS_TABLE;
        $sql = "SELECT * FROM $table WHERE `id`=$video_id";
        $video_data = $wpdb->get_results($sql);
        return $video_data;
    }

    public static function update_video_data($id, $video_name, $video_slug, $video_description, $video_category_id, $video_seo_title, $video_seo_description, $video_seo_keywords)
    {
        global $wpdb;
        $table = $wpdb->prefix . VIDEOS_TABLE;
        $result = $wpdb->update($table,
            array('video_name' => $video_name, 'video_slug' => $video_slug, 'video_description' => $video_description, 'video_category_id' => $video_category_id, 'video_seo_title' => $video_seo_title, 'video_seo_description' => $video_seo_description, 'video_seo_keywords' => $video_seo_keywords),
            array('id' => $id)
        );
        return $result;
    }

    public static function delete_video_by_id($video_id)
    {
        global $wpdb;
        $table = $wpdb->prefix . VIDEOS_TABLE;
        $result = $wpdb->delete($table, array('id' => $video_id));
        return $result;
    }

    public static function get_video_youtube_id_by_video_id($video_id)
    {
        global $wpdb;
        $table = $wpdb->prefix . VIDEOS_TABLE;
        $result = $wpdb->get_var("SELECT `video_id` FROM $table WHERE `id`=$video_id");
        return $result;
    }

    public static function get_all_videos_orderby_latest_desc()
    {
        global $wpdb;
        $table = $wpdb->prefix . VIDEOS_TABLE;
        $sql = "SELECT * FROM $table ORDER BY `video_created_at` DESC";
        $all_latest_videos = $wpdb->get_results($sql);
        return $all_latest_videos;
    }

    public static function get_limit_videos_orderby_latest_desc($limit)
    {
        global $wpdb;
        $table = $wpdb->prefix . VIDEOS_TABLE;
        $sql = "SELECT * FROM $table ORDER BY `video_created_at` DESC LIMIT 0,$limit";
        $all_latest_videos = $wpdb->get_results($sql);
        return $all_latest_videos;
    }

    public static function get_all_videos_orderby_views_desc()
    {
        global $wpdb;
        $table = $wpdb->prefix . VIDEOS_TABLE;
        $sql = "SELECT * FROM $table ORDER BY `video_views` DESC";
        $all_orderby_views_videos = $wpdb->get_results($sql);
        return $all_orderby_views_videos;
    }

    public static function get_limit_all_videos_orderby_views_desc($limit)
    {
        global $wpdb;
        $table = $wpdb->prefix . VIDEOS_TABLE;
        $sql = "SELECT * FROM $table ORDER BY `video_views` DESC LIMIT 0,$limit";
        $all_orderby_views_videos = $wpdb->get_results($sql);
        return $all_orderby_views_videos;
    }

    public static function video_was_watched($video_id)
    {
        global $wpdb;
        $table = $wpdb->prefix . VIDEOS_TABLE;
        $sql = "UPDATE $table SET video_views = video_views + 1 WHERE id = $video_id";
        $wpdb->query($sql);
    }

    private function check_if_video_exists()
    {
        global $wpdb;
        $table = $wpdb->prefix . VIDEOS_TABLE;
        $video_id = $this->video_id;
        $sql = "SELECT * FROM $table WHERE `video_id` = '" . $video_id . "'";
        $result = $wpdb->get_row($sql);
        return $result;
    }

    public static function search_videos($text, $sort_by = 'video_views') {
        global $wpdb;
        $table = $wpdb->prefix . VIDEOS_TABLE;
        $current_user_id = get_current_user_id();
        $sql = "SELECT * FROM `$table` WHERE `video_author_id` = $current_user_id AND `video_name` LIKE '%".$text."%' ORDER BY `$sort_by` DESC";
        $all_videos = $wpdb->get_results($sql);
        return $all_videos;
    }

}