<?php
$get = "select * from room_type";
$run = mysqli_query($con, $get);

include ('view/admin/room_type.php');