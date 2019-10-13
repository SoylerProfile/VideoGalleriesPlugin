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

$all_videos = Videosurfpro_Video::get_all_videos();


?>
<!-- This file should primarily consist of HTML with a little bit of PHP. -->

<style>
    #videosurfpro-all-videos-container {
        margin: 25px;
        margin-left: 0;
        margin-top: 10px;
        background-color: #ffffff;
        text-align: center;
    }
    .videosurfpro-single-video-container {
        display: grid;
        grid-template-columns: 1fr 3fr 1fr 1fr 1fr 1fr 1fr;
        padding: 10px;
    }
    .videosurfpro-video-draft {
        background-color: #f9f9f9;
    }
    #videosurfpro-videos-filter {
        margin: 25px;
        margin-left: 0;
        margin-bottom: 0;
        background-color: #ffffff;
        text-align: center;
        display: grid;
        grid-template-columns: 1fr 1fr;
    }
    .videosurfpro-videos-filter-element {
        padding: 10px;
    }

    hr {
        margin: 0;
    }
</style>

<h1>All VIDEOS</h1>

<div id="videosurfpro-videos-filter">
    <div class="videosurfpro-videos-filter-element">
        <span><?php echo count($all_videos); ?> Videos</span>
    </div>
    <div class="videosurfpro-videos-filter-element">
        <input type="search" name="s" value="" >
        <input type="submit" class="button" value="Search Videos">
    </div>
</div>

<div id="videosurfpro-all-videos-container">
    <hr>
    <?php foreach($all_videos as $video) : ?>
        <div class="videosurfpro-single-video-container <?php echo ($video->video_is_published == 'FALSE') ? 'videosurfpro-video-draft' : '' ?>">
            <div><?=$video->id?></div>
            <div><?=$video->video_name?></div>
            <div><?=$video->video_provider?></div>
            <div>
                <?php echo ($video->video_is_published == 'TRUE') ? "<a style='color:green; cursor:pointer;'>Published</a>" : "<a style='color:red; cursor:pointer;'>Draft</a>" ?>
            </div>
            <div>
                <form action="" method="post">
                    <input type="hidden" name="edit_video_by_id" value="<?=$video->id?>">
                    <input type="submit" class="button" value="Edit">
                </form>
            </div>
            <div>
                <form action="" method="post">
                    <input type="hidden" name="delete_video_by_id" value="<?=$video->id?>">
                    <input type="submit" class="button" value="Delete">
                </form>
            </div>
            <div>
                <form action="" method="post">
                    <input type="hidden" name="show_video_by_id" value="<?=$video->id?>">
                    <input type="submit" class="button" value="Show">
                </form>
            </div>
        </div>
        <hr>
    <?php endforeach;?>
</div>