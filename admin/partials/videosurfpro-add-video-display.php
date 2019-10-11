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
    $video_name = $_POST['video_name'];
    $video_description = $_POST['video_description'];
    $video_link = $_POST['video_link'];
    $video_id = $_POST['video_id'];
    $video_provider = 1;                          // сделать динамическим
    $video_category = $_POST['video_category'];
    $video_author_id = 1;                         // сделать динамическим
    $video_created_at = '10.10.2019';             // сделать динамическим
    $video_seo_title = $_POST['video_seo_title'];
    $video_seo_description = $_POST['video_seo_description'];
    $video_seo_keywords = $_POST['video_seo_keywords'];

    $video = new Videosurfpro_Video($video_name, $video_description, $video_link, $video_id, $video_provider, $video_category, $video_author_id, $video_created_at, $video_seo_title, $video_seo_description, $video_seo_keywords);
    $result = $video->add_video();

    if($result)
        echo 'Video was successfully added';
    else
        echo 'Check the specified data';
}

?>

<!-- This file should primarily consist of HTML with a little bit of PHP. -->

<h1>ADD a new video</h1>

<h1>YouTube</h1>

<form action="" method="post">
    <div>Video Name: <input type="text" name="video_name" required></div>
    <div>Video Description: <input type="text" name="video_description" required></div>
    <div>Link: <input type="text" name="video_link" required></div>
    <div>Video ID: <input type="text" name="video_id" required></div>
    <div>Video Provider <input type="text" name="video_provider" required></div>
    <div>Video ID: <input type="text" name="video_category" required></div>
    <div>Video Author: <input type="text" name="video_author" required></div>
    <div>Video SEO TITLE: <input type="text" name="video_seo_title" required></div>
    <div>Video SEO DESCRIPTION: <input type="text" name="video_seo_description" required></div>
    <div>Video SEO KEYWORDS: <input type="text" name="video_seo_keywords" required></div>
    <div><input name='submit' type="submit" value="Добавить"></div>
</form>