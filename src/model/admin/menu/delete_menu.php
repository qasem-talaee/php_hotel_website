<?php
$id=$data[2];
$get = "select * from restaurant where id=$id";
$run = mysqli_query($con, $get);
$row = mysqli_fetch_array($run);
$name = $row['name'];

include ('view/admin/menu/delete_menu.php');
?>