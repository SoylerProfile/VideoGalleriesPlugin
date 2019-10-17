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

// Нужно для пагинации
$items_on_page = 3;
$current_page = (isset($_GET['paged']) && $_GET['paged'] > 0) ? (int) $_GET['paged'] : 1;
$all_videos = Videosurfpro_Video::get_all_videos();
$videos_with_pagination = Videosurfpro_Video::get_videos_with_pagination($current_page, $items_on_page);

// Реализация поиска видео
if(isset($_POST['search_videos'])) {
    $text = $_POST['text'];
    $all_videos = Videosurfpro_Video::search_videos($text);
    $videos_with_pagination = $all_videos;
}

// Смена статуса видео
if(isset($_GET['change_video_status'])) {
    $video_id = $_GET['video_id'];
    $new_status = $_GET['new_value'];
    Videosurfpro_Video::change_video_status($video_id, $new_status);
}

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

    /*  PAGINATION    */
    .pagination {
        display: inline-block;
        margin: 15px;
        margin-bottom: 0;
    }

    .pagination a {
        color: black;
        float: left;
        padding: 8px 16px;
        text-decoration: none;
    }

    .pagination a.active {
        background-color: #4CAF50;
        color: white;
        border-radius: 5px;
    }

    .pagination a:hover:not(.active) {
        background-color: #ddd;
        border-radius: 5px;
    }

    hr {
        margin: 0;
    }
</style>

<h1>All VIDEOS</h1>

<!--    FILTER    -->
<div id="videosurfpro-videos-filter">
    <div class="videosurfpro-videos-filter-element">
        <span><?php echo count($all_videos); ?> Videos</span>
    </div>
    <div class="videosurfpro-videos-filter-element">
        <form action="" method="POST">
            <input type="search" name="text" value="" placeholder="Type video name..." >
            <input type="submit" name="search_videos" class="button" value="Search Videos">
        </form>
    </div>
</div>

<!--    PAGINATION    -->
<?php

$pages = ceil(count($all_videos) / $items_on_page);
$previous_page = $current_page - 1;
$next_page = $current_page + 1;

?>
<!--<div class="pagination">-->
<!--    --><?php //if($pages > 1) : ?>
<!--        --><?php //if($previous_page >= 1) : ?>
<!--            <a href="?page=videosurfpro_submenu_all_videos&paged=--><?//=$previous_page?><!--">&laquo;</a>-->
<!--        --><?php //endif; ?>
<!--        <a href="?page=videosurfpro_submenu_all_videos&paged=--><?//=$current_page?><!--">--><?//=$current_page?><!--</a>-->
<!--        --><?php //if(count($all_videos) > $current_page * $items_on_page) : ?>
<!--            <a href="?page=videosurfpro_submenu_all_videos&paged=--><?//=$next_page?><!--">&raquo;</a>-->
<!--        --><?php //endif; ?>
<!--    --><?php //endif;?>
<!--</div>-->

<!--    VIDEOS    -->
<div id="videosurfpro-all-videos-container">
    <hr>
    <?php if(count($videos_with_pagination) >= 1) : ?>
        <?php for($i = 0; $i < count($videos_with_pagination); $i++) : ?>
            <div class="videosurfpro-single-video-container <?php echo ($videos_with_pagination[$i]->video_is_published == 'FALSE') ? 'videosurfpro-video-draft' : '' ?>">
                <div><?=$videos_with_pagination[$i]->id?></div>
                <div><?=$videos_with_pagination[$i]->video_name?></div>
                <div><?=$videos_with_pagination[$i]->video_provider?></div>
                <div>
                    <?php echo ($videos_with_pagination[$i]->video_is_published == 1) ? "<a style='color:green; cursor:pointer; text-decoration: none;' href='?page=videosurfpro_submenu_all_videos&change_video_status=true&new_value=0&video_id=". $videos_with_pagination[$i]->id ."'>Published</a>" : "<a style='color:red; cursor:pointer; text-decoration: none;' href='?page=videosurfpro_submenu_all_videos&change_video_status=true&new_value=1&video_id=". $videos_with_pagination[$i]->id ."'>Draft</a>" ?>
                </div>
                <div>
                    <form action="?page=videosurfpro_submenu_edit_video&video_id=<?=$videos_with_pagination[$i]->id?>" method="POST">
                        <input type="hidden" name="edit_video_by_id" value="<?=$videos_with_pagination[$i]->id?>">
                        <input type="submit" class="button" value="Edit">
                    </form>
                </div>
                <div>
                    <form action="" method="POST">
                        <input type="hidden" name="delete_video_by_id" value="<?=$videos_with_pagination[$i]->id?>">
                        <input type="submit" class="button" value="Delete">
                    </form>
                </div>
                <div>
                    <form action="" method="POST">
                        <input type="hidden" name="show_video_by_id" value="<?=$videos_with_pagination[$i]->id?>">
                        <input type="submit" class="button" value="Show">
                    </form>
                </div>
            </div>
        <?php endfor; ?>
    <?php else : ?>
        <div style="padding: 15px;">No Videos found.</div>
    <?php endif; ?>
</div>

<!--    PAGINATION    -->
<div class="pagination">
    <?php if($pages > 1) : ?>
        <?php if($previous_page >= 1) : ?>
            <a href="?page=videosurfpro_submenu_all_videos&paged=<?=$previous_page?>">&laquo;</a>
        <?php endif; ?>
        <a href="?page=videosurfpro_submenu_all_videos&paged=<?=$current_page?>"><?=$current_page?></a>
        <?php if(count($all_videos) > $current_page * $items_on_page) : ?>
            <a href="?page=videosurfpro_submenu_all_videos&paged=<?=$next_page?>">&raquo;</a>
        <?php endif; ?>
    <?php endif;?>
</div>