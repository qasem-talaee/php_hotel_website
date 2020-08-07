<?php
#---- Base Url ----#
$base_url = "/hotel/";

#---- Database ----#
$db_host = 'localhost';
$db_username = 'root';
$db_password = '';
$db_name = 'hotel';
$con = mysqli_connect($db_host, $db_username, $db_password, $db_name);
mysqli_set_charset($con,'utf8');

#---- Test users inputs in urls and forms ----#
function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

#---- Get Url ----#
$url = test_input($_SERVER['REQUEST_URI']);
$url = str_replace($base_url, '', $url);

#---- Get data from url ----#
$explode_url = explode('/', $url);
if(count($explode_url) > 1){
    for($i=1; $i<count($explode_url); $i++){
        $data[$i-1] = $explode_url[$i];
    }
}
session_start();
#---- Cache settings ----#
/*
$cache_time_expired = 1 * 60; #one minute
$cache_sub_folder = explode('/', $_SERVER['REQUEST_URI'])[2];
$cache_folder = "cache/".$cache_sub_folder;
if(!is_dir($cache_folder)){
    mkdir($cache_folder);
}
if(! strstr($cache_sub_folder, "sitemap.xml")){
    $cache_file = $cache_folder."/".md5($_SERVER['REQUEST_URI']).".html";
    if(file_exists($cache_file) && (time()-$cache_time_expired < filemtime($cache_file))){
        include($cache_file);
        exit;
    }else{
        ob_start();

        #---- Include controller file ----#
        include('controller/controller.php');

        $fp = fopen($cache_file, 'w');
        fwrite($fp, ob_get_contents());
        fclose($fp);
        ob_end_flush();
    }
}else{

    #---- Include controller file ----#
    include('controller/controller.php');
}
*/
include('controller/controller.php');
?>