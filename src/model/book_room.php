<?php
$flag_book = 0;
#$key_num = '';
$start_date = $data[0];
$end_date = $data[1];
$id = $data[2];
$type_get = $data[3];
$bed_get = $data[4];
$get_room_exist = "select * from room where type=$type_get AND bed=$bed_get";
$run_room_exist = mysqli_query($con, $get_room_exist);
$count_room_exist = mysqli_num_rows($run_room_exist);
if ($count_room_exist != 0) {
    $begin = new DateTime($start_date);
    $end = new DateTime($end_date);
    $daterange = new DatePeriod($begin, new DateInterval('P1D'), $end);
    $flag_exist = 0;
    foreach($daterange as $date) {
        $sql_date = $date->format("Y-m-d");
        $get_exist_date = "select * from booking where room=$id AND '$sql_date' between start_date AND end_date";
        $run_exist_date = mysqli_query($con, $get_exist_date);
        $count_exist_date = mysqli_num_rows($run_exist_date);
        if ($count_exist_date != 0) {
            $flag_exist = 1;
            break;
        }
    }
    if ($flag_exist == 0){
        if (isset($_POST['submit'])) {
            $name = test_input($_POST['name']);
            $email = test_input($_POST['email']);
            $phone = test_input($_POST['phone']);
            $start_date = test_input($_POST['start_date']);
            $end_date = test_input($_POST['end_date']);
            $get_room_exist = "select * from room where type=$type_get AND bed=$bed_get";
            $run_room_exist = mysqli_query($con, $get_room_exist);
            $count_room_exist = mysqli_num_rows($run_room_exist);
            if ($count_room_exist != 0) {
                $begin = new DateTime($start_date);
                $end = new DateTime($end_date);
                $daterange = new DatePeriod($begin, new DateInterval('P1D'), $end);
                $flag_exist = 0;
                foreach ($daterange as $date) {
                    $sql_date = $date->format("Y-m-d");
                    $get_exist_date = "select * from booking where room=$id AND '$sql_date' between start_date AND end_date";
                    $run_exist_date = mysqli_query($con, $get_exist_date);
                    $count_exist_date = mysqli_num_rows($run_exist_date);
                    if ($count_exist_date != 0) {
                        $flag_exist = 1;
                        break;
                    }
                }
            }
            if ($flag_exist == 0){
                ###
                function key_num_generator($connection_name){
                    $alphabet = '123456789';
                    $pass = array(); //remember to declare $pass as an array
                    $alphaLength = strlen($alphabet) - 1; //put the length -1 in cache
                    for ($i = 0; $i < 6; $i++) {
                        $n = rand(0, $alphaLength);
                        $pass[] = $alphabet[$n];
                    }
                    $pass = implode("", $pass);
                    $pass_sql = "select * from booking where key_num='$pass'";
                    $run = mysqli_query($connection_name, $pass_sql);
                    $count = mysqli_num_rows($run);
                    if ($count != 0){
                        $key_num = key_num_generator($connection_name);
                    }else{
                        $key_num = $pass;
                    }
                    return $key_num;
                }
                $key_num = key_num_generator($con);
                ####
                $insert = "INSERT INTO `booking` (`id`, `start_date`, `end_date`, `room`, `name`, `email`, `phone`, `key_num`, `status`) VALUES (NULL, '$start_date', '$end_date', '$id', '$name', '$email', '$phone', '$key_num', '0')";
                $run = mysqli_query($con, $insert);
                if ($run){
                    $flag_book = 1;
                    echo('<meta http-equiv = "refresh" content = "0; url = #info" />');
                }else{
                    $flag_book = 2;
                    echo('<meta http-equiv = "refresh" content = "0; url = #info" />');
                }
            }else{
                header('Location: '.$base_url);
            }
        }
        include ('view/book_room.php');
    }else{
        header('Location: '.$base_url);
    }
}else{
    header('Location: '.$base_url);
}

?>