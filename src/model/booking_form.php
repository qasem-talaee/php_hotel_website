<?php
$flag=$exist=0;
$start_date=$end_date=$room_type=$bed_form=$run_room_exist='';
if (isset($_POST['submit'])){
    if ($_POST['start_date'] == ''){
        $flag=1;
    }else{
        $start_date = test_input($_POST['start_date']);
    }
    if ($_POST['end_date'] == ''){
        $flag=1;
    }else{
        $end_date = test_input($_POST['end_date']);
    }
    $room_type = test_input($_POST['room_type']);
    $bed_form = test_input($_POST['bed']);
    if ($flag == 0){
        $get_room_exist = "select * from room where type=$room_type AND bed=$bed_form";
        $run_room_exist = mysqli_query($con, $get_room_exist);
        $count_room_exist = mysqli_num_rows($run_room_exist);
        if ($count_room_exist != 0){
            include ('view/booking.php');
        }else{
            $exist = 1;
            include ('view/booking.php');
        }
    }else{
        $exist = 1;
        include ('view/booking.php');
    }
}else{
    include ('model/404.php');
}
?>