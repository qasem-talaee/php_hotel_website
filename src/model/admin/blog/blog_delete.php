<?php
$id = $data[2];
$get = "select * from blog where id=$id";
$run = mysqli_query($con, $get);
$row = mysqli_fetch_array($run);
$title = $row['title'];
$url = $row['url'];

include ('view/admin/blog/blog_delete.php');
?>