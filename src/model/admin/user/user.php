<?php
$get = "select * from user where status!='admin'";
$run = mysqli_query($con, $get);

include ('view/admin/user/user.php');
?>