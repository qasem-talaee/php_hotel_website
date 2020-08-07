<?php
$id = $data[2];
$get = "select * from user where id=$id";
$run = mysqli_query($con, $get);
$row = mysqli_fetch_array($run);
$name = $row['name'];
$email = $row['email'];
$password = $row['password'];
$status = $row['status'];
$flag = 0;
if (isset($_POST['submit'])){
    $name = test_input($_POST['name']);
    $email = test_input($_POST['email']);
    if ($_POST['password'] == ''){
        $flag = 2;
    }else{
        if ($_POST['password'] == $_POST['password_again']){
            $password = $_POST['password'];
            $password = md5('%fwe54@'.$password.'gre3r$@_');
        }else{
            $flag = 1;
        }
    }
    $status = $_POST['status'];
    if ($flag == 2 and $flag != 1){
        $update = "update user set name='$name', email='$email', status='$status' where id=$id";
        $run = mysqli_query($con, $update);
        if ($run){
            header('Location: '.$base_url.'admin/user/');
        }
    }
    if ($flag == 0 and $flag != 1){
        $update = "update user set name='$name', email='$email', password='$password', status='$status' where id=$id";
        $run = mysqli_query($con, $update);
        if ($run){
            header('Location: '.$base_url.'admin/user/');
        }
    }
}

include ('view/admin/user/edit_user.php');
?>