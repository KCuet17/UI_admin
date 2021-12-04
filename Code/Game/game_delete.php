<?php
$string = file_get_contents("game_sample.trealet");
$obj = json_decode($string, true);
$pos = $_GET['pos'];
echo $pos;
//ham xoa phan tu

array_splice($obj, $pos, 1);

$json = json_encode($obj);
file_put_contents("game_sample.trealet", $json);
header("Location: ./game.php");
exit;
?>