<?php
$per_page = 9;
#get count
$get = "select * from room";
$run = mysqli_query($con, $get);
$count = mysqli_num_rows($run);

#get this page
include ('core/pagination.php');
$pagination = pagination($con, 'room', $per_page, 1);
$count_page = $pagination[1];
$start_page = $pagination[0];
$get_blog = "select * from room order by id DESC LIMIT $start_page,$per_page";
$run_blog = mysqli_query($con, $get_blog);

include ('view/rooms.php');
?>