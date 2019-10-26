<?php

use admin\classes\Videosurfpro_Video;
use admin\classes\Videosurfpro_Category;

$latest_videos = Videosurfpro_Video::get_limit_videos_orderby_latest_desc(4);

?>

<!--Bootstrap and Other Vendors-->
<link rel="stylesheet" href="/wp-content/plugins/videosurfpro/public/css/bootstrap.css">

<!--Theme Styles-->
<link rel="stylesheet" href="/wp-content/plugins/videosurfpro/public/css/style.css">
<link rel="stylesheet" href="/wp-content/plugins/videosurfpro/public/css/responsive.css">

<section class="row recent_uploads">
    <div class="container">

        <div class="row media-grid col-sm-5 content_video_posts">
            <div class="row title_row">
                <h3>Latest videos</h3>
            </div>
            <div class="jscroll-inner">
                <?php foreach($latest_videos as $video) : ?>
                    <?php
                        $category = Videosurfpro_Category::get_all_category_data_from_db($video->video_category_id);
                        $category = $category[0];
                        $category_name = $category->category_name;
                    ?>
                    <article class="col-sm-6 video_post postType3">
                        <div class="inner row m0">
                            <a href="?videosurfpro_video_id=<?=$video->id?>"><div class="row screencast m0">
                                    <img src="http://img.youtube.com/vi/<?=$video->video_id?>/maxresdefault.jpg" alt="" class="cast img-responsive">
                                    <div class="play_btn"></div>
<!--                                    <div class="media-length">17:30</div>-->
                                </div></a>
                            <div class="row m0 post_data">
                                <div class="row m0"><a href="?videosurfpro_video_id=<?=$video->id?>" class="post_title"><?=$video->video_name ?></a></div>
                                <div class="row m0">
<!--                                    <div class="fleft author">by <a href="#">Masum Rana</a></div>-->
                                    <div class="fleft date"><?=$video->video_created_at ?></div>
                                </div>
                            </div>
                            <div class="row m0 taxonomy">
                                <div class="fleft category"><a href="#"><img src="/wp-content/plugins/videosurfpro/public/images/cat.png" alt=""><?=$category_name?></a></div>
                                <div class="fright views"><a href="#"><img src="/wp-content/plugins/videosurfpro/public/images/views.png" alt=""><?=$video->video_views?></a></div>
                            </div>
                        </div>
                    </article>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</section>

<!--jQuery-->
<script src="/wp-content/plugins/videosurfpro/public/js/jquery-2.js"></script>

<!--Bootstrap JS-->
<script src="/wp-content/plugins/videosurfpro/public/js/bootstrap.js"></script>

<!--Theme JS-->
<script src="/wp-content/plugins/videosurfpro/public/js/theme.js"></script>