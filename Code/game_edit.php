<?php
    $trealet = file_get_contents("trealet.json");
    $obj = json_decode($trealet, true);

    $game = $obj['trealet']["questions"][$_GET["pos2"]];

?>

<form action='game_add.php'> 
    <div id="questions"> 
        <div class="question" id="question">
            <h4>Thay đổi câu hỏi</h4>
          
            <label class='margin' for='question'>Câu hỏi:</label> 
            <input type='text' name='question' value="<?=$game["question"] ?>"><br><br> 

            <label class='margin' for='image'>Link ảnh:</label> 
            <input type='text' id='image' name='image' value="<?=$game["question"] ?>"><br><br> 

            <label class='margin' for='ans1'>Đáp án 1:<label> 
            <input type='textarea' id='ans1' name='ans1' value="<?=$game["answers"][0]["text"] ?>">
            <input type='hidden' value='0' name='ans1true'>
            <input type='checkbox' name='ans1true' value='1' <?php if($game["answers"][0]["correct"]) echo "checked" ?>> <br><br>

            <label class='margin' for='ans2'>Đáp án 2:</label> 
            <input type='text' id='ans2' name='ans2' value="<?=$game["answers"][1]["text"] ?>">
            <input type='hidden' value='0' name='ans2true'>
            <input type='checkbox' name='ans2true' value='1' <?php if($game["answers"][1]["correct"]) echo "checked" ?>> <br><br>

            <label class='margin' for='ans3'>Đáp án 3:</label> 
            <input type='text' id='ans3' name='ans3' value="<?=$game["answers"][2]["text"] ?>">
            <input type='hidden' value='0' name='ans3true'>
            <input type='checkbox' name='ans3true' value='1' <?php if($game["answers"][2]["correct"]) echo "checked" ?>> <br><br>

            <label class='margin' for='ans4'>Đáp án 4: </label> 
            <input type='text' id='ans4' name='ans4' value="<?=$game["answers"][3]["text"] ?>">
            <input type='hidden' value='0' name='ans4true'>
            <input type='checkbox' name='ans4true' value='1' <?php if($game["answers"][3]["correct"]) echo "checked" ?>> <br><br>
            
            <input type="submit" value="Thay đổi">
            <input type='hidden' value='<?=$_GET["pos2"] ?>' name='pos2'>
            
        </div>
    </div>
</form>


