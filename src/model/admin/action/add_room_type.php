<?php
if (isset($_POST['submit'])){
    $name = test_input($_POST['name']);
    $star = test_input($_POST['star']);
    $insert = "insert into room_type (id, name, star) value (NULL, '$name', '$star')";
    $run = mysqli_query($con, $insert);
    if ($run){
        header('Location: '.$base_url.'admin/room-type/');
    }
}

include ('view/admin/action/add_room_type.php');
?>