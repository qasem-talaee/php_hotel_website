<?php
$id = $data[2];
$get = "select * from room_type where id=$id";
$run = mysqli_query($con, $get);
$row = mysqli_fetch_array($run);
$name = $row['name'];

include ('view/admin/action/delete_room_type.php');
?>