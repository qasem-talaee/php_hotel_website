<?php
if (isset($_POST['submit'])){
    $name = test_input($_POST['name']);
    $email = test_input($_POST['email']);
    $pass = test_input($_POST['password']);
    $pass = md5('%fwe54@'.$pass.'gre3r$@_');
    $status = test_input($_POST['status']);
    $insert = "insert into user (id, name, email, password, status) value (NULL ,'$name', '$email', '$pass', '$status')";
    $run = mysqli_query($con, $insert);
    if ($run){
        header('Location: '.$base_url.'admin/user/');
    }
}

include ('view/admin/user/add_user.php');