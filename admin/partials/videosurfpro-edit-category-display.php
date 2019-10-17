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
        echo "<pre>";
        var_dump($result);
        echo "</pre>";
    }
}

?>

<h1>Here you can edit your category!</h1>

<form action="" method="POST">
    <input type="hidden" name="id" value="<?=$category_data[0]->id?>">
    <div>
        <span>Category Name: </span><input type="text" placeholder="Name" size="90px;" name="category_name" value="<?=$category_data[0]->category_name?>">
    </div>
    <div>
        <span>Category Description: </span> <br>
        <textarea placeholder="Description" cols="100" rows="30" name="category_description"><?=$category_data[0]->category_description?></textarea>
    </div>
    <div>
        <span>Category SEO Title: </span><input type="text" placeholder="SEO Title" name="category_seo_title" value="<?=$category_data[0]->category_seo_title?>">
    </div>
    <div>
        <span>Category SEO Description: </span><input type="text" placeholder="SEO Description" name="category_seo_description" value="<?=$category_data[0]->category_seo_description?>">
    </div>
    <div>
        <span>Category SEO Keywords: </span><input type="text" placeholder="SEO Keywords" name="category_seo_keywords" value="<?=$category_data[0]->category_seo_keywords?>">
    </div>
    <input type="submit" value="Save" name="save_edited_category" class="button">
</form>


<div style="margin-bottom: 25px;">
    <hr>
</div>