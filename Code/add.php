<?php
$string = file_get_contents("trealet_sample.trealet");
$obj = json_decode($string, true);

$newModel = Array(
        "modeltitle" => $_GET['modeltitle'],
        "modeldes"=> $_GET['modeldes'],
        "modeltime" => $_GET['modeltime'],
        "backgroundImg" => $_GET['backgroundImg'],
        "itemtype" => $_GET['itemtype'],
        "id" => $_GET['id']
);
$obj['trealet']['models'][] = $newModel;

$json = json_encode($obj);
file_put_contents("trealet_sample.trealet", $json);
header("Location: /AdminMuseum/Code/index.php");
exit;
?>