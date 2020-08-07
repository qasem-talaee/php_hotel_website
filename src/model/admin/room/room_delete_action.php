<?php
$id = $data[2];
$delete = "delete from room where id=$id";
$run = mysqli_query($con, $delete);
if ($run){
    header('Location: '.$base_url.'admin/room/');
}
?>