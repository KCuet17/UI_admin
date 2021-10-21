oke<br>
<?php


    $itemarray=array();
    $temp=0;
    foreach($_GET['itemid'] as $itemid){
      //  $itemnumber = "item" + $temp;

        $itemarray['item'.$temp]['id'] = $_GET['itemid'][$temp];
        $itemarray['item'.$temp]['title']= $_GET['itemtitle'][$temp];
        $itemarray['item'.$temp]['description']= $_GET['itemdes'][$temp];
        $itemarray['item'.$temp]['type']= $_GET['itemtype'][$temp];
        $itemarray['item'.$temp]['date']= $_GET['itemdate'][$temp];

        $temp++;
    }
    print_r($itemarray);

    $array = Array(
        "trealet" => Array(
            "title" => $_GET['title'],
            "author"=> $_GET['author'],
            "description" => $_GET['des'],
            "items" => $itemarray
        )
    );
   // echo json_encode($array);

    // encode array to json
    $json = json_encode($array, JSON_PRETTY_PRINT|JSON_UNESCAPED_UNICODE);// ?? wont work
    //display it 
    echo $json;
    //generate json file
    file_put_contents($_GET['filename'].".trealet", $json);
?>