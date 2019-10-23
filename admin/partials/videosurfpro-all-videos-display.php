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

use admin\classes\Videosurfpro_Video;

$domain = get_site_url();

$all_videos = Videosurfpro_Video::get_all_videos();

// Смена статуса видео
if (isset($_GET['change_video_status'])) {
    $video_id = $_GET['video_id'];
    $new_status = $_GET['new_value'];
    Videosurfpro_Video::change_video_status($video_id, $new_status);
}

// Удаление видео
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
<link rel="stylesheet" type="text/css"
      href="/wp-content/plugins/videosurfpro/admin/assets/css/bamburgh.min.css">
<br/>
<div class="container">
  <h1>Videos</h1>
            <table id="example" class="table table-hover" data-toggle="datatable">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Provider</th>
                    <th>Status</th>
                    <th class="no-sort text-center">Actions</th>
                    <th class="no-sort text-center"></th>
                    <th class="no-sort text-center"></th>
                </tr>
                </thead>
                <tbody>
                <?php if (count($all_videos) >= 1) : ?>
                    <?php for ($i = 0; $i < count($all_videos); $i++) : ?>
                        <tr class="videosurfpro-single-video-container <?php echo ($all_videos[$i]->video_is_published == 'FALSE') ? 'videosurfpro-video-draft' : '' ?>">
                            <td><?= $all_videos[$i]->id ?></td>
                            <td><?= $all_videos[$i]->video_name ?></td>
                            <td><?= $all_videos[$i]->video_provider ?></td>
                            <td>
                                <?php echo ($all_videos[$i]->video_is_published == 1) ? "<a style='color:green; cursor:pointer; text-decoration: none;' href='?page=videosurfpro_submenu_all_videos&change_video_status=true&new_value=0&video_id=" . $all_videos[$i]->id . "'>Published</a>" : "<a style='color:red; cursor:pointer; text-decoration: none;' href='?page=videosurfpro_submenu_all_videos&change_video_status=true&new_value=1&video_id=" . $all_videos[$i]->id . "'>Draft</a>" ?>
                            </td>
                            <td>
                                <form action="?page=videosurfpro_submenu_edit_video&video_id=<?= $all_videos[$i]->id ?>"
                                      method="POST">
                                    <input type="hidden" name="edit_video_by_id"
                                           value="<?= $all_videos[$i]->id ?>">
                                    <button type="submit" name="edit_video_by_id" class="btn btn-outline-info btn-sm" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit">
                                      <i class="fas fa-edit"></i>
                                    </button>
                                </form>
                            </td>
                            <td>
                                <form action="" method="POST">
                                    <input type="hidden" name="video_id" value="<?=$all_videos[$i]->id ?>">
                                    <button type="submit" name="delete_video_by_id" class="btn btn-outline-danger btn-sm" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete video?">
                                      <i class="far fa-trash-alt"></i>
                                    </button>
                                </form>
                            </td>
                            <td>
                                <a href="<?=$domain ?>/?videosurfpro_video_id=<?=$all_videos[$i]->id ?>" class="btn btn-outline-success btn-sm" data-toggle="tooltip" data-placement="top" title="" data-original-title="Watch video" target="_blank"><i class="far fa-eye"></i></a>
                            </td>
                        </tr>
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
                    <th class="no-sort text-center"></th>
                    <th class="no-sort text-center"></th>
                </tr>
                </tfoot>
            </table>
            <div class="dataTables_paginate paging_simple_numbers" id="example_paginate">
                <ul class="pagination">
                </ul>
            </div>
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
