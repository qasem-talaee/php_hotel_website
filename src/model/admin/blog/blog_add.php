<?php
require_once ('core/image_upload.php');
if (isset($_POST['submit'])){
    $title = test_input($_POST['title']);
    $tag = test_input($_POST['tag']);
    $desc = $_POST['desc'];
    $url = $_POST['url'];
    $image = image_upload('image', 'view/images/blog/', 5000000);
    $image = '/blog/'.$image[1];
    $insert = "insert into blog (id, title, image, date, tag, desc_blog, url) value (NULL, '$title', '$image', NOW(), '$tag', '$desc', '$url')";
    $run = mysqli_query($con, $insert);
    if ($run){
        header('Location: '.$base_url.'admin/blog');
    }
}

include ('view/admin/blog/blog_add.php');