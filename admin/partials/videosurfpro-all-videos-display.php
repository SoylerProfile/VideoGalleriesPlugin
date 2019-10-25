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

?>

<style>
    a {
        text-decoration: none;
    }
    a.published {
        color:green;
        cursor:pointer;
    }
    a.draft {
        color:red;
        cursor:pointer;
    }
</style>

<script
        src="https://code.jquery.com/jquery-3.4.1.js"
        integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU="
        crossorigin="anonymous">
</script>

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
                        <tr id="row_<?= $all_videos[$i]->id ?>" class="videosurfpro-single-video-container <?php echo ($all_videos[$i]->video_is_published == 'FALSE') ? 'videosurfpro-video-draft' : '' ?>">
                            <td><?= $all_videos[$i]->id ?></td>
                            <td><?= $all_videos[$i]->video_name ?></td>
                            <td><?= $all_videos[$i]->video_provider ?></td>
                            <td>
                                <form action="" id="change_video_status_form_<?=$all_videos[$i]->id?>">
                                    <?php echo ($all_videos[$i]->video_is_published == 1) ? "<a class='video_status published' href=''><span>Published</span></a>" : "<a class='video_status draft' href=''><span>Draft</span></a>" ?>
                                    <input type="hidden" name="video_id" value="<?=$all_videos[$i]->id?>">
                                    <input type="hidden" name="new_value" value="<?php echo ($all_videos[$i]->video_is_published) ? '0' : '1' ?>">
                                </form>
                            </td>
                            <td>
                                <form action="?page=videosurfpro_submenu_edit_video&video_id=<?= $all_videos[$i]->id ?>" method="POST" id="edit_video_form">
                                    <input type="hidden" name="edit_video_by_id" value="<?= $all_videos[$i]->id ?>">
                                    <button type="submit" name="edit_video_by_id" class="btn btn-outline-info btn-sm" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit">
                                      <i class="fas fa-edit"></i>
                                    </button>
                                </form>
                            </td>
                            <td>
                                <form action="" method="POST" id="delete_video_form" name="delete_video_form">
                                    <input type="hidden" name="video_id" value="<?=$all_videos[$i]->id ?>" id="video_id">
                                    <button type="submit" name="delete_video_by_id" class="btn btn-outline-danger btn-sm" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete video?" id="delete_video_by_id_btn">
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

<script type="text/javascript">

    /**
     * Delete Video
     */
    function ajax_delete_video() {
        $('form#delete_video_form').on('submit', function(e) {
            e.preventDefault();
            form = $(this)[0];
            var video_id = form.elements.video_id.value;
            var data = {
                action: 'videosurfpro_delete_video',
                video_id: video_id,
            };
            // с версии 2.8 'ajaxurl' всегда определен в админке
            jQuery.post( ajaxurl, data, function(response) {
                // alert('Получено с сервера: ' + response);
            });
            // Delete the row
            let row_id = '#row_' + video_id;
            let row = $(row_id);
            row = row[0];
            row.remove();
        });
    }

    /**
     * Change Video Status
     */
    function ajax_change_status() {
        let video_status_el = $('a.video_status');
        video_status_el.click(function (e) {
            e.preventDefault();
            let video_status_obj = $(this);

            // Visual Status Change
            if(video_status_obj.hasClass('draft')) {
                video_status_obj.removeClass('draft');
                video_status_obj.addClass('published');
                video_status_obj.html('<span>Published</span>');
            }
            else if(video_status_obj.hasClass('published')) {
                video_status_obj.removeClass('published');
                video_status_obj.addClass('draft');
                video_status_obj.html('<span>Draft</span>');
            }

            // Send The request to the server
            let form = $(this).parent()[0];
            let video_id = form.elements.video_id.value;
            let new_value = form.elements.new_value.value;
            let data = {
                action: 'videosurfpro_change_video_status',
                video_id: video_id,
                new_value: new_value
            };
            jQuery.post(ajaxurl, data, function(result) {
                console.log(result);
            });
        });
    }
    // Get new elements for Ajax functions
    let paginate_buttons = $('li.paginate_button');
    paginate_buttons.click(function (){
        ajax_change_status();
        ajax_delete_video()
    });
    // Start JS code
    ajax_change_status();
    ajax_delete_video()

</script>