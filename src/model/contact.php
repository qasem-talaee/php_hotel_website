<?php
$get_contact_info = "select * from contact_info";
$run_contact_info = mysqli_query($con, $get_contact_info);
$row_contact_info = mysqli_fetch_array($run_contact_info);
###
$address = $row_contact_info['address'];
$phone = $row_contact_info['phone'];
$email = $row_contact_info['email'];
$website = $row_contact_info['website'];
###
include ('core/form_valid.php');
$flag=$flag_send=0;
$name_form=$name_err=$email_err=$email_form=$subject=$subject_err=$message=$message_err=$phone_form='';
if (isset($_POST['submit'])){
    if($_POST['name'] == ''){
        $flag=1;
        $name_err='Please insert your name';
    }else{
        $name_form=test_input($_POST['name']);
    }
    if($_POST['email'] == ''){
        $flag=1;
        $email_err='Please insert your email address';
    }else{
        if(!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)){
            $flag=1;
            $email_err='Please insert a correct email address';
        }else{
            $email_form=test_input($_POST['email']);
        }
    }
    if($_POST['subject'] == ''){
        $flag=0;
        $subject_err='Please insert your subject';
    }else{
        $subject=test_input($_POST['subject']);
    }
    if($_POST['phone'] == ''){
        $phone_form='No Phone';
    }else{
        $phone_form=test_input($_POST['phone']);
    }
    if($_POST['message'] == ''){
        $flag=1;
        $message_err='Please insert your message';
    }else{
        $message=test_input($_POST['message']);
    }
    if($flag==0){
        $insert = "INSERT INTO `contact` (`id`, `name`, `email`, `phone`, `subject`, `message`, `date`, `status`) VALUES (NULL, '$name_form', '$email_form', '$phone_form', '$subject', '$message', NOW(), 0)";
        $run = mysqli_query($con, $insert);
        if(!$run){
            $flag=2;
        }else{
            $flag_send=1;
        }
    }
    echo('<meta http-equiv = "refresh" content = "0; url = #contact" />');
}
include ('view/contact.php');
?>