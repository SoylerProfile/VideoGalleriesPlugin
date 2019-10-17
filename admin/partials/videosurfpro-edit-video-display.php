<?php

use admin\classes\Videosurfpro_Video;

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
    $video_category = $_POST['video_category'];
    $video_seo_title = $_POST['video_seo_title'];
    $video_seo_description = $_POST['video_seo_description'];
    $video_seo_keywords = $_POST['video_seo_keywords'];
    $result = Videosurfpro_Video::update_video_data($id, $video_name, $video_slug, $video_description, $video_category, $video_seo_title, $video_seo_description, $video_seo_keywords);
    if($result) {
        echo "Changes were successfully saved!";
    }
    else {
        echo "Can't save your changes <br>";
        echo "<pre>";
        var_dump($result);
        echo "</pre>";
    }
}

?>

<h1>Here you can edit your video!</h1>

<form action="" method="POST">
    <input type="hidden" name="id" value="<?=$video_data[0]->id?>">
    <div>
        <span>Video Name: </span><input type="text" placeholder="Name" size="90px;" name="video_name" value="<?=$video_data[0]->video_name?>">
    </div>
    <div>
        <span>Video Description: </span> <br>
        <textarea placeholder="Description" cols="100" rows="30" name="video_description"><?=$video_data[0]->video_description?></textarea>
    </div>
    <div>
        <span>Video Category: </span><input type="text" placeholder="Category" name="video_category" value="<?=$video_data[0]->video_category?>">
    </div>
    <div>
        <span>Video SEO Title: </span><input type="text" placeholder="SEO Title" name="video_seo_title" value="<?=$video_data[0]->video_seo_title?>">
    </div>
    <div>
        <span>Video SEO Description: </span><input type="text" placeholder="SEO Description" name="video_seo_description" value="<?=$video_data[0]->video_seo_description?>">
    </div>
    <div>
        <span>Video SEO Keywords: </span><input type="text" placeholder="SEO Keywords" name="video_seo_keywords" value="<?=$video_data[0]->video_seo_keywords?>">
    </div>
    <input type="submit" value="Save" name="save_edited_video" class="button">
</form>


<div style="margin-bottom: 25px;">
    <hr>
</div>