<?php
global $valid_status;
function image_upload($form_name_input, $location, $size_limit){
    $acceptable = array('image/jpeg', 'image/jpg', 'image/gif', 'image/png');
    if($_FILES[$form_name_input]['name'] != ''){
        if(!in_array($_FILES[$form_name_input]['type'], $acceptable)){
            return $valid_status = array(0, $_FILES[$form_name_input]['name']);
        }else{
            if($_FILES[$form_name_input]['size'] > $size_limit){
                return $valid_status = array(0, $_FILES[$form_name_input]['name']);
            }else{
                $img = $_FILES[$form_name_input]['name'];
                $temp_img = $_FILES[$form_name_input]['tmp_name'];
                #get type file
                $type = explode('.', $img);
                #change name
                $newfilename = round(microtime(true)).'.'.end($type);
                move_uploaded_file($temp_img, $location.$newfilename);
                return $valid_status = array(1, $newfilename);
            }
        }
    }else{
        return $valid_status = array(0, $_FILES[$form_name_input]['name']);
    }
}
function image_upload_thumbnail($form_name_input, $location, $size_limit, $thumb_location, $thumb_size){
    $acceptable = array('image/jpeg', 'image/jpg', 'image/gif', 'image/png');
    if($_FILES[$form_name_input]['name'] != ''){
        if(!in_array($_FILES[$form_name_input]['type'], $acceptable)){
            return $valid_status = array(0, $_FILES[$form_name_input]['name']);
        }else{
            if($_FILES[$form_name_input]['size'] > $size_limit){
                return $valid_status = array(0, $_FILES[$form_name_input]['name']);
            }else{
                $img = $_FILES[$form_name_input]['name'];
                $temp_img = $_FILES[$form_name_input]['tmp_name'];
                #get type file
                $type = explode('.', $img);
                #change name
                $newfilename = round(microtime(true)).'.'.end($type);
                move_uploaded_file($temp_img, $location.$newfilename);
                #create thumbnail for jpg
                if(end($type) == 'jpg' or end($type) == 'jpeg'){
                    $img = imagecreatefromjpeg($location.$newfilename);
                    $width = imagesx($img);
                    $height = imagesy( $img);
                    $new_width = $width*$thumb_size;
                    $new_height = $height*$thumb_size;
                    $tmp_img = imagecreatetruecolor( $new_width, $new_height );
                    imagecopyresized( $tmp_img, $img, 0, 0, 0, 0, $new_width, $new_height, $width, $height );
                    imagejpeg($tmp_img, $thumb_location.'thumb_'.$newfilename);
                }
                #create thumbnail for png
                if(end($type) == 'png'){
                    $img = imagecreatefrompng($location.$newfilename);
                    $width = imagesx($img);
                    $height = imagesy( $img);
                    $new_width = $width*$thumb_size;
                    $new_height = $height*$thumb_size;
                    $tmp_img = imagecreatetruecolor( $new_width, $new_height );
                    imagecopyresized( $tmp_img, $img, 0, 0, 0, 0, $new_width, $new_height, $width, $height );
                    imagepng($tmp_img, $thumb_location.'thumb_'.$newfilename);
                }
                #create thumbnail for png
                if(end($type) == 'gif'){
                    $img = imagecreatefromgif($location.$newfilename);
                    $width = imagesx($img);
                    $height = imagesy( $img);
                    $new_width = $width*$thumb_size;
                    $new_height = $height*$thumb_size;
                    $tmp_img = imagecreatetruecolor( $new_width, $new_height );
                    imagecopyresized( $tmp_img, $img, 0, 0, 0, 0, $new_width, $new_height, $width, $height );
                    imagegif($tmp_img, $thumb_location.'thumb_'.$newfilename);
                }
                return $valid_status = array(1, $newfilename, 'thumb_'.$newfilename);
            }
        }
    }else{
        return $valid_status = array(0, $_FILES[$form_name_input]['name']);
    }
}
?>