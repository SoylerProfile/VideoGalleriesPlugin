<?php

// includes
require __DIR__ . '/includes/class-videosurfpro-activator.php';

use includes\Videosurfpro_Activator;
use includes\Videosurfpro_Shortcode;

// admin
require __DIR__ . '/admin/class-videosurfpro-admin.php';

use admin\Videosurfpro_Admin;

// TEMPORARY
use admin\classes\Videosurfpro_Video;
use admin\classes\Videosurfpro_Category;
use libraries\YouTubeAPI\DataGetter;

// ************************************************************ //

function videosurfpro_activation()
{
    Videosurfpro_Activator::activate();
}

function videosurfpro_uninstall()
{
    // uninstall the plugin and drop all tables
}

// ------------------------------------------------------------ //

// Admin menu
function videosurfpro_admin_menu()
{
    Videosurfpro_Admin::add_plugin_admin_menu();
}

function videosurfpro_display_admin_menu_main()
{
    Videosurfpro_Admin::videosurfpro_display_admin_menu_main();
}

function videosurfpro_display_submenu_all_videos()
{
    Videosurfpro_Admin::videosurfpro_display_submenu_all_videos();
}

function videosurfpro_display_submenu_all_categories()
{
    Videosurfpro_Admin::videosurfpro_display_submenu_all_categories();
}

function videosurfpro_display_submenu_all_galleries()
{
    Videosurfpro_Admin::videosurfpro_display_submenu_all_galleries();
}

function videosurfpro_display_submenu_add_video()
{
    Videosurfpro_Admin::videosurfpro_display_submenu_add_video();
}

function videosurfpro_display_submenu_add_category()
{
    Videosurfpro_Admin::videosurfpro_display_submenu_add_category();
}

function videosurfpro_display_submenu_advertisement()
{
    Videosurfpro_Admin::videosurfpro_display_submenu_advertisement();
}

function videosurfpro_display_submenu_providers()
{
    Videosurfpro_Admin::videosurfpro_display_submenu_providers();
}

function videosurfpro_display_submenu_faq()
{
    Videosurfpro_Admin::videosurfpro_display_submenu_faq();
}

/**
 * Hidden menus
 */
function videosurfpro_display_submenu_edit_video()
{
    Videosurfpro_Admin::videosurfpro_display_submenu_edit_video();
}

function videosurfpro_display_submenu_edit_category()
{
    Videosurfpro_Admin::videosurfpro_display_submenu_edit_category();
}

function videosurfpro_display_submenu_youtube_settings()
{
    Videosurfpro_Admin::videosurfpro_display_submenu_youtube_settings();
}

/**
 * ROUTES
 */
function videosurfpro_admin_routes()
{
    Videosurfpro_Admin::videosurfpro_admin_routes();
}

// ------------------------------AJAX FUNCTIONS------------------------------ //

function videosurfpro_delete_video()
{
    $video_id = $_POST['video_id'];
    $result = Videosurfpro_Video::delete_video_by_id($video_id);
    if ($result) {
        echo 'Your video was successfully deleted';
    } else {
        echo "Can not delete the video";
    }
    wp_die();
}

function videosurfpro_change_video_status()
{
    $video_id = $_POST['video_id'];
    $new_status = $_POST['new_value'];
    Videosurfpro_Video::change_video_status($video_id, $new_status);

    wp_die();
}

function videosurfpro_delete_category()
{
    $category_id = $_POST['category_id'];
    $result = Videosurfpro_Category::delete_category_by_id($category_id);
    if ($result) {
        echo 'Your category was successfully deleted';
    } else {
        echo "Can not delete the category <br>";
    }
    wp_die();
}

function videosurfpro_get_video_data_by_link()
{
    $video_link = $_POST['video_link'];
    $data_getter = new DataGetter();
    $video_json_data = $data_getter->get_json_video_data($video_link);
    echo $video_json_data;
    wp_die();
}

//function videosurfpro_enqueue_scripts() {
//    wp_enqueue_style('videosurfpro-admin-style', plugins_url('/admin/css/videosurfpro-admin-style.css', __FILE__));
//}

// ------------------------------OUR WIDGETS------------------------------ //

function videosurfpro_register_widgets()
{
    register_widget(__NAMESPACE__ . '\\Videosurfpro_Last_Videos_Widget');
    register_widget(__NAMESPACE__ . '\\Videosurfpro_Popular_Videos_Widget');
    register_widget(__NAMESPACE__ . '\\Videosurfpro_Video_Categories_Widget');
}

class Videosurfpro_Last_Videos_Widget extends WP_Widget
{
    public function __construct()
    {
        $widget_options = array(
            'classname' => 'videosurfpro_last_videos_widget',
            'description' => 'Videosurfpro - Last published Videos'
        );
        parent::__construct('videosurfpro_last_videos_widget', 'Last Videos', $widget_options);
    }

    public function widget($args, $instance)
    {
        echo "HERE ARE LAST VIDEOS <br>";
    }

    public function form($instance)
    {
        $title = !empty($instance['title']) ? $instance['title'] : ''; ?>
        <p>
        <label for="<?php echo $this->get_field_id('title'); ?>">Title:</label>
        <input type="text" id="<?php echo $this->get_field_id('title'); ?>"
               name="<?php echo $this->get_field_name('title'); ?>" value="<?php echo esc_attr($title); ?>"/>
        </p><?php
    }

    public function update($new_instance, $old_instance)
    {
        $instance = $old_instance;
        $instance['title'] = strip_tags($new_instance['title']);
        return $instance;
    }
}

class Videosurfpro_Popular_Videos_Widget extends WP_Widget
{
    public function __construct()
    {
        $widget_options = array(
            'classname' => 'videosurfpro_popular_videos_widget',
            'description' => 'Videosurfpro - Popular Videos'
        );
        parent::__construct('videosurfpro_popular_videos_widget', 'Popular Videos', $widget_options);
    }

    public function widget($args, $instance)
    {
        echo "HERE ARE Popular VIDEOS <br>";
    }

    public function form($instance)
    {
        $title = !empty($instance['title']) ? $instance['title'] : ''; ?>
        <p>
        <label for="<?php echo $this->get_field_id('title'); ?>">Title:</label>
        <input type="text" id="<?php echo $this->get_field_id('title'); ?>"
               name="<?php echo $this->get_field_name('title'); ?>" value="<?php echo esc_attr($title); ?>"/>
        </p><?php
    }

    public function update($new_instance, $old_instance)
    {
        $instance = $old_instance;
        $instance['title'] = strip_tags($new_instance['title']);
        return $instance;
    }
}

class Videosurfpro_Video_Categories_Widget extends WP_Widget
{
    public function __construct()
    {
        $widget_options = array(
            'classname' => 'videosurfpro_video_categories_widget',
            'description' => 'Videosurfpro - Video Categories'
        );
        parent::__construct('videosurfpro_video_categories_widget', 'Video Categories', $widget_options);
    }

    public function widget($args, $instance)
    {
        echo "Here Are Video Categories <br>";
    }

    public function form($instance)
    {
        $title = !empty($instance['title']) ? $instance['title'] : ''; ?>
        <p>
        <label for="<?php echo $this->get_field_id('title'); ?>">Title:</label>
        <input type="text" id="<?php echo $this->get_field_id('title'); ?>"
               name="<?php echo $this->get_field_name('title'); ?>" value="<?php echo esc_attr($title); ?>"/>
        </p><?php
    }

    public function update($new_instance, $old_instance)
    {
        $instance = $old_instance;
        $instance['title'] = strip_tags($new_instance['title']);
        return $instance;
    }
}