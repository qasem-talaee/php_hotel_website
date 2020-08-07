<?php
$get = "select * from bed";
$run = mysqli_query($con, $get);

include ('view/admin/bed.php');
?>