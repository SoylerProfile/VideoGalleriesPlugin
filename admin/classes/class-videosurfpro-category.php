<?php

namespace admin\classes;

class Videosurfpro_Category
{

    private $category_name;
    private $category_slug;
    private $category_description;
    private $category_created_at;
    private $category_seo_title;
    private $category_seo_description;
    private $category_seo_keywords;

    public function __construct($category_name, $category_slug, $category_description, $category_created_at, $category_seo_title, $category_seo_description, $category_seo_keywords)
    {
        $this->category_name = $category_name;
        $this->category_slug = $category_slug;
        $this->category_description = $category_description;
        $this->category_created_at = $category_created_at;
        $this->category_seo_title = $category_seo_title;
        $this->category_seo_description = $category_seo_description;
        $this->category_seo_keywords = $category_seo_keywords;
    }

    public function add_category() {
        if($this->validate()) {
            //нужно отрефакторить, создать класс валидатор

            // code if data is ok
            global $wpdb;

            $table = $wpdb->prefix . CATEGORIES_TABLE;

            $result = $wpdb->insert(
                $table,
                array(
                    'category_name' => $this->category_name,
                    'category_slug' => $this->category_slug,
                    'category_description' => $this->category_description,
                    'category_created_at' => $this->category_created_at,
                    'category_seo_title' => $this->category_seo_title,
                    'category_seo_description' => $this->category_seo_description,
                    'category_seo_keywords' => $this->category_seo_keywords,
                ),
                array('%s', '%s', '%s', '%s', '%s', '%s', '%s')
            );
            if($result)
                return true;
            else
                return false;
        }
        else {
            // code if data is not ok
            return false;
        }
    }

    private function validate() {
        // validation and return
        return true;
    }

    public static function get_all_categories() {
        global $wpdb;
        $table = $wpdb->prefix . CATEGORIES_TABLE;
        $sql = "SELECT * FROM `$table`";
        $all_categories = $wpdb->get_results($sql);
        return $all_categories;
    }

    public static function get_categories_with_pagination($current_page, $items_on_page) {
        $start = ($current_page * $items_on_page) - $items_on_page;
        global $wpdb;
        $table = $wpdb->prefix . CATEGORIES_TABLE;
        $sql = "SELECT * FROM `$table` LIMIT $start,$items_on_page";
        $all_categories = $wpdb->get_results($sql);
        return $all_categories;
    }

    public static function search_categories($text) {
        global $wpdb;
        $table = $wpdb->prefix . CATEGORIES_TABLE;
        $sql = "SELECT * FROM `$table` WHERE `category_name` LIKE '%".$text."%'";
        $all_categories = $wpdb->get_results($sql);
        return $all_categories;
    }

    public function print_all_data() {
        echo 'video_name - ' . $this->video_name . "<br>";
        echo 'video_slug - ' . $this->video_slug . "<br>";
        echo 'video_description - ' . $this->video_description . "<br>";
        echo 'video_link - ' . $this->video_link . "<br>";
        echo 'video_id - ' . $this->video_id . "<br>";
        echo 'video_provider - ' . $this->video_provider . "<br>";
        echo 'video_category - ' . $this->video_category . "<br>";
        echo 'video_author_id - ' . $this->video_author_id . "<br>";
        echo 'video_created_at - ' . $this->video_created_at . "<br>";
        echo 'video_seo_title - ' . $this->video_seo_title . "<br>";
        echo 'video_seo_description - ' . $this->video_seo_description . "<br>";
        echo 'video_seo_keywords - ' . $this->video_seo_keywords . "<br>";
    }

    public static function get_all_category_data_from_db($category_id) {
        global $wpdb;
        $table = $wpdb->prefix . CATEGORIES_TABLE;
        $sql = "SELECT * FROM $table WHERE `id`=$category_id";
        $category_data = $wpdb->get_results($sql);
        return $category_data;
    }

    public static function update_category_data($id, $category_name, $category_slug, $category_description, $category_seo_title, $category_seo_description, $category_seo_keywords) {
        global $wpdb;
        $table = $wpdb->prefix . CATEGORIES_TABLE;
        $result = $wpdb->update($table,
            array('category_name' => $category_name, 'category_slug' => $category_slug, 'category_description' => $category_description, 'category_seo_title' => $category_seo_title, 'category_seo_description' => $category_seo_description, 'category_seo_keywords' => $category_seo_keywords),
            array('id' => $id)
        );
        return $result;
    }

    public static function delete_category_by_id($category_id) {
        global $wpdb;
        $table = $wpdb->prefix . CATEGORIES_TABLE;
        $result = $wpdb->delete($table, array('id' => $category_id));
        return $result;
    }
}