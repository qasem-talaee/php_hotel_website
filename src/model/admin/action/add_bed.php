<?php
if (isset($_POST['submit'])){
    $count = test_input($_POST['count']);
    $insert = "insert into bed (id, bed) value (NULL , '$count')";
    $run = mysqli_query($con, $insert);
    if ($run){
        header('Location: '.$base_url.'admin/bed/');
    }
}

include ('view/admin/action/add_bed.php');
?>