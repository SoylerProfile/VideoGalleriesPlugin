<?php

namespace includes\Videosurfpro_Widgeta;

require_once ABSPATH . 'wp-includes/class-wp-widget.php';

use \WP_Widget as WP_Widget;

class Videosurfpro_Widget extends WP_Widget
{
    public function __construct()
    {
        $widget_options = array(
            'classname' => 'videosurfpro_widget',
            'description' => 'videosurfpro_widget_description'
        );
        parent::__construct('videosurfpro_widget', 'Example Widget', $widget_options);
    }

    public function widget($args, $instance)
    {
        echo 'Hi, It is widget output';
    }

    public function form($instance)
    {
        $title = ! empty( $instance['title'] ) ? $instance['title'] : ''; ?>
        <p>
        <label for="<?php echo $this->get_field_id( 'title' ); ?>">Title:</label>
        <input type="text" id="<?php echo $this->get_field_id( 'title' ); ?>" name="<?php echo $this->get_field_name( 'title' ); ?>" value="<?php echo esc_attr( $title ); ?>" />
        </p><?php
    }

    public function update($new_instance, $old_instance)
    {
        $instance = $old_instance;
        $instance['title'] = strip_tags($new_instance['title']);
        return $instance;
    }
}