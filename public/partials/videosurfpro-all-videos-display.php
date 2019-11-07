<?php

use admin\classes\Videosurfpro_Video;
use admin\classes\Videosurfpro_Category;

// нужно в ALl видеос оставить только те видео, которые is_published!

// VIDEO SEARCH
if(isset($_GET['search_videos'])) {
    $text = $_GET['text'];
    $all_videos = Videosurfpro_Video::search_videos($text);
    // написать сортировку для видео из поиска
    // ...
    if (isset($_GET['sort_by']) && $_GET['sort_by'] == 'views') {
        $all_videos = Videosurfpro_Video::search_videos($text, 'video_views');
    } else if (isset($_GET['sort_by']) && $_GET['sort_by'] == 'last') {
        $all_videos = Videosurfpro_Video::search_videos($text, 'video_created_at');
    } else if (isset($_GET['sort_by']) && $_GET['sort_by'] == 'rating') {
        // тут надо написать метод получения видео с большим рейтингом
        $all_videos = Videosurfpro_Video::search_videos($text);
//        $all_videos = Videosurfpro_Video::get_all_videos();
    }
} else {
    // VIDEO SORT
    if (isset($_GET['sort_by']) && $_GET['sort_by'] == 'views') {
        $all_videos = Videosurfpro_Video::get_all_videos_orderby_views_desc();
    } else if (isset($_GET['sort_by']) && $_GET['sort_by'] == 'last') {
        $all_videos = Videosurfpro_Video::get_all_videos_orderby_latest_desc();
    } else if (isset($_GET['sort_by']) && $_GET['sort_by'] == 'rating') {
        // тут надо написать метод получения видео с большим рейтингом
        $all_videos = Videosurfpro_Video::get_all_videos();
    } else {
        $all_videos = Videosurfpro_Video::get_all_videos();
    }
}

// оставляем только опубликованные видео
$all_videos_published = array();
foreach($all_videos as $video) {
    if($video->video_is_published == 1)
        $all_videos_published[] = $video;
}
$all_videos = $all_videos_published;


$all_categories = Videosurfpro_Category::get_all_categories();;

$video_on_page = 4;

?>
<script>
    let videos_on_page = <?=$video_on_page?>;
</script>

<style>
    .invisible-video {
        display: none;
    }
</style>

    <!--Bootstrap and Other Vendors-->
    <link rel="stylesheet" href="/wp-content/plugins/videosurfpro/public/css/bootstrap.css">

    <!--Theme Styles-->
    <link rel="stylesheet" href="/wp-content/plugins/videosurfpro/public/css/style.css">
    <link rel="stylesheet" href="/wp-content/plugins/videosurfpro/public/css/responsive.css">

<section class="row search_filter">
    <div class="container">
        <div class="row m0">
            <!--Category Filter-->
            <div class="btn-group category_filter fleft">
                <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <span class="filter-option pull-left">All Category</span>
                    <span class="caret"></span>
                </button>
                <ul class="dropdown-menu" role="menu">
                    <li><a href="#"><span class="filter_text">All Categories</span><span class="badge"></span></a></li>
                    <?php foreach($all_categories as $category) : ?>
                    <?php $count_videos = Videosurfpro_Category::get_count_videos_in_category($category->id); ?>
                        <li><a href="#"><span class="filter_text"><?=$category->category_name;?></span><span class="badge"><?=$count_videos;?></span></a></li>
                    <?php endforeach; ?>
                </ul>
            </div>
            <!--Post Type Filter-->
            <div class="btn-group postTypeFilter fleft" data-toggle="buttons" id="sort_by_button">
                <label class="btn btn-primary <?php if(isset($_GET['sort_by']) && $_GET['sort_by'] == 'last') echo "active"?>" id="sort_by_latest">
                    <input type="radio" name="sort_by" value='last' <?php if(isset($_GET['sort_by']) && $_GET['sort_by'] == 'last') echo "checked='checked'"?>> Latest Videos
                </label>
                <label class="btn btn-primary <?php if(isset($_GET['sort_by']) && $_GET['sort_by'] == 'views') echo "active"?>" id="sort_by_views">
                    <input type="radio" name="sort_by" value="views" <?php if(isset($_GET['sort_by']) && $_GET['sort_by'] == 'views') echo "checked='checked'"?>> Most Views
                </label>
                <label class="btn btn-primary <?php if(isset($_GET['sort_by']) && $_GET['sort_by'] == 'rating') echo "active"?>" id="sort_by_rating">
                    <input type="radio" name="sort_by" value='rating' <?php if(isset($_GET['sort_by']) && $_GET['sort_by'] == 'rating') echo "checked='checked'"?>> Most Rates
                </label>
            </div>
            <!--Search Form-->
            <form action="" method="GET" id="search_videos_form" role="search" class="search_form fright">
                <input type="hidden" name="search_videos">
                <div class="input-group">
                    <input type="text" name="text" class="form-control" placeholder="Search Here">
                    <span class="input-group-addon"><button id='search_videos_button' type="submit"><img src="/wp-content/plugins/videosurfpro/public/images/search.png" alt=""></button></span>
                </div>
            </form>
        </div>
    </div>
</section>

<section class="row recent_uploads">
    <div class="container">
        <div class="row title_row">
            <h3>Videos</h3>
        </div>
        <div class="row media-grid content_video_posts"><div class="jscroll-inner">
                <?php if(count($all_videos) > 0) : ?>
                    <?php $current_video_number = 0;?>
                    <?php foreach($all_videos as $video) : ?>
                        <?php
                        $current_video_number++;

                        $category = Videosurfpro_Category::get_all_category_data_from_db($video->video_category_id);
                        $category = $category[0];
                        $category_name = $category->category_name;
                        ?>
                        <article class="col-sm-3 video_post postType3 <?php if($current_video_number > $video_on_page) echo 'invisible-video' ?>">
                            <div class="inner row m0">
                                <a href="?videosurfpro_video_id=<?=$video->id?>"><div class="row screencast m0">
                                        <img src="http://img.youtube.com/vi/<?=$video->video_id?>/maxresdefault.jpg" alt="" class="cast img-responsive">
                                        <div class="play_btn"></div>
                                    </div>
                                </a>
                                <div class="row m0 post_data">
                                    <div class="row m0"><a href="?videosurfpro_video_id=<?=$video->id?>" class="post_title"><?=$video->video_name?></a></div>
                                    <div class="row m0">
                                        <div class="fleft date"><?=$video->video_created_at;?></div>
                                    </div>
                                </div>
                                <div class="row m0 taxonomy">
                                    <div class="fleft category"><a href="#"><img src="/wp-content/plugins/videosurfpro/public/images/cat.png" alt=""><?=$category_name;?></a></div>
                                    <div class="fright views"><a href="#"><img src="/wp-content/plugins/videosurfpro/public/images/views.png" alt=""><?=$video->video_views;?></a></div>
                                </div>
                            </div>
                        </article>
                    <?php endforeach; ?>
                <?php else : ?>
                    <div>No Videos Found</div>
                <?php endif; ?>
                <div class="row m0">
                    <div class="clearfix"></div>
                    <a href="#" id="load_more_videos_button" class="load_more_videos">Load more videos</a>
                </div>
            </div>
        </div>
    </div>
</section>

<script>
    // get sort options
    let videos_latest = $('#sort_by_latest');
    let videos_views = $('#sort_by_views');
    let videos_rating = $('#sort_by_rating');

    let current_url = window.location.href;
    let new_url = new URL(current_url);
    new_url.searchParams.delete('sort_by');

    // do code if an option was changed
    videos_latest.click(function () {
        // new_url.searchParams.delete('sort_by');
        new_url.searchParams.append('sort_by', 'last');
        location.href = new_url;
    });
    videos_views.click(function () {
        // new_url.searchParams.delete('sort_by');
        new_url.searchParams.append('sort_by', 'views');
        location.href = new_url;
    });
    videos_rating.click(function () {
        // new_url.searchParams.delete('sort_by');
        new_url.searchParams.append('sort_by', 'rating');
        location.href = new_url;
    });

</script>

<script>
    let search_videos_button = $('#search_videos_button');
    let search_videos_form = $('form#search_videos_form');

    search_videos_button.click(function () {
        search_videos_form.submit();
    });
</script>

<script>
    let load_more_videos_button = $('#load_more_videos_button');
    load_more_videos_button.click(function(e) {
        e.preventDefault();
        let hidden_videos = $('.invisible-video');
        for(let i = 0; i < videos_on_page; i++) {
            hidden_videos[i].classList.remove('invisible-video');
        }
    });
    console.log(load_more_videos_button);
    console.log(hidden_videos);
</script>