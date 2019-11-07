<?php

use admin\classes\Videosurfpro_Category;

$all_categories = Videosurfpro_Category::get_all_categories();

?>

<!--Bootstrap and Other Vendors-->
<link rel="stylesheet" href="/wp-content/plugins/videosurfpro/public/css/bootstrap.css">

<!--Theme Styles-->
<link rel="stylesheet" href="/wp-content/plugins/videosurfpro/public/css/style.css">
<link rel="stylesheet" href="/wp-content/plugins/videosurfpro/public/css/responsive.css">

<section class="row recent_uploads">
    <div class="container">
        <div class="row title_row">
            <h3>Video Categories</h3>
        </div>
        <div class="btn-group category_filter fleft">
            <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="filter-option pull-left">All Category</span>
                <span class="caret"></span>
            </button>
            <ul class="dropdown-menu" role="menu">
                <li><a href="#"><span class="filter_text">All Categories</span><span class="badge"></span></a></li>
                <?php foreach($all_categories as $category) : ?>
                    <?php $count_videos = Videosurfpro_Category::get_count_videos_in_category($category->id); ?>
                    <li><a href="?videosurfpro_category_id=<?=$category->id?>"><span class="filter_text"><?=$category->category_name?></span><span class="badge"><?=$count_videos?></span></a></li>
                <?php endforeach; ?>
            </ul>
        </div>
    </div>
</section>

<!--jQuery-->
<!--<script src="/wp-content/plugins/videosurfpro/public/js/jquery-2.js"></script>-->

<!--Bootstrap JS-->
<!--<script src="/wp-content/plugins/videosurfpro/public/js/bootstrap.js"></script>-->

<!--Theme JS-->
<!--<script src="/wp-content/plugins/videosurfpro/public/js/theme.js"></script>-->