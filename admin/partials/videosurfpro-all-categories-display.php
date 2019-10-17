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

use admin\classes\Videosurfpro_Category;

// Нужно для пагинации
$items_on_page = 3;
$current_page = (isset($_GET['paged']) && $_GET['paged'] > 0) ? (int) $_GET['paged'] : 1;
$all_categories = Videosurfpro_Category::get_all_categories();
$categories_with_pagination = Videosurfpro_Category::get_categories_with_pagination($current_page, $items_on_page);

// Реализация поиска категории
if(isset($_POST['search_categories'])) {
    $text = $_POST['text'];
    $all_categories = Videosurfpro_Category::search_categories($text);
    $categories_with_pagination = $all_categories;
}

if(isset($_POST['delete_category_by_id'])) {
    $category_id = $_POST['category_id'];
    $result = Videosurfpro_Category::delete_category_by_id($category_id);
    if($result) {
        echo 'Your category was successfully deleted';
    }
    else {
        echo "Can not delete the category <br>";
        echo "<pre>";
        var_dump($result);
        echo "</pre>";
    }
}

?>
<!-- This file should primarily consist of HTML with a little bit of PHP. -->
<style>
    #videosurfpro-all-categories-container {
        margin: 25px;
        margin-left: 0;
        margin-top: 10px;
        background-color: #ffffff;
        text-align: center;
    }
    .videosurfpro-single-category-container {
        display: grid;
        grid-template-columns: 1fr 6fr 3fr 3fr;
        padding: 10px;
    }
    #videosurfpro-categories-filter {
        margin: 25px;
        margin-left: 0;
        margin-bottom: 0;
        background-color: #ffffff;
        text-align: center;
        display: grid;
        grid-template-columns: 1fr 1fr;
    }
    .videosurfpro-categories-filter-element {
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

<h1>ALL Categories</h1>

<!--    FILTER    -->
<div id="videosurfpro-categories-filter">
    <div class="videosurfpro-categories-filter-element">
        <span><?php echo count($all_categories); ?> Categories</span>
    </div>
    <div class="videosurfpro-categories-filter-element">
        <form action="" method="POST">
            <input type="search" name="text" value="" placeholder="Type category name..." >
            <input type="submit" name="search_categories" class="button" value="Search Categories">
        </form>
    </div>
</div>

<!--    PAGINATION    -->
<?php
$pages = ceil(count($all_categories) / $items_on_page);
$previous_page = $current_page - 1;
$next_page = $current_page + 1;
?>

<!--    VIDEOS    -->
<div id="videosurfpro-all-categories-container">
    <hr>
    <?php if(count($categories_with_pagination) >= 1) : ?>
        <?php for($i = 0; $i < count($categories_with_pagination); $i++) : ?>
            <div class="videosurfpro-single-category-container <?php echo ($categories_with_pagination[$i]->video_is_published == 'FALSE') ? 'videosurfpro-category-draft' : '' ?>">
                <div><?=$categories_with_pagination[$i]->id?></div>
                <div><?=$categories_with_pagination[$i]->category_name?></div>
                <div>
                    <form action="?page=videosurfpro_submenu_edit_category&category_id=<?=$categories_with_pagination[$i]->id?>" method="POST">
                        <input type="hidden" name="edit_category_by_id" value="<?=$categories_with_pagination[$i]->id?>">
                        <input type="submit" class="button" value="Edit">
                    </form>
                </div>
                <div>
                    <form action="" method="POST">
                        <input type="hidden" name="category_id" value="<?=$categories_with_pagination[$i]->id?>">
                        <input type="submit" name="delete_category_by_id" class="button" value="Delete">
                    </form>
                </div>
            </div>
        <?php endfor; ?>
    <?php else : ?>
        <div style="padding: 15px;">No Categories found.</div>
    <?php endif; ?>
</div>

<!--    PAGINATION    -->
<div class="pagination">
    <?php if($pages > 1) : ?>
        <?php if($previous_page >= 1) : ?>
            <a href="?page=videosurfpro_submenu_all_categories&paged=<?=$previous_page?>">&laquo;</a>
        <?php endif; ?>
        <a href="?page=videosurfpro_submenu_all_categories&paged=<?=$current_page?>"><?=$current_page?></a>
        <?php if(count($all_categories) > $current_page * $items_on_page) : ?>
            <a href="?page=videosurfpro_submenu_all_categories&paged=<?=$next_page?>">&raquo;</a>
        <?php endif; ?>
    <?php endif;?>
</div>