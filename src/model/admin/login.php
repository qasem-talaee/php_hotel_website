<?php
$email=$pass='';
$flag=0;
if (isset($_POST['submit'])){
    if ($_POST['email'] == ''){
        $flag=1;
    }else{
        if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)){
            $flag=1;
        }else{
            $email = test_input($_POST['email']);
        }
    }
    if ($_POST['pass'] == ''){
        $flag=1;
    }else{
        $pass = test_input($_POST['pass']);
        $pass = md5('%fwe54@'.$pass.'gre3r$@_');
    }
    if ($flag == 0){
        $get_user = "select * from user where email='$email' AND password='$pass'";
        $run_user = mysqli_query($con, $get_user);
        $count_user = mysqli_num_rows($run_user);
        if ($count_user != 0){
            $_SESSION['email'] = $email;
            header('Location: '.$base_url.'admin/');
        }else{
            header('Location: '.$base_url.'admin/');
        }
    }
}

include ('view/admin/login.php');
?>