<?php
require_once ('core/pagination.php');
$page = 1;
$per_page = 30;
$pagination = pagination($con, 'blog', $per_page, $page);
$start_page = $pagination[0];
$count_page = $pagination[1];
$get = "select * from blog order by date DESC LIMIT $start_page,$per_page";
$run = mysqli_query($con, $get);

include ('view/admin/blog/blog.php');
?>