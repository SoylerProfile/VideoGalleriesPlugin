<?php

use admin\classes\Videosurfpro_Provider;

if (isset($_POST['set_youtube'])) {
    $provider_name = $_POST['provider'];
    $provider_api_key = $_POST['provider_youtube_api_key'];
    $provider = new Videosurfpro_Provider($provider_name, $provider_api_key);
    $result = $provider->save();
    echo $result;
}

$youtube_api_key = Videosurfpro_Provider::get_provider_api_key('YouTube');

?>

<h1>For work with YouTube you need to set up next values</h1>

<form action="?page=videosurfpro_submenu_youtube_settings" method="POST">
    <input type="hidden" name="provider" value="YouTube">
    <span>API Key: </span>
    <input type="text" name="provider_youtube_api_key" value="<?=$youtube_api_key; ?>" placeholder="AIGaVyBGsDH7N1Gt2A18hY3eYoa78WNJKLAsOpM" style="width: 350px;">
    <input type="submit" value="SET" name="set_youtube">
</form>

<a href="https://www.slickremix.com/docs/get-api-key-for-youtube/" title="How to get YouTube API Key?" target="_blank">instruction</a>