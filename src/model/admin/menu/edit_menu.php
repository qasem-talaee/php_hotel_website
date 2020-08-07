<?php
$id = $data[2];
$get = "select * from restaurant where id=$id";
$run = mysqli_query($con, $get);
$row = mysqli_fetch_array($run);
$name = $row['name'];
$image = $row['image'];
$price = $row['price'];
$desc = $row['desc_food'];
if (isset($_POST['submit'])){
    if ($_FILES['img']['name'] == ''){
        $name = test_input($_POST['name']);
        $price = test_input($_POST['price']);
        $desc = test_input($_POST['desc']);
        $update = "UPDATE `restaurant` SET `name` = '$name', `price` = '$price', `desc_food` = '$desc' WHERE `restaurant`.`id` = $id";
        $run = mysqli_query($con, $update);
        if ($run){
            header('Location: '.$base_url.'admin/menu/');
        }
    }else{
        $name = $_POST['name'];
        $price = $_POST['price'];
        $desc_food = $_POST['desc'];
        $image = image_upload('img', 'view/images/menu/', 5000000);
        $image = '/menu/'.$image[1];
        $update = "UPDATE `restaurant` SET `name` = '$name', `image` = '$image', `price` = '$price', `desc_food` = '$desc_food' WHERE `restaurant`.`id` = $id";
        $run = mysqli_query($con, $update);
        if ($run){
            header('Location: '.$base_url.'admin/menu/');
        }
    }
}

include ('view/admin/menu/edit_menu.php');
?>