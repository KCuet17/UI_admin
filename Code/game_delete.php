<?php
$string = file_get_contents("trealet.json");
$obj = json_decode($string, true);
$pos = $_GET['pos2'];

array_splice($obj['trealet']['questions'], $pos, 1);

$json = json_encode($obj);
file_put_contents("trealet.json", $json);
header("Location: /AdminMuseum/Code/index.php");
exit;
?>