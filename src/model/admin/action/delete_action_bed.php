<?php
$id = $data[2];
$del = "delete from bed where id=$id";
$run = mysqli_query($con, $del);
header('Location: '.$base_url.'admin/bed/');
?>