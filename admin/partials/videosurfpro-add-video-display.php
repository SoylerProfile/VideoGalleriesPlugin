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
use admin\classes\Videosurfpro_Category;

$all_categories = Videosurfpro_Category::get_all_categories();
$domain = get_site_url();

/*
 * ADD NEW VIDEO
*/
if(isset($_POST['add_video'])) {
    $video_name = $_POST['video_name'];
    $video_slug = 'SLUG';
    $video_description = $_POST['video_description'];
    $video_link = $_POST['video_link'];
    $video_provider = $_POST['video_provider'];
    $video_category_id = $_POST['video_category_id'];
    $video_author_id = get_current_user_id();
    $video_created_at = date("Y-m-d H:i:s");
    $video_seo_title = $_POST['video_seo_title'];
    $video_seo_description = $_POST['video_seo_description'];
    $video_seo_keywords = $_POST['video_seo_keywords'];

    $video = new Videosurfpro_Video($video_name, $video_slug, $video_description, $video_link, $video_provider, $video_category_id, $video_author_id, $video_created_at, $video_seo_title, $video_seo_description, $video_seo_keywords);
    $result = $video->add_video();

    if($result)
        echo 'Video was successfully added';
    else
        echo 'Check the specified data';
}

?>

<link rel="stylesheet" type="text/css" href="/wp-content/plugins/videosurfpro/admin/assets/css/bamburgh.min.css">

<div class="container">
    <form action="" method="POST" id="add_new_video">
        <div id="wizard1">
            <h3>Add Video</h3>
            <section>
                <p class="text-black-50 mb-3 mt-1">Insert link on your video</p>
                <div class="p-3">
                    <div class="form-group">
                        <label for="inputAddress">URL:</label>
                        <input type="text" class="form-control" id="inputAddress" placeholder="https://www.youtube.com/watch?v=Vw1RKh_ELzQ" name="video_link">
                    </div>
                </div>
            </section>
            <h3>Video Details</h3>
            <section>
                <p class="text-black-50 mb-3 mt-1">You can edit any video information</p>

                <!--        HIDDEN DATA        -->
                <input type="hidden" name="video_provider" value="YouTube">
                <input type="hidden" name="add_video" value="add_video" id="add_video">
                <input type="hidden" name="current_user_id" value="<?=get_current_user_id()?>">

                <div class="p-3">
                    <div class="form-group">
                        <label for="inputCity">Name</label>
                        <input type="text" class="form-control" id="inputCity" name="video_name">
                    </div>
                    <div class="form-group">
                        <label for="inputAddress2">Category</label>
                        <select id="inputState" class="form-control" name="video_category_id">
                            <?php foreach($all_categories as $category) : ?>
                                <option value="<?=$category->id?>"><?=$category->category_name?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="inputCity">Description</label>
                        <textarea rows="6" class="form-control" id="inputCity" name="video_description"></textarea>
                    </div>
                    <div class="form-group">
                        <h3>SEO</h3>
                    </div>
                    <div class="form-group">
                        <label for="inputCity">Title</label>
                        <input type="text" class="form-control" id="inputCity" name="video_seo_title">
                    </div>
                    <div class="form-group">
                        <label for="inputCity">Keywords</label>
                        <input type="text" class="form-control" id="inputCity" name="video_seo_keywords">
                    </div>
                    <div class="form-group">
                        <label for="inputCity">Description</label>
                        <input type="text" class="form-control" id="inputCity" name="video_seo_description">
                    </div>
                </div>
            </section>
            <h3>View</h3>
            <section>

                <div class="p-3">
                    <div class="form-group">
                        <h4>Название видео</h4>

                        <iframe width="560" height="315" src="https://www.youtube.com/embed/hrcxV8l2QtU" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

                        <p>Описание видео</p>
                    </div>
                </div>

            </section>
        </div>
    </form>
</div>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="/wp-content/plugins/videosurfpro/admin/assets/vendor/bootstrap/js/bootstrap.min.js"></script>

<!--Bootstrap init-->

<script src="/wp-content/plugins/videosurfpro/admin/assets/js/demo/bootstrap/bootstrap.min.js"></script>

<!--MetisMenu-->

<script src="/wp-content/plugins/videosurfpro/admin/assets/vendor/metismenu/js/metismenu.min.js"></script>

<!--MetisMenu init-->

<script src="/wp-content/plugins/videosurfpro/admin/assets/js/demo/metismenu/metismenu.min.js"></script>

<!--Perfect scrollbar-->

<script src="/wp-content/plugins/videosurfpro/admin/assets/vendor/perfect-scrollbar/js/perfect-scrollbar.min.js"></script>

<!--Perfect scrollbar init-->

<script src="/wp-content/plugins/videosurfpro/admin/assets/js/demo/perfect-scrollbar/perfect-scrollbar.min.js"></script>

<!--FeatherIcons-->

<script src="/wp-content/plugins/videosurfpro/admin/assets/vendor/feather-icons/js/feather-icons.min.js"></script>

<!--FeatherIcons init-->

<script src="/wp-content/plugins/videosurfpro/admin/assets/js/demo/feather-icons/feather-icons.min.js"></script>

<!--Layout-->

<script src="/wp-content/plugins/videosurfpro/admin/assets/js/bamburgh.min.js"></script>



<!--Form Wizard-->

<script src="/wp-content/plugins/videosurfpro/admin/assets/vendor/form-wizard/js/form-wizard.min.js"></script>

<!--Form Wizard init-->

<script src="/wp-content/plugins/videosurfpro/admin/assets/js/demo/form-wizard/form-wizard.min.js"></script>

<script type="text/javascript">
    $('a[href="#finish"]').click(function() {
        $("#add_new_video").submit();
    });
</script>