<?php
$string = file_get_contents("trealet.json");
$obj = json_decode($string, true);
$pos = $_GET['pos'];
echo $pos;
//ham xoa phan tu
array_splice($obj['trealet']['models'], $pos, 1);

$json = json_encode($obj);
echo $json;
file_put_contents("trealet.json", $json);
header("Location: /AdminMuseum/Code/index.php");
exit;
