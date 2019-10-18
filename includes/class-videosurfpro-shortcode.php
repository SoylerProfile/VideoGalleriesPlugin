<?php

namespace includes;

use admin\classes\Videosurfpro_Video;

class Videosurfpro_Shortcode {

    public static function register_video_shortcode($request) {
        // return Video shortcode View
        if(is_admin()) {
            return '';
        }
        else {
//            $video_id = $request['id'];
//            $video_youtube_id = Videosurfpro_Video::get_video_youtube_id_by_video_id($video_id);
//            $domain = get_site_url();
            $iframe = '<iframe id="ytplayer" type="text/html" width="640" height="360"
                        src="http://www.youtube.com/embed/EM2iqeQywZk' . '?autoplay=1&origin=video.devfuture.pro'  . '"
                        frameborder="0"/>';
            return $iframe;
        }
    }

}
