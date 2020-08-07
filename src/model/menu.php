<?php
$get = "select * from restaurant";
$run = mysqli_query($con, $get);

include ('view/menu.php');
?>