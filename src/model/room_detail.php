<?php
$get = "select * from room where number=$data[0]";
$run = mysqli_query($con, $get);
$room_exist = mysqli_num_rows($run);
if ($room_exist != 0){
    $row = mysqli_fetch_array($run);
    $image = $row['image'];
    $count = $row['count'];
    $view = $row['view'];
    $size = $row['size'];
    $desc = $row['desc_room'];
    $desc = str_replace('../../../', $base_url, $desc);
    $tag = explode('--', $row['tag']);
    $price = $row['price'];
    ###
    $type_id = $row['type'];
    $type = "select * from room_type where id=$type_id";
    $type_run = mysqli_query($con, $type);
    $row_type = mysqli_fetch_array($type_run);
    $type_name = $row_type['name'];
    ###
    $bed_id = $row['bed'];
    $bed = "select * from bed where id=$bed_id";
    $bed_run = mysqli_query($con, $bed);
    $bed_row = mysqli_fetch_array($bed_run);
    $bed_count = $bed_row['bed'];
    ###
    $recent = "select * from blog order by id DESC LIMIT 6";
    $run_recent = mysqli_query($con, $recent);
}

include ('view/rooms-single.php');
?>