<?php
$id = $data[2];
$get = "select * from room where id=$id";
$run = mysqli_query($con, $get);
$row = mysqli_fetch_array($run);
$number = $row['number'];

include ('view/admin/room/room_delete.php');
?>