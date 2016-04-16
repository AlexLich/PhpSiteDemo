<?
$dt = date('m-d-Y h:i:s');
$page = $_SERVER['REQUEST_URI'];
$ref = $_SERVER['HTTP_REFERER'];
$path="$dt :  $page --> $ref</br>\r\n";
file_put_contents("path.log", "$path", FILE_APPEND);