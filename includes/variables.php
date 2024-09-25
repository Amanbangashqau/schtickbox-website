<?php
$web_dir = "/";
$app_path = "https://" . $_SERVER['HTTP_HOST'] . "/" . $web_dir;
$root_path = $_SERVER['DOCUMENT_ROOT'] . "/" . $web_dir;

if ($_SERVER['HTTP_HOST'] == 'localhost' || $_SERVER['HTTP_HOST'] == '127.0.0.1') {
    $web_dir = "my_sites/schtickbox/";
    $app_path = "http://" . $_SERVER['HTTP_HOST'] . "/" . $web_dir;
    $root_path = $_SERVER['DOCUMENT_ROOT'] . "/" . $web_dir;
}

$img_path = $app_path."assets/images/";

$today         = date('m/d/Y h:i:s A', time());
$current_month = date("m y", strtotime($today));
$current_year  = date("Y", strtotime($today));
?>