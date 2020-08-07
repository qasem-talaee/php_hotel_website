<?php
$id = $data[2];
$get = "select * from blog where id=$id";
$run = mysqli_query($con, $get);
$row = mysqli_fetch_array($run);
$title = $row['title'];
$image = $row['image'];
$tag = $row['tag'];
$desc = $row['desc_blog'];
$url = $row['url'];
if (isset($_POST['submit'])){
    $title = test_input($_POST['title']);
    $tag = test_input($_POST['tag']);
    $desc = $_POST['desc'];
    $url = test_input($_POST['url']);
    if ($_FILES['image']['name'] == ''){
        $update = "UPDATE `blog` SET `title` = '$title', `date` = NOW(), `tag` = '$tag', `desc_blog` = '$desc', `url` = '$url' WHERE `blog`.`id` =$id";
        $run = mysqli_query($con, $update);
        if ($run){
            header('Location: '.$base_url.'admin/blog/');
        }
    }else{
        $image = image_upload('image', 'view/images/blog/', 5000000);
        $image = '/blog/'.$image[1];
        $update = "UPDATE `blog` SET `title` = '$title', `image` = '$image', `date` = NOW(), `tag` = '$tag', `desc_blog` = '$desc', `url` = '$url' WHERE `blog`.`id` =$id";
        $run = mysqli_query($con, $update);
        if ($run){
            header('Location: '.$base_url.'admin/blog/');
        }
    }
}

include ('view/admin/blog/blog_edit.php');
?>