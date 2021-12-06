<?php
$string = file_get_contents("trealet.json");
$obj = json_decode($string, true);

$newModel = array(
        "modeltitle" => $_GET['modeltitle'],
        "modeldes" => $_GET['modeldes'],
        "modeltime" => $_GET['modeltime'],
        "backgroundImg" => $_GET['backgroundImg'],
        "itemtype" => $_GET['itemtype'],
        "id" => $_GET['id']
);
if (is_null($_GET['pos']))
        $obj['trealet']['models'][] = $newModel;
else
        $obj['trealet']['models'][$_GET['pos']] = $newModel;

$json = json_encode($obj);
file_put_contents("trealet.json", $json);
header("Location: /AdminMuseum/Code/index.php");
exit;
