<?php
function pagination($connection_name ,$table_name, $per_page, $number_of_page){
    #count row
    $get_count = "select * from $table_name";
    $run_count = mysqli_query($connection_name, $get_count);
    $count_row = mysqli_num_rows($run_count);
    #count page
    $start_page=($number_of_page-1)*$per_page;
    $count_page=ceil($count_row/$per_page);
    return $pagination = array($start_page, $count_page+1);
}
?>