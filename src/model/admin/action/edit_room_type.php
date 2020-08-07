<?php
$id = $data[2];
$get = "select * from room_type where id=$id";
$run = mysqli_query($con, $get);
$row = mysqli_fetch_array($run);
$name = $row['name'];
$star = $row['star'];
if (isset($_POST['submit'])){
    $name = $_POST['name'];
    $star = $_POST['star'];
    $update = "update room_type set name='$name', star='$star' where id=$id";
    $run = mysqli_query($con, $update);
    if($run){
        header('Location: '.$base_url.'admin/room-type/');
    }
}

include ('view/admin/action/edit_room_type.php');
?>