<?php
$get = "select * from restaurant order by id DESC ";
$run = mysqli_query($con, $get);

include ('view/admin/menu/menu.php');
?>