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
$items_on_page = 9999;
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
<!--<style>-->
<!--    #videosurfpro-all-categories-container {-->
<!--        margin: 25px;-->
<!--        margin-left: 0;-->
<!--        margin-top: 10px;-->
<!--        background-color: #ffffff;-->
<!--        text-align: center;-->
<!--    }-->
<!--    .videosurfpro-single-category-container {-->
<!--        display: grid;-->
<!--        grid-template-columns: 1fr 6fr 3fr 3fr;-->
<!--        padding: 10px;-->
<!--    }-->
<!--    #videosurfpro-categories-filter {-->
<!--        margin: 25px;-->
<!--        margin-left: 0;-->
<!--        margin-bottom: 0;-->
<!--        background-color: #ffffff;-->
<!--        text-align: center;-->
<!--        display: grid;-->
<!--        grid-template-columns: 1fr 1fr;-->
<!--    }-->
<!--    .videosurfpro-categories-filter-element {-->
<!--        padding: 10px;-->
<!--    }-->
<!---->
<!--    /*  PAGINATION    */-->
<!--    .pagination {-->
<!--        display: inline-block;-->
<!--        margin: 15px;-->
<!--        margin-bottom: 0;-->
<!--    }-->
<!---->
<!--    .pagination a {-->
<!--        color: black;-->
<!--        float: left;-->
<!--        padding: 8px 16px;-->
<!--        text-decoration: none;-->
<!--    }-->
<!---->
<!--    .pagination a.active {-->
<!--        background-color: #4CAF50;-->
<!--        color: white;-->
<!--        border-radius: 5px;-->
<!--    }-->
<!---->
<!--    .pagination a:hover:not(.active) {-->
<!--        background-color: #ddd;-->
<!--        border-radius: 5px;-->
<!--    }-->
<!---->
<!--    hr {-->
<!--        margin: 0;-->
<!--    }-->
<!--</style>-->
<!---->
<!--<h1>ALL Categories</h1>-->

<!--    FILTER    -->
<!--<div id="videosurfpro-categories-filter">-->
<!--    <div class="videosurfpro-categories-filter-element">-->
<!--        <span>--><?php //echo count($all_categories); ?><!-- Categories</span>-->
<!--    </div>-->
<!--    <div class="videosurfpro-categories-filter-element">-->
<!--        <form action="" method="POST">-->
<!--            <input type="search" name="text" value="" placeholder="Type category name..." >-->
<!--            <input type="submit" name="search_categories" class="button" value="Search Categories">-->
<!--        </form>-->
<!--    </div>-->
<!--</div>-->
<!---->
<!--    PAGINATION    -->
<?php
$pages = ceil(count($all_categories) / $items_on_page);
$previous_page = $current_page - 1;
$next_page = $current_page + 1;
?>


<link rel="stylesheet" type="text/css"
      href="<?php echo plugins_url('videosurfpro'); ?>/admin/assets/css/bamburgh.min.css">

<br/>
    <div class="container">
      <h1>Categories</h1>

            <table id="categories" class="table table-hover" data-toggle="datatable">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th class="no-sort text-center">Actions</th>
                    <th class="no-sort"></th>
                </tr>
                </thead>
                <tbody>
                <?php if (count($categories_with_pagination) >= 1) : ?>
                    <?php for ($i = 0; $i < count($categories_with_pagination); $i++) : ?>
                        <tr class="videosurfpro-single-video-container <?php echo ($categories_with_pagination[$i]->video_is_published == 'FALSE') ? 'videosurfpro-video-draft' : '' ?>">
                            <td><?= $categories_with_pagination[$i]->id ?></td>
                            <td><?= $categories_with_pagination[$i]->category_name ?></td>
                            <td class="text-center">
                                <form action="?page=videosurfpro_submenu_edit_category&category_id=<?= $categories_with_pagination[$i]->id ?>"
                                      method="POST">
                                    <input type="hidden" name="edit_category_by_id"
                                           value="<?= $categories_with_pagination[$i]->id ?>">
                                    <button type="submit" name="edit_category_by_id" class="btn btn-outline-info btn-sm" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit category">
                                        <i class="fas fa-edit"></i>
                                    </button>
                                </form>
                            </td>
                            <td>
                                <form action="" method="POST">
                                    <input type="hidden" name="category_id" value="<?= $categories_with_pagination[$i]->id ?>">
                                    <button type="submit" name="delete_category_by_id" class="btn btn-outline-danger btn-sm" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete category?">
                                      <i class="far fa-trash-alt"></i>
                                    </button>
                                </form>
                            </td>
                        </tr>
                    <?php endfor; ?>
                <?php else : ?>
                    <div style="padding: 15px;">No Categories found.</div>
                <?php endif; ?>
                </tbody>
                <tfoot class="thead-light">
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th class="no-sort text-center">Actions</th>
                    <th class="no-sort"></th>
                </tr>
                </tfoot>
            </table>

        </div>


        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
                integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
                crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
                integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
                crossorigin="anonymous"></script>
        <script src="/wp-content/plugins/videosurfpro/admin/assets/vendor/bootstrap/js/bootstrap.min.js"></script>

        <!--Bootstrap init-->

        <script src="/wp-content/plugins/videosurfpro/admin/assets/js/demo/bootstrap/bootstrap.min.js"></script>


        <script src="/wp-content/plugins/videosurfpro/admin/assets/js/bamburgh.min.js"></script>


        <!--DataTables-->

        <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.18/css/dataTables.bootstrap4.min.css"/>


        <script src="https://cdn.datatables.net/1.10.18/js/jquery.dataTables.min.js"></script>
        <script src="https://cdn.datatables.net/1.10.18/js/dataTables.bootstrap4.min.js"></script>
        <script src="https://cdn.datatables.net/buttons/1.5.6/js/buttons.bootstrap4.min.js"></script>
        <script src="https://cdn.datatables.net/buttons/1.5.6/js/buttons.colVis.min.js"></script>
        <script src="https://cdn.datatables.net/buttons/1.5.6/js/buttons.html5.min.js"></script>
        <script src="https://cdn.datatables.net/keytable/2.5.0/js/dataTables.keyTable.min.js"></script>


        <!--Datatables init-->
        <script src="/wp-content/plugins/videosurfpro/admin/assets/js/demo/datatables/datatables.min.js"></script>

        <script type="text/javascript">
        $(".col-md-6").removeClass("d-flex align-items-center");
        </script>
