<?php
require_once ('core/pagination.php');
$num_page = $data[2];
$per_page = 30;
$pagination1 = pagination($con, 'room', $per_page, $num_page);
$start_page = $pagination1[0];
$count_page = $pagination1[1];
$get = "select * from room order by id DESC LIMIT $start_page,$per_page";
$run = mysqli_query($con, $get);

include ('view/admin/room/room.php');
?>