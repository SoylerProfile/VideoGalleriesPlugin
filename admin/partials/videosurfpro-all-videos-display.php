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

$domain = get_site_url();

// Нужно для пагинации
$items_on_page = 3;
$current_page = (isset($_GET['paged']) && $_GET['paged'] > 0) ? (int)$_GET['paged'] : 1;
$all_videos = Videosurfpro_Video::get_all_videos();
$videos_with_pagination = Videosurfpro_Video::get_videos_with_pagination($current_page, $items_on_page);

// Реализация поиска видео
if (isset($_POST['search_videos'])) {
    $text = $_POST['text'];
    $all_videos = Videosurfpro_Video::search_videos($text);
    $videos_with_pagination = $all_videos;
}

// Смена статуса видео
if (isset($_GET['change_video_status'])) {
    $video_id = $_GET['video_id'];
    $new_status = $_GET['new_value'];
    Videosurfpro_Video::change_video_status($video_id, $new_status);
}

if (isset($_POST['delete_video_by_id'])) {
    $video_id = $_POST['video_id'];
    $result = Videosurfpro_Video::delete_video_by_id($video_id);
    if ($result) {
        echo 'Your video was successfully deleted';
    } else {
        echo "Can not delete the video <br>";
        echo "<pre>";
        var_dump($result);
        echo "</pre>";
    }
}

?>
<!-- This file should primarily consist of HTML with a little bit of PHP. -->
<!---->
<!--<style>-->
<!--    #videosurfpro-all-videos-container {-->
<!--        margin: 25px;-->
<!--        margin-left: 0;-->
<!--        margin-top: 10px;-->
<!--        background-color: #ffffff;-->
<!--        text-align: center;-->
<!--    }-->
<!--    .videosurfpro-single-video-container {-->
<!--        display: grid;-->
<!--        grid-template-columns: 1fr 3fr 1fr 1fr 1fr 1fr 1fr;-->
<!--        padding: 10px;-->
<!--    }-->
<!--    .videosurfpro-video-draft {-->
<!--        background-color: #f9f9f9;-->
<!--    }-->
<!--    #videosurfpro-videos-filter {-->
<!--        margin: 25px;-->
<!--        margin-left: 0;-->
<!--        margin-bottom: 0;-->
<!--        background-color: #ffffff;-->
<!--        text-align: center;-->
<!--        display: grid;-->
<!--        grid-template-columns: 1fr 1fr;-->
<!--    }-->
<!--    .videosurfpro-videos-filter-element {-->
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
<!--<h1>All VIDEOS</h1>-->
<!---->
<!--    FILTER    -->
<!--<div id="videosurfpro-videos-filter">-->
<!--    <div class="videosurfpro-videos-filter-element">-->
<!--        <span>--><?php //echo count($all_videos); ?><!-- Videos</span>-->
<!--    </div>-->
<!--    <div class="videosurfpro-videos-filter-element">-->
<!--        <form action="" method="POST">-->
<!--            <input type="search" name="text" value="" placeholder="Type video name..." >-->
<!--            <input type="submit" name="search_videos" class="button" value="Search Videos">-->
<!--        </form>-->
<!--    </div>-->
<!--</div>-->
<!---->
<!--    PAGINATION    -->
<?php
$pages = ceil(count($all_videos) / $items_on_page);
$previous_page = $current_page - 1;
$next_page = $current_page + 1;
?>
<!--<div class="pagination">-->
<!--    --><?php //if($pages > 1) : ?>
<!--        --><?php //if($previous_page >= 1) : ?>
<!--            <a href="?page=videosurfpro_submenu_all_videos&paged=--><?// ////=$previous_page?><!--">&laquo;</a>-->
<!--        --><?php //endif; ?>
<!--        <a href="?page=videosurfpro_submenu_all_videos&paged=--><?// ////=$current_page?><!--">--><?// ////=$current_page?><!--</a>-->
<!--        --><?php //if(count($all_videos) > $current_page * $items_on_page) : ?>
<!--            <a href="?page=videosurfpro_submenu_all_videos&paged=--><?// ////=$next_page?><!--">&raquo;</a>-->
<!--        --><?php //endif; ?>
<!--    --><?php //endif;?>
<!--</div>-->
<!---->
<!--    VIDEOS    -->
<!--<div id="videosurfpro-all-videos-container">-->
<!--    <hr>-->
<!--    --><?php //if(count($videos_with_pagination) >= 1) : ?>
<!--        --><?php //for($i = 0; $i < count($videos_with_pagination); $i++) : ?>
<!--            <div class="videosurfpro-single-video-container --><?php //echo ($videos_with_pagination[$i]->video_is_published == 'FALSE') ? 'videosurfpro-video-draft' : '' ?><!--">-->
<!--                <div>--><? //=$videos_with_pagination[$i]->id?><!--</div>-->
<!--                <div>--><? //=$videos_with_pagination[$i]->video_name?><!--</div>-->
<!--                <div>--><? //=$videos_with_pagination[$i]->video_provider?><!--</div>-->
<!--                <div>-->
<!--                    --><?php //echo ($videos_with_pagination[$i]->video_is_published == 1) ? "<a style='color:green; cursor:pointer; text-decoration: none;' href='?page=videosurfpro_submenu_all_videos&change_video_status=true&new_value=0&video_id=". $videos_with_pagination[$i]->id ."'>Published</a>" : "<a style='color:red; cursor:pointer; text-decoration: none;' href='?page=videosurfpro_submenu_all_videos&change_video_status=true&new_value=1&video_id=". $videos_with_pagination[$i]->id ."'>Draft</a>" ?>
<!--                </div>-->
<!--                <div>-->
<!--                    <form action="?page=videosurfpro_submenu_edit_video&video_id=--><? //=$videos_with_pagination[$i]->id?><!--" method="POST">-->
<!--                        <input type="hidden" name="edit_video_by_id" value="--><? //=$videos_with_pagination[$i]->id?><!--">-->
<!--                        <input type="submit" class="button" value="Edit">-->
<!--                    </form>-->
<!--                </div>-->
<!--                <div>-->
<!--                    <form action="" method="POST">-->
<!--                        <input type="hidden" name="video_id" value="--><? //=$videos_with_pagination[$i]->id?><!--">-->
<!--                        <input type="submit" name="delete_video_by_id" class="button" value="Delete">-->
<!--                    </form>-->
<!--                </div>-->
<!--                <div>-->
<!--                    <form action="" method="POST">-->
<!--                        <input type="hidden" name="show_video_by_id" value="--><? //=$videos_with_pagination[$i]->id?><!--">-->
<!--                        <input type="submit" class="button" value="Show">-->
<!--                    </form>-->
<!--                </div>-->
<!--            </div>-->
<!--        --><?php //endfor; ?>
<!--    --><?php //else : ?>
<!--        <div style="padding: 15px;">No Videos found.</div>-->
<!--    --><?php //endif; ?>
<!--</div>-->
<!---->
<!--    PAGINATION    -->
<!--<div class="pagination">-->
<!--    --><?php //if($pages > 1) : ?>
<!--        --><?php //if($previous_page >= 1) : ?>
<!--            <a href="?page=videosurfpro_submenu_all_videos&paged=--><?// //=$previous_page?><!--">&laquo;</a>-->
<!--        --><?php //endif; ?>
<!--        <a href="?page=videosurfpro_submenu_all_videos&paged=--><?// //=$current_page?><!--">--><?// //=$current_page?><!--</a>-->
<!--        --><?php //if(count($all_videos) > $current_page * $items_on_page) : ?>
<!--            <a href="?page=videosurfpro_submenu_all_videos&paged=--><?// //=$next_page?><!--">&raquo;</a>-->
<!--        --><?php //endif; ?>
<!--    --><?php //endif;?>
<!--</div>-->

<meta name="viewport"
      content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, shrink-to-fit=no"/>

<!-- Disable tap highlight on IE -->
<meta name="msapplication-tap-highlight" content="no">

<!-- Bamburgh Z Admin Dashboard PRO Stylesheets -->

<link rel="stylesheet" type="text/css"
      href="<?php echo plugins_url('videosurfpro'); ?>/admin/assets/css/bamburgh.min.css">

<div class="app-wrapper">
<!--    <div class="row"><div class="col-md-6 d-flex align-items-center"><div class="dt-buttons btn-group"><button class="btn btn-secondary buttons-copy buttons-html5" tabindex="0" aria-controls="example" type="button"><span>Copy</span></button> </div></div><div class="col-md-6 d-flex align-items-center">-->
<!--            <div id="example_filter" class="dataTables_filter"><label>Search:-->
<!--                    <input type="search" class="form-control form-control-sm" placeholder="" aria-controls="example">-->
<!--                    <form action="" method="POST">-->
<!--                        <input type="search" name="text" value="" class="form-control form-control-sm" placeholder="" aria-controls="example" >-->
<!--                        <input type="submit" name="search_videos" class="button" value="Search Videos">-->
<!--                    </form>-->
<!--                </label></div></div><div class="col-md-12"><div class="divider"></div><div class="dataTables_info" id="example_info" role="status" aria-live="polite">--><?php //echo count($all_videos); ?><!-- Videos</div></div></div>-->
    <div class="container">
        <div class="card card-box mb-5">
            <div class="card-header">
                <div class="card-header--title">
                    <small>DataTables</small>
                    <b>Videos</b>
                </div>
<!--                <div class="card-header--actions">-->
<!--                    <a href="#" class="btn btn-sm btn-success" data-toggle="tooltip" title="Refresh">-->
<!--                        <i class="fas fa-sync fa-spin"></i>-->
<!--                    </a>-->
<!--                </div>-->
            </div>
            <table id="example" class="table table-hover" data-toggle="datatable">
                <div class="row"><div class="col-md-6 d-flex align-items-center"></div><div class="col-md-6 d-flex align-items-center">
                        <div id="example_filter" class="dataTables_filter"><label>
                                <!--                    <input type="search" class="form-control form-control-sm" placeholder="" aria-controls="example">-->
                                <form action="" method="POST">
                                    <input type="search" name="text" value="" class="form-control form-control-sm" placeholder="" aria-controls="example" >
                                    <input type="submit" name="search_videos" class="button" value="Search Videos">
                                </form>
                            </label></div></div><div class="col-md-12"><div class="divider"></div><div class="dataTables_info" id="example_info" role="status" aria-live="polite"><?php echo count($all_videos); ?> Videos</div></div></div>
                <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Provider</th>
                    <th>Status</th>
                    <th class="no-sort text-center">Actions</th>
                    <th class="no-sort text-center">Actions</th>
                    <th class="no-sort text-center">Actions</th>
                    <!--                    <th>Start date</th>-->
                    <!--                    <th class="no-sort text-center">Actions</th>-->
                </tr>
                </thead>
                <tbody>
                <?php if (count($videos_with_pagination) >= 1) : ?>
                    <?php for ($i = 0; $i < count($videos_with_pagination); $i++) : ?>
                        <tr class="videosurfpro-single-video-container <?php echo ($videos_with_pagination[$i]->video_is_published == 'FALSE') ? 'videosurfpro-video-draft' : '' ?>">
                            <td><?= $videos_with_pagination[$i]->id ?></td>
                            <td><?= $videos_with_pagination[$i]->video_name ?></td>
                            <td><?= $videos_with_pagination[$i]->video_provider ?></td>
                            <td>
                                <?php echo ($videos_with_pagination[$i]->video_is_published == 1) ? "<a style='color:green; cursor:pointer; text-decoration: none;' href='?page=videosurfpro_submenu_all_videos&change_video_status=true&new_value=0&video_id=" . $videos_with_pagination[$i]->id . "'>Published</a>" : "<a style='color:red; cursor:pointer; text-decoration: none;' href='?page=videosurfpro_submenu_all_videos&change_video_status=true&new_value=1&video_id=" . $videos_with_pagination[$i]->id . "'>Draft</a>" ?>
                            </td>
                            <td>
                                <form action="?page=videosurfpro_submenu_edit_video&video_id=<?= $videos_with_pagination[$i]->id ?>"
                                      method="POST">
                                    <input type="hidden" name="edit_video_by_id"
                                           value="<?= $videos_with_pagination[$i]->id ?>">
                                    <input type="submit" class="button" value="Edit">
                                </form>
                            </td>
                            <td>
                                <form action="" method="POST">
                                    <input type="hidden" name="video_id" value="<?=$videos_with_pagination[$i]->id ?>">
                                    <input type="submit" name="delete_video_by_id" class="button" value="Delete">
                                </form>
                            </td>
                            <td>
                                <a href="<?=$domain ?>/?videosurfpro_video_id=<?=$videos_with_pagination[$i]->id ?>" target="_blank"><input type="submit" class="button" value="Show"></a>
                            </td>
                        </tr>
                        <!--                <tr>-->
                        <!--                    <td>Tiger Nixon</td>-->
                        <!--                    <td>System Architect</td>-->
                        <!--                    <td>Edinburgh</td>-->
                        <!--                    <td>61</td>-->
                        <!--                    <td>2011/04/25</td>-->
                        <!--                    <td class="text-center">-->
                        <!--                        <a href="#" class="btn btn-first pl-2 pr-2 btn-sm ml-1 mr-1" title="View details">-->
                        <!--                            <i class="fas fa-binoculars"></i>-->
                        <!--                        </a>-->
                        <!--                        <a href="#" class="btn btn-outline-danger pl-2 pr-2 btn-sm ml-1 mr-1" title="Remove">-->
                        <!--                            <i class="far fa-trash-alt"></i>-->
                        <!--                        </a>-->
                        <!--                    </td>-->
                        <!--                </tr>-->
                    <?php endfor; ?>
                <?php else : ?>
                    <div style="padding: 15px;">No Videos found.</div>
                <?php endif; ?>
                </tbody>
                <tfoot class="thead-light">
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Provider</th>
                    <th>Status</th>
                    <th class="no-sort text-center">Actions</th>
                    <th class="no-sort text-center">Actions</th>
                    <th class="no-sort text-center">Actions</th>
                </tr>
                </tfoot>
            </table>
            <div class="dataTables_paginate paging_simple_numbers" id="example_paginate"><ul class="pagination">
                    <?php if($pages > 1) : ?>
                        <?php if($previous_page >= 1) : ?>
                        <li class="paginate_button page-item previous" id="example_previous">
                            <a href="?page=videosurfpro_submenu_all_videos&paged=<?=$previous_page?>" aria-controls="example" data-dt-idx="0" tabindex="0" class="page-link">Previous</a>
                        </li>
                        <?php endif; ?>
                        <li class="paginate_button page-item active">
                            <a href="?page=videosurfpro_submenu_all_videos&paged=<?=$current_page?>" aria-controls="example" data-dt-idx="1" tabindex="0" class="page-link"><?=$current_page?></a>
                        </li>
<!--                        <li class="paginate_button page-item ">-->
<!--                            <a href="#" aria-controls="example" data-dt-idx="2" tabindex="0" class="page-link">2</a>-->
<!--                        </li>-->
<!--                        <li class="paginate_button page-item ">-->
<!--                            <a href="#" aria-controls="example" data-dt-idx="3" tabindex="0" class="page-link">3</a>-->
<!--                        </li>-->
                        <?php if(count($all_videos) > $current_page * $items_on_page) : ?>
                        <li class="paginate_button page-item next" id="example_next">
                            <a href="?page=videosurfpro_submenu_all_videos&paged=<?=$next_page?>" aria-controls="example" data-dt-idx="8" tabindex="0" class="page-link">Next</a>
                        </li>
                        <?php endif; ?>
                    <?php endif;?>
                </ul>
            </div>
<!--            <div class="pagination">-->
<!--                --><?php //if($pages > 1) : ?>
<!--                    --><?php //if($previous_page >= 1) : ?>
<!--                        <a href="?page=videosurfpro_submenu_all_videos&paged=--><?// //=$previous_page?><!--">&laquo;</a>-->
<!--                    --><?php //endif; ?>
<!--                    <a href="?page=videosurfpro_submenu_all_videos&paged=--><?//=$current_page?><!--">--><?//=$current_page?><!--</a>-->
<!--                    --><?php //if(count($all_videos) > $current_page * $items_on_page) : ?>
<!--                        <a href="?page=videosurfpro_submenu_all_videos&paged=--><?// //=$next_page?><!--">&raquo;</a>-->
<!--                    --><?php //endif; ?>
<!--                --><?php //endif;?>
<!--            </div>-->
        </div>
    </div>
</div>
<!-- Bamburgh Z Admin Dashboard PRO Javascript Core -->

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
<script src="<?php plugins_url('videosurfpro'); ?>/admin/assets/vendor/bootstrap/js/bootstrap.min.js"></script>

<!--Bootstrap init-->

<script src="<?php plugins_url('videosurfpro'); ?>/admin/assets/js/demo/bootstrap/bootstrap.min.js"></script>


<script src="<?php plugins_url('videosurfpro'); ?>/admin/assets/js/bamburgh.min.js"></script>


<!--DataTables-->

<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.18/css/dataTables.bootstrap4.min.css"/>
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/buttons/1.5.6/css/buttons.bootstrap4.min.css"/>
<link rel="stylesheet" type="text/css"
      href="https://cdn.datatables.net/fixedheader/3.1.4/css/fixedHeader.bootstrap4.min.css"/>
<link rel="stylesheet" type="text/css"
      href="https://cdn.datatables.net/keytable/2.5.0/css/keyTable.bootstrap4.min.css"/>
<link rel="stylesheet" type="text/css"
      href="https://cdn.datatables.net/responsive/2.2.2/css/responsive.bootstrap4.min.css"/>
<link rel="stylesheet" type="text/css"
      href="https://cdn.datatables.net/scroller/2.0.0/css/scroller.bootstrap4.min.css"/>

<script src="https://cdn.datatables.net/1.10.18/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.18/js/dataTables.bootstrap4.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.5.6/js/dataTables.buttons.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.5.6/js/buttons.bootstrap4.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.5.6/js/buttons.colVis.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.5.6/js/buttons.html5.min.js"></script>
<script src="https://cdn.datatables.net/keytable/2.5.0/js/dataTables.keyTable.min.js"></script>
<script src="https://cdn.datatables.net/responsive/2.2.2/js/dataTables.responsive.min.js"></script>
<script src="https://cdn.datatables.net/responsive/2.2.2/js/responsive.bootstrap4.min.js"></script>

<!--Datatables init-->
<script src="<?php plugins_url('videosurfpro'); ?>/admin/assets/js/demo/datatables/datatables.min.js"></script>