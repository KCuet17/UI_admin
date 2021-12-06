<?php
$trealet = file_get_contents("trealet.json");
$obj = json_decode($trealet, true);

$model = $obj['trealet']["models"][$_GET["pos"]];
?>
<form action='add.php'>
    <div id = models>
        <div class="model" id="model">
            <h4>Thông tin mục hiển thị </h4>

            <label class='margin' for='modeltitle'>Tiêu đề mục hiển thị:</label>
            <input type='text' value="<?=$model["modeltitle"] ?>" name='modeltitle'><br><br>

            <label class='margin' for='modeldes'>Mô tả mục hiển thị:</label>
            <input type='textarea' value="<?=$model["modeldes"] ?>" name='modeldes'><br><br>

            <label class='margin' for='modeltime'>Thời gian:</label>
            <input type='text' value="<?=$model["modeltime"] ?>" name='modeltime'><br><br>

            <label class='margin' for='modelImg'>ID ảnh nền:</label>
            <input type='text' value="<?=$model["backgroundImg"] ?>" name='backgroundImg'><br><br>

            <label class='margin' for='itemtype'>Định dạng các item: </label>
            <select name="itemtype" >
                <option selected value="<?=$model["itemtype"] ?>"><?=$model["itemtype"] ?></option>
                <option value="video">Video</option>
                <option value="img" >Ảnh</option>
            </select> <br><br>

            <label class='margin' for='id'>Danh sách ID các item:</label>
            <input type='text'value="<?=$model["id"] ?>" name='id'><br><br>
        </div>
    </div>
    <input type="submit" value="Cập nhật">
    <input type='hidden' value='<?=$_GET["pos"] ?>' name='pos'>
</form>
