<?php
    $string = file_get_contents("game_sample.trealet");
    $obj = json_decode($string, true);

    $newModel = Array(
            "question" => $_GET['question'],
            "image"=> $_GET['image'],
            "answers" => Array(
                Array("text"=>$_GET['ans1'],"correct"=>$_GET['ans1true']),
                Array("text"=>$_GET['ans2'],"correct"=>$_GET['ans2true']),
                Array("text"=>$_GET['ans3'],"correct"=>$_GET['ans3true']),
                Array("text"=>$_GET['ans4'],"correct"=>$_GET['ans4true']),
            ),
    );

    var_dump($newModel);


    if(is_null($_GET['pos']))
        $obj[] = $newModel;
    else
        $obj[$_GET['pos']] = $newModel;

    $json = json_encode($obj);
    file_put_contents("game_sample.trealet", $json);
    header("Location: ./game.php");
    exit;
?>