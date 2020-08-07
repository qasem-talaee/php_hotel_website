<?php
$id = $data[2];
$get = "select * from bed where id=$id";
$run = mysqli_query($con, $get);
$row = mysqli_fetch_array($run);
$count = $row['bed'];
if (isset($_POST['submit'])){
    $count = test_input($_POST['count']);
    $update = "update bed set bed='$count' where id=$id";
    $run = mysqli_query($con, $update);
    if ($run){
        header('Location: '.$base_url.'admin/bed/');
    }
}

include ('view/admin/action/edit_bed.php');
?>