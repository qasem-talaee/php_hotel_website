<?php
#get type of room
$get_type_index = "select * from room_type";
$run_type_index = mysqli_query($con, $get_type_index);
#get food
$get_food = "select * from restaurant order by rand() LIMIT 6";
$run_food = mysqli_query($con, $get_food);

#get blog
$get_blog = "select * from blog order by rand() LIMIT 3";
$run_blog = mysqli_query($con, $get_blog);

include('view/index.php');
?>