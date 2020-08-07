<?php
$get = "select * from blog where url='$data[0]'";
$run = mysqli_query($con, $get);
$blog_exist = mysqli_num_rows($run);
$title=$desc=$tag=$image=$run_recent='';
if($blog_exist != 0){
    $row = mysqli_fetch_array($run);
    $title = $row['title'];
    $desc = $row['desc_blog'];
    $desc = str_replace('../../../', $base_url, $desc);
    $tag = $row['tag'];
    $tag = explode('--', $tag);
    $image = $row['image'];
    ####
    $recent = "select * from blog order by id DESC LIMIT 6";
    $run_recent = mysqli_query($con, $recent);
}else{
    header('Location: '.$base_url.'404/');
}

include ('view/blog-single.php');
?>