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

//require __DIR__ . '/../classes/class-videosurfpro-video.php';
use admin\classes\Videosurfpro_Video;

if(isset($_POST['submit'])) {
    $video_name = $_POST['video_name'];
    $video_slug = 'SLUG';
    $video_description = $_POST['video_description'];
    $video_link = $_POST['video_link'];
    $video_id = $_POST['video_id'];
    $video_provider = $_POST['video_provider'];
    $video_category = $_POST['video_category'];
    $video_author_id = get_current_user_id();
    $video_created_at = date("m.d.y");
    $video_seo_title = $_POST['video_seo_title'];
    $video_seo_description = $_POST['video_seo_description'];
    $video_seo_keywords = $_POST['video_seo_keywords'];

    $video = new Videosurfpro_Video($video_name, $video_slug, $video_description, $video_link, $video_id, $video_provider, $video_category, $video_author_id, $video_created_at, $video_seo_title, $video_seo_description, $video_seo_keywords);
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
    <input type="hidden" name="video_provider" value="YouTube" required>
    <div><input type="hidden" name="video_name" value="1" required></div>
    <div><input type="hidden" name="video_description" value="1" required></div>
    <div><input type="hidden" name="video_id" value="1" required></div>
    <div>Link: <input type="text" name="video_link" value="1" required></div>
    <div>Video Category: <input type="text" name="video_category" value="1" required></div>
    <div>Video SEO TITLE: <input type="text" name="video_seo_title" value="1" required></div>
    <div>Video SEO DESCRIPTION: <input type="text" name="video_seo_description" value="1" required></div>
    <div>Video SEO KEYWORDS: <input type="text" name="video_seo_keywords" value="1" required></div>
    <div><input name='submit' type="submit" value="Добавить"></div>
</form>