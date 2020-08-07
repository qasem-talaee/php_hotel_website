<?php
require_once ('core/image_upload.php');
$get_type = "select * from room_type";
$run_type = mysqli_query($con, $get_type);

$get_bed = "select * from bed";
$run_bed = mysqli_query($con, $get_bed);

if (isset($_POST['submit'])){
    $type = test_input($_POST['type']);
    $bed = test_input($_POST['bed']);
    $image = image_upload('image', 'view/images/room/', 5000000);
    $image = '/room/'.$image[1];
    $number = test_input($_POST['number']);
    $price = test_input($_POST['price']);
    $count = test_input($_POST['count']);
    $size = test_input($_POST['size']);
    $view = test_input($_POST['view']);
    $tag = test_input($_POST['tag']);
    $desc = $_POST['desc'];
    $insert = "insert into room (id, type, count, price, view, size, bed, tag, desc_room, image, number) value (NULL, '$type', '$count', '$price', '$view', '$size', '$bed', '$tag', '$desc', '$image', '$number')";
    $run = mysqli_query($con, $insert);
    if ($run){
        header('Location: '.$base_url.'admin/room/');
    }
}

include ('view/admin/room/room_add.php');
?>