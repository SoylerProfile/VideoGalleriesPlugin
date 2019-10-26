<?php

use admin\classes\Videosurfpro_Video;
use admin\classes\Videosurfpro_Category;
use admin\classes\Videosurfpro_Template;

$all_categories = Videosurfpro_Category::get_all_categories();

// GET Video ID from page All Videos and then, work with it
$video_id = $_GET['video_id'];
if(!empty($video_id)) {
    $video_data = Videosurfpro_Video::get_all_video_data_from_db($video_id);
}
else {
    die('Выберите видео для редактирования!');
}

//Save new Video Data to DB
if(isset($_POST['save_edited_video'])) {
    $id = $_POST['id'];
    $video_name = $_POST['video_name'];
    $video_slug = 'SLUG';
    $video_description = $_POST['video_description'];
    $video_category_id = $_POST['video_category_id'];
    $video_seo_title = $_POST['video_seo_title'];
    $video_seo_description = $_POST['video_seo_description'];
    $video_seo_keywords = $_POST['video_seo_keywords'];
    $result = Videosurfpro_Video::update_video_data($id, $video_name, $video_slug, $video_description, $video_category_id, $video_seo_title, $video_seo_description, $video_seo_keywords);
    if($result)
        echo Videosurfpro_Template::success_alert('Changes were successfully saved!');
    else
        echo Videosurfpro_Template::warning_alert('Can not save your changes');
}

?>

<link rel="stylesheet" type="text/css" href="/wp-content/plugins/videosurfpro/admin/assets/css/bamburgh.min.css">

<div class="wrap">
  <div class="col-md-12">
  <div class="card">
    <form action="" method="POST">
        <input type="hidden" name="id" value="<?=$video_data[0]->id?>">
        <div class="p-3">
            <div class="form-group">
                <label for="inputCity">Name</label>
                <input type="text" class="form-control" id="inputCity" name="video_name" value="<?=$video_data[0]->video_name?>">
            </div>
            <div class="form-group">
                <label for="inputCity">Description</label>
                <textarea rows="6" class="form-control" id="inputCity" name="video_description"><?=$video_data[0]->video_description?></textarea>
            </div>
            <div class="form-group">
                <label for="inputCity">Video Category</label>
                <select id="inputCity" name="video_category_id" class="form-control">
                    <?php foreach($all_categories as $category) : ?>
                        <option value="<?=$category->id?>" <?php echo (($video_data[0]->video_category_id == $category->id)) ? "selected='selected'" : "" ?>><?=$category->category_name?></option>
                    <?php endforeach; ?>
                </select>
            </div>
            <div class="form-group">
                <h3>SEO</h3>
            </div>
            <div class="form-group">
                <label for="inputCity">Title</label>
                <input type="text" class="form-control" id="inputCity" name="video_seo_title" value="<?=$video_data[0]->video_seo_title?>">
            </div>
            <div class="form-group">
                <label for="inputCity">Keywords</label>
                <input type="text" class="form-control" id="inputCity" name="video_seo_keywords" value="<?=$video_data[0]->video_seo_keywords?>">
            </div>
            <div class="form-group">
                <label for="inputCity">Description</label>
                <input type="text" class="form-control" id="inputCity" name="video_seo_description" value="<?=$video_data[0]->video_seo_description?>">
            </div>
            <div class="form-group">
                <input name="save_edited_video" type="submit" class="btn btn-success btn-sm" value="Edit Video">
            </div>
        </div>
    </form>
  </div>
  </div>
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
