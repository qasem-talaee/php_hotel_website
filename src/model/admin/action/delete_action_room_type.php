<?php
$id = $data[2];
$del = "delete from room_type where id=$id";
$run = mysqli_query($con, $del);
header('Location: '.$base_url.'admin/room-type/');
?>