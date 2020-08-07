<?php
$id = $data[2];
$get = "select * from user where id=$id";
$run = mysqli_query($con, $get);
$row = mysqli_fetch_array($run);
$name = $row['name'];
$email = $row['email'];

include ('view/admin/user/delete_user.php');
?>