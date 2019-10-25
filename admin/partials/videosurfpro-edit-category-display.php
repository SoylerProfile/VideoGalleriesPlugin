<?php

use admin\classes\Videosurfpro_Category;

// GET Category ID from page All Categories and then, work with it
$category_id = $_GET['category_id'];
if(!empty($category_id)) {
    $category_data = Videosurfpro_Category::get_all_category_data_from_db($category_id);
}
else {
    die('Выберите категорию для редактирования!');
}

//Save new Category Data to DB
if(isset($_POST['save_edited_category'])) {
    $id = $_POST['id'];
    $category_name = $_POST['category_name'];
    $category_slug = 'SLUG';
    $category_description = $_POST['category_description'];
    $category_seo_title = $_POST['category_seo_title'];
    $category_seo_description = $_POST['category_seo_description'];
    $category_seo_keywords = $_POST['category_seo_keywords'];
    $result = Videosurfpro_Category::update_category_data($id, $category_name, $category_slug, $category_description, $category_seo_title, $category_seo_description, $category_seo_keywords);
    if($result) {
        echo "Changes were successfully saved!";
    }
    else {
        echo "Can't save your changes <br>";
    }
}

?>

<link rel="stylesheet" type="text/css" href="/wp-content/plugins/videosurfpro/admin/assets/css/bamburgh.min.css">

<div class="container">
    <form action="" method="POST">
        <input type="hidden" name="id" value="<?=$category_data[0]->id?>">
        <div class="p-3">
            <div class="form-group">
                <label for="inputCity">Name</label>
                <input type="text" class="form-control" id="inputCity" name="category_name" value="<?=$category_data[0]->category_name?>">
            </div>
            <div class="form-group">
                <label for="inputCity">Description</label>
                <textarea rows="6" class="form-control" id="inputCity" name="category_description"><?=$category_data[0]->category_description?></textarea>
            </div>
            <div class="form-group">
                <h3>SEO</h3>
            </div>
            <div class="form-group">
                <label for="inputCity">Title</label>
                <input type="text" class="form-control" id="inputCity" name="category_seo_title" value="<?=$category_data[0]->category_seo_title?>">
            </div>
            <div class="form-group">
                <label for="inputCity">Keywords</label>
                <input type="text" class="form-control" id="inputCity" name="category_seo_keywords" value="<?=$category_data[0]->category_seo_keywords?>">
            </div>
            <div class="form-group">
                <label for="inputCity">Description</label>
                <input type="text" class="form-control" id="inputCity" name="category_seo_description" value="<?=$category_data[0]->category_seo_description?>">
            </div>
            <div class="form-group">
                <input name="save_edited_category" type="submit" class="btn btn-success btn-sm" value="Edit Category">
            </div>
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