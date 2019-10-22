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
        echo 'Category was successfully added';
    else
        echo 'Check the specified data';
}

?>

<!-- This file should primarily consist of HTML with a little bit of PHP. -->

<h1>ADD a new category</h1>

<form action="" method="post">
    <div>Category Name: <input type="text" name="category_name" required></div>
    <div>Category Description: <input type="text" name="category_description" required></div>
    <div>Category SEO TITLE: <input type="text" name="category_seo_title" value="1" required></div>
    <div>Category SEO DESCRIPTION: <input type="text" name="category_seo_description" value="1" required></div>
    <div>Category SEO KEYWORDS: <input type="text" name="category_seo_keywords" value="1" required></div>
    <div><input name='submit' type="submit" class="button" value="Добавить"></div>
</form>