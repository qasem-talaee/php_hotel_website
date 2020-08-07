<?php
require_once ('core/pagination.php');
$num_page = $data[2];
$per_page = 30;
$pagination1 = pagination($con, 'contact', $per_page, $num_page);
$start_page = $pagination1[0];
$count_page = $pagination1[1];

$get = "select * from contact order by date DESC LIMIT $start_page, $per_page";
$run = mysqli_query($con, $get);

include ('view/admin/contact/user_contact.php');
?>