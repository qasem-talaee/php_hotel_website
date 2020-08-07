<?php
require_once ('core/send_email.php');
$id = $data[2];
$get = "select * from contact where id=$id";
$run = mysqli_query($con, $get);
$row = mysqli_fetch_array($run);
$name = $row['name'];
$email = $row['email'];
$phone = $row['phone'];
$subject = $row['subject'];
$message = $row['message'];
$date = $row['date'];
$status = $row['status'];
if (isset($_POST['submit'])){
    $email = test_input($_POST['email']);
    $phone = test_input($_POST['phone']);
    $replay = test_input($_POST['replay']);
    send_email($email, $name, 'Replay to your message', $replay, 'admin@gmail.com', 'admin', 'noreplay@gmail.com', 'noreplay');
    $update = "update from contact set status=1, email='$email', phone='$phone' where id=$id";
    $run = mysqli_query($con, $update);
    if ($run){
        header('Location: '.$base_url.'admin/user-contact/');
    }
}

include ('view/admin/contact/user_contact_replay.php');
?>