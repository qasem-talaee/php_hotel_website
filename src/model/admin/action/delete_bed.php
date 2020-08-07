<?php
$id=$data[2];
$get = "select * from bed where id=$id";
$run = mysqli_query($con, $get);
$row = mysqli_fetch_array($run);
$count = $row['bed'];

include ('view/admin/action/delete_bed.php');
?>