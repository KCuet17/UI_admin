<?php
    $string = file_get_contents("trealet.json");
    $obj = json_decode($string, true);

    $newQuestion = Array(
            "question" => $_GET['question'],
            "image"=> $_GET['image'],
            "answers" => Array(
                Array("text"=>$_GET['ans1'],"correct"=>$_GET['ans1true']),
                Array("text"=>$_GET['ans2'],"correct"=>$_GET['ans2true']),
                Array("text"=>$_GET['ans3'],"correct"=>$_GET['ans3true']),
                Array("text"=>$_GET['ans4'],"correct"=>$_GET['ans4true']),
            ),
    );
    echo $_GET["pos2"];
    if(is_null($_GET['pos2']))
        $obj['trealet']['questions'][] = $newQuestion;
    else
        $obj['trealet']['questions'][$_GET['pos2']] = $newQuestion;

    $json = json_encode($obj);
    file_put_contents("trealet.json", $json);
    header("Location: /AdminMuseum/Code/index.php");
    exit;
?>