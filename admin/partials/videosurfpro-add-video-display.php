<?php
/**
 * Provide a admin area view for the plugin
 *
 * This file is used to markup the admin-facing aspects of the plugin.
 *
 * @link       https://freelancehunt.com/freelancer/Soyler.html
 * @since      1.0.0
 *
 * @package    Videosurfpro
 * @subpackage Videosurfpro/admin/partials
 */

require __DIR__ . '/../classes/class-videosurfpro-video.php';
use admin\classes\Videosurfpro_Video;

if(isset($_POST['submit'])) {

    $video_link = $_POST['video_link'];
    $video_id = $_POST['video_id'];

    $video = new Videosurfpro_Video($video_link, $video_id);
    $result = $video->add_video();

    if($result)
        echo 'Video was successfully added';
    else
        echo 'Check the specified data';

    echo $video->video_link;
    echo $video->video_id;
}

?>

<!-- This file should primarily consist of HTML with a little bit of PHP. -->

<h1>ADD a new video</h1>

<h1>YouTube</h1>

<form action="" method="post">
    <div>Link: <input type="text" name="video_link"></div>
    <div>video ID: <input type="text" name="video_id"></div>
    <div><input name='submit' type="submit" value="Добавить"></div>
</form>