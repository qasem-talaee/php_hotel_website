<?php
$get = "select * from contact_info where id=1";
$run = mysqli_query($con, $get);
$row = mysqli_fetch_array($run);
$address = $row['address'];
$phone = $row['phone'];
$email = $row['email'];
$website = $row['website'];
if (isset($_POST['submit'])){
    $address = test_input($_POST['address']);
    $phone = test_input($_POST['phone']);
    $email = test_input($_POST['email']);
    $website = test_input($_POST['website']);
    $update = "update contact_info set address='$address', phone='$phone', email='$email', website='$website' where id=1";
    $run = mysqli_query($con, $update);
}

include ('view/admin/contact_info.php');
?>