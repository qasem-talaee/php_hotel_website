<?php
$id = $data[2];
$delete = "delete from user where id=$id";
$run = mysqli_query($con, $delete);
header('Location: '.$base_url.'admin/user/');
?>