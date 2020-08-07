<?php
include_once ('core/image_upload.php');
if (isset($_POST['submit'])){
    $name = $_POST['name'];
    $price = $_POST['price'];
    $desc_food = $_POST['desc'];
    $image = image_upload('img', 'view/images/menu/', 5000000);
    $image = '/menu/'.$image[1];
    $insert = "insert into restaurant (id, name, image, price, desc_food) value (NULL, '$name', '$image', '$price', '$desc_food')";
    $run = mysqli_query($con, $insert);
    if ($run){
        header('Location: '.$base_url.'admin/menu/');
    }
}

include ('view/admin/menu/menu_add.php');
?>