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

use admin\classes\Videosurfpro_Advertisement;
use admin\classes\Videosurfpro_Template;

$all_advertisements = Videosurfpro_Advertisement::get_all_advertisements();

// ADD Advertisement
if (isset($_POST['add_advertisement'])) {
    $advertisement_name = $_POST['advertisement_name'];
    $advertisement_link = $_POST['advertisement_link'];
    $advertisement = new Videosurfpro_Advertisement($advertisement_name, $advertisement_link);
    $result = $advertisement->save();
    if($result)
        echo Videosurfpro_Template::success_alert('Advertisement was successfully added');
    else
        echo Videosurfpro_Template::warning_alert('Can not save your advertisement');
}

// Edit Advertisement
if (isset($_POST['edit_advertisement'])) {

}

?>

<!-- This file should primarily consist of HTML with a little bit of PHP. -->

<link rel="stylesheet" type="text/css" href="/wp-content/plugins/videosurfpro/admin/assets/css/bamburgh.min.css">

<h1>Advertisement PAGE</h1>

<h3>Add new Advertisement</h3>
<form action="" method="POST">
    Advertisemnet Name: <input type="text" name="advertisement_name"> <br>
    Advertisemnet Link: <input type="text" name="advertisement_link"> <br>
    <input name='add_advertisement' type="submit" value="Add" class="button">
</form>

<div>
    <h3>All Advertisement</h3>
    <hr>
    <div>
        <?php foreach($all_advertisements as $advertisement) : ?>
            <form action="" method="POST">
                <input type="hidden" name="advertisement_id" value="<?=$advertisement->id?>">
                Add Name: <input type="text" name="advertisement_name" value="<?=$advertisement->advertisement_name?>" style="width: 350px;"> <br>
                Add Video Link: <input type="text" name="advertisement_link" value="<?=$advertisement->advertisement_link?>" style="width: 350px;"> <br>
                <input name='edit_advertisement' type="submit" class="button" value="Edit">
            </form>
            <hr>
        <?php endforeach; ?>
    </div>
</div>


<!-- Bamburgh Z Admin Dashboard PRO Javascript Core -->

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
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