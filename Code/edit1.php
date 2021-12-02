<?php
$string = file_get_contents("trealet_sample.trealet");
$obj = json_decode($string);

$name = $_GET['name'];
$title = $_GET['title'];
$description = $_GET['des'];
if ( $name== "" ) $name=$obj->trealet->name;
if ( $title== "" ) $title=$obj->trealet->title;
if ( $description== "" ) $description=$obj->trealet->description;
$obj->trealet->name=$name;
$obj->trealet->title=$title;
$obj->trealet->description=$description;

$json = json_encode($obj,JSON_PRETTY_PRINT|JSON_UNESCAPED_UNICODE);
file_put_contents("trealet_sample.trealet", $json);

// các xử lí
// Tiến hành chuyển hướng
header("Location: /AdminMuseum/Code/index.php");
exit;

// có thể các còn các xử lí khác không được thực hiện.
