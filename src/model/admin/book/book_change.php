<?php
$id=$data[2];
$get = "select * from booking where id=$id";
$run = mysqli_query($con, $get);
$row = mysqli_fetch_array($run);
$status = $row['status'];
if ($status == 1){
    $update = "UPDATE `booking` SET `status` = '0' WHERE `booking`.`id` = $id";
    $run = mysqli_query($con, $update);
    if ($run){
        header('Location: '.$base_url.'admin/book/');
    }
}
if ($status == 0){
    $update = "UPDATE `booking` SET `status` = '1' WHERE `booking`.`id` = $id";
    $run = mysqli_query($con, $update);
    if ($run){
        header('Location: '.$base_url.'admin/book/');
    }
}
?>