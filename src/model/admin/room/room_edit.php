<?php
require_once ('core/image_upload.php');
$get_type = "select * from room_type";
$run_type = mysqli_query($con, $get_type);

$get_bed = "select * from bed";
$run_bed = mysqli_query($con, $get_bed);

$id=$data[2];
$get = "select * from room where id=$id";
$run = mysqli_query($con, $get);
$row = mysqli_fetch_array($run);
$id = $data[2];
$type = $row['type'];
$count = $row['count'];
$price = $row['price'];
$view = $row['view'];
$size = $row['size'];
$bed = $row['bed'];
$tag = $row['tag'];
$desc = $row['desc_room'];
$image = $row['image'];
$number = $row['number'];
if (isset($_POST['submit'])){
    $type = test_input($_POST['type']);
    $bed = test_input($_POST['bed']);
    $number = test_input($_POST['number']);
    $price = test_input($_POST['price']);
    $count = test_input($_POST['count']);
    $size = test_input($_POST['size']);
    $view = test_input($_POST['view']);
    $tag = test_input($_POST['tag']);
    $desc = $_POST['desc'];
    if ($_FILES['image']['name'] == ''){
        $update = "UPDATE `room` SET `type` = '$type', `number` = '$number', `count` = '$count', `price` = '$price', `view` = '$view', `size` = '$size', `bed` = '$bed', `tag` = '$tag', `desc_room` = '$desc' WHERE `room`.`id` = $id";
        $run = mysqli_query($con, $update);
        if ($run){
            header('Location: '.$base_url.'admin/room/');
        }
    }else{
        $image = image_upload('image', 'view/images/room/', 5000000);
        $image = '/room/'.$image[1];
        $update = "UPDATE `room` SET `type` = '$type', `number` = '$number', `count` = '$count', `price` = '$price', `view` = '$view', `size` = '$size', `bed` = '$bed', `tag` = '$tag', `desc_room` = '$desc', `image` = '$image' WHERE `room`.`id` = $id";
        $run = mysqli_query($con, $update);
        if ($run){
            header('Location: '.$base_url.'admin/room/');
        }
    }
}

include ('view/admin/room/room_edit.php');
?>