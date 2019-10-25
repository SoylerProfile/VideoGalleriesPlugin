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
use admin\classes\Videosurfpro_Template;

if(isset($_POST['submit'])) {
    $category_name = $_POST['category_name'];
    $category_slug = 'SLUG';
    $category_description = $_POST['category_description'];
    $category_created_at = date("Y-m-d H:i:s");
    $category_seo_title = $_POST['category_seo_title'];
    $category_seo_description = $_POST['category_seo_description'];
    $category_seo_keywords = $_POST['category_seo_keywords'];

    $category = new Videosurfpro_Category($category_name, $category_slug, $category_description, $category_created_at, $category_seo_title, $category_seo_description, $category_seo_keywords);
    $result = $category->add_category();

    if($result)
        echo Videosurfpro_Template::success_alert('Category was successfully added');
    else
        echo Videosurfpro_Template::warning_alert('Check the specified data');
}



?>

<!-- This file should primarily consist of HTML with a little bit of PHP. -->

<link rel="stylesheet" type="text/css" href="/wp-content/plugins/videosurfpro/admin/assets/css/bamburgh.min.css">

<div class="container">
    <form action="" method="POST">
        <div class="p-3">
            <div class="form-group">
                <label for="inputCity">Name</label>
                <input type="text" class="form-control" id="inputCity" name="category_name">
            </div>
            <div class="form-group">
                <label for="inputCity">Description</label>
                <textarea rows="6" class="form-control" id="inputCity" name="category_description"></textarea>
            </div>
            <div class="form-group">
                <h3>SEO</h3>
            </div>
            <div class="form-group">
                <label for="inputCity">Title</label>
                <input type="text" class="form-control" id="inputCity" name="category_seo_title">
            </div>
            <div class="form-group">
                <label for="inputCity">Keywords</label>
                <input type="text" class="form-control" id="inputCity" name="category_seo_keywords">
            </div>
            <div class="form-group">
                <label for="inputCity">Description</label>
                <input type="text" class="form-control" id="inputCity" name="category_seo_description">
            </div>
            <div class="form-group">
                <input name='submit' type="submit" class="btn btn-success btn-sm" value="Add Category">
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