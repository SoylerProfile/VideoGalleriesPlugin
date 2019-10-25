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

$all_categories = Videosurfpro_Category::get_all_categories();

?>

<script
        src="https://code.jquery.com/jquery-3.4.1.js"
        integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU="
        crossorigin="anonymous">
</script>

<link rel="stylesheet" type="text/css"
      href="/wp-content/plugins/videosurfpro/admin/assets/css/bamburgh.min.css">
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
                <?php if (count($all_categories) >= 1) : ?>
                    <?php for ($i = 0; $i < count($all_categories); $i++) : ?>
                        <tr id="row_<?= $all_categories[$i]->id ?>" class="videosurfpro-single-video-container <?php echo ($all_categories[$i]->video_is_published == 'FALSE') ? 'videosurfpro-video-draft' : '' ?>">
                            <td><?= $all_categories[$i]->id ?></td>
                            <td><?= $all_categories[$i]->category_name ?></td>
                            <td class="text-center">
                                <form action="?page=videosurfpro_submenu_edit_category&category_id=<?= $all_categories[$i]->id ?>"
                                      method="POST">
                                    <input type="hidden" name="edit_category_by_id"
                                           value="<?= $all_categories[$i]->id ?>">
                                    <button type="submit" name="edit_category_by_id" class="btn btn-outline-info btn-sm" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit category">
                                        <i class="fas fa-edit"></i>
                                    </button>
                                </form>
                            </td>
                            <td>
                                <form action="" method="POST" id="delete_category_form">
                                    <input type="hidden" name="category_id" value="<?= $all_categories[$i]->id ?>" id="delete_category_form">
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
             * Delete Category
             */
            function ajax_delete_category() {
                $('form#delete_category_form').on('submit', function(e) {
                    e.preventDefault();
                    form = $(this)[0];
                    var category_id = form.elements.category_id.value;
                    var data = {
                        action: 'videosurfpro_delete_category',
                        category_id: category_id,
                    };
                    // с версии 2.8 'ajaxurl' всегда определен в админке
                    jQuery.post( ajaxurl, data, function(response) {
                        // alert('Получено с сервера: ' + response);
                    });
                    // Delete the row
                    let row_id = '#row_' + category_id;
                    let row = $(row_id);
                    row = row[0];
                    row.remove();
                });
            }
            // Get new elements for Ajax functions
            let paginate_buttons = $('li.paginate_button');
            paginate_buttons.click(function (){
                ajax_delete_category()
            });
            // Start JS code
            ajax_delete_category()
        </script>