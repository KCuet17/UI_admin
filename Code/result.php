
<?php

use function PHPSTORM_META\type;

    $string = file_get_contents("myfile.json");
    $obj = json_decode($string);
    $array = Array(
            "time" => $_GET['time'],
            "title"=> $_GET['title'],
            "description" => $_GET['description'],
            "type" => $_GET['type'],
            "link" => $_GET['link'],
            "backgroundImg" => $_GET['backgroundImg']
    );
    
    print_r($array);
    print_r($obj->trealet);
    //file_put_contents('myfile.json', json_encode($obj) );
?>