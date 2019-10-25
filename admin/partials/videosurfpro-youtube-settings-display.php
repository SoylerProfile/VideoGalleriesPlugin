<?php

use admin\classes\Videosurfpro_Provider;
use admin\classes\Videosurfpro_Template;

if (isset($_POST['set_youtube'])) {
    $provider_name = $_POST['provider'];
    $provider_api_key = $_POST['provider_youtube_api_key'];
    $provider = new Videosurfpro_Provider($provider_name, $provider_api_key);
    $result = $provider->save();
    if ($result = 'updated') {
        echo Videosurfpro_Template::success_alert('API KEY Was successfully updated');
    } elseif ($result = 'cannot_update') {
        echo Videosurfpro_Template::warning_alert('Can not update your API key');
    } elseif ($result = 'created') {
        echo Videosurfpro_Template::success_alert('API KEY Was successfully saved');
    } elseif ($result = 'cannot_insert') {
        echo Videosurfpro_Template::warning_alert('Can not insert your API key');
    } else {
        echo Videosurfpro_Template::info_alert('Something went wrong!');
    }
}

$youtube_api_key = Videosurfpro_Provider::get_provider_api_key('YouTube');

?>

<link rel="stylesheet" type="text/css" href="/wp-content/plugins/videosurfpro/admin/assets/css/bamburgh.min.css">

<h1>For work with YouTube you need to set up next values</h1>

<form action="?page=videosurfpro_submenu_youtube_settings" method="POST">
    <input type="hidden" name="provider" value="YouTube">
    <span>API Key: </span>
    <input type="text" name="provider_youtube_api_key" value="<?=$youtube_api_key; ?>" placeholder="AIGaVyBGsDH7N1Gt2A18hY3eYoa78WNJKLAsOpM" style="width: 350px;">
    <input type="submit" value="SET" name="set_youtube">
</form>

<a href="https://www.slickremix.com/docs/get-api-key-for-youtube/" title="How to get YouTube API Key?" target="_blank">instruction</a>

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
