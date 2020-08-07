<?php
global $valid_status;
function form_valid($value, $type, $status){
    #For text input
    if($type == 'text'){
        if($status == 1){
            if(empty($value)){
                return $valid_status = array(0, test_input($value));
            }else{
                return $valid_status = array(1, test_input($value));
            }
        }else{
            return $valid_status = array(1, test_input($value));
        }
    }
    #For email input
    if($type == 'email'){
        if($status == 1){
            if(empty($value)){
                return $valid_status = array(0, test_input($value));
            }else{
                if(!filter_var($value, FILTER_VALIDATE_EMAIL)){
                    return $valid_status = array(0, test_input($value));
                }else{
                    return $valid_status = array(1, test_input($value));
                }
            }
        }else{
            if(!filter_var($value, FILTER_VALIDATE_EMAIL)){
                return $valid_status = array(0, test_input($value));
            }else{
                return $valid_status = array(1, test_input($value));
            }
        }
    }
}
?>