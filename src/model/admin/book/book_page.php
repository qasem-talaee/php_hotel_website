<?php
require_once ('core/pagination.php');
$page = $data[2];
$per_page = 30;
$pagination = pagination($con, 'booking', $per_page, $page);
$start_page = $pagination[0];
$count_page = $pagination[1];
$get = "select * from booking order by id DESC LIMIT $start_page,$per_page";
$run = mysqli_query($con, $get);

include ('view/admin/book/book.php');
?>