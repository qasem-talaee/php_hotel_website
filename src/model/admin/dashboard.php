<?php
####GET ALL BOOK
$get_all_book = "select * from booking";
$run_all_book = mysqli_query($con, $get_all_book);
$count_all_book = mysqli_num_rows($run_all_book);
####GET RESERVED
$date = date('Y-m-d');
$get_new_book = "select * from booking where start_date>'$date' AND status='0'";
$run_new_book = mysqli_query($con, $get_new_book);
$count_new_book = mysqli_num_rows($run_new_book);
####GET ABONDEND RESERVED
$get_left_book = "select * from booking where end_date<'$date' AND status='0'";
$run_left_book = mysqli_query($con, $get_left_book);
$count_left_book = mysqli_num_rows($run_left_book);
####GET count user
$get_count_user = "select * from user";
$run_count_user = mysqli_query($con, $get_count_user);
$count_user = mysqli_num_rows($run_count_user);

include ('view/admin/index.php');
?>