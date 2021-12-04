<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .margin {
            margin-left: 10px;
        }

        .margin-more {
            margin-left: 10px;
        }
    </style>
    <script src="../jquery-3.6.0.min.js"></script>
</head>

<body>
    <?php
    $string = file_get_contents("trealet_sample.trealet");
    $obj = json_decode($string, true);
    ?>

    <div>
        <h1><?= $obj['trealet']['name'] ?> </h1>
        <h2><?= $obj['trealet']['title'] ?> </h2>
        <h2>Chào mừng bạn đến với trang admin</h2>
    </div>
    <hr>
    <div>
        <form action="edit1.php">
            <h3>Thông tin của bảo tàng:</h3>

            <label for="name">Tên bảo tàng:</label><br>
            <input type="text" id="name" name="name" placeholder="<?= $obj['trealet']['name'] ?>"><br><br>

            <label for="title">Tiêu đề trang:</label><br>
            <input type="text" id="title" name="title" placeholder="<?= $obj['trealet']['title'] ?>"><br><br>

            <label for="des">Thông tin mô tả trang:</label><br>
            <input type="text" id="des" name="des" placeholder="<?= $obj['trealet']['description'] ?>"><br><br>

            <input type="submit" value="Chỉnh sửa"><br>
        </form>
    </div>
    
    <hr>

    <div>
        <h3>Các mục hiển thị đã có:</h3>
        <?php
        $count = 0;
        foreach ($obj['trealet']['models'] as $value) {
        ?>
            <input type="text" class="margin" value="<?= $value['modeltime'] ?> : <?= $value['modeltitle'] ?>">
            <button type="button" id="<?= $count ?>" onclick="editmodel1(this.id)">Chinh sua</button>
            <form action="delete.php"><input type="hidden" name="pos" value="<?= $count ?>"><input type="submit" value="Xóa"></form>
        <?php
            $count++;
        }
        ?>
    </div>
    <hr>
    <button type="button" onclick="addmoremodel()">Thêm một mục mới</button> <br>
    <div id="add"></div>
</body></html>
<script>
    ///////////model
        function addmoremodel(){       
        var nextHtml = "<form action='add.php'>" +
            "<div id=models>" +
            '<div class="model" id="model">' +
            '<h4>Thông tin mục hiển thị mới</h4>' +

            "<label class='margin' for='modeltitle'>Tiêu đề mục hiển thị:</label>" +
            "<input type='text' id='modeltitle'  name='modeltitle'><br><br>" +

            "<label class='margin' for='modeldes'>Mô tả mục hiển thị:</label>" +
            "<input type='textarea' id='modeldes' name='modeldes'><br><br>" +

            "<label class='margin' for='modeltime'>Thời gian:</label>" +
            "<input type='text' id='modeltime' name='modeltime'><br><br>" +

            "<label class='margin' for='modelImg'>ID ảnh nền:</label>" +
            "<input type='text' id='backgroundImg' name='backgroundImg'><br><br>" +

            "<label class='margin' for='itemtype'>Định dạng các item: </label>" +
            '<select name="itemtype" for="itemtype">' +
            '<option value="video">Video</option>' +
            '<option value="img" selected>Ảnh</option>' +
            '</select> <br><br>' +

            "<label class='margin' for='modelImg'>Danh sách ID các item:</label>" +
            "<input type='text' id='id' name='id' placeholder='Cách nhau bởi dấu cách'><br><br>" +
            '</div></div>' +
            '<input type="submit" value="Thêm">   ' +
            "<button type='button' onclick='remove()'>Hủy</button><br><br> " +
            '</form>';
            document.getElementById("add").innerHTML = nextHtml;
           }
    
    function remove(){
        document.getElementById("add").innerHTML = "";
    }
    function editmodel1(x) {
        var nextHtml2 = "<form action='edit_model.php'>" +
            "<div >" +
            '<div >' +
            '<h4>Thông tin mục hiển thị</h4>' +

            "<label class='margin' for='modeltitle'>Tiêu đề mục hiển thị:</label>" +
            "<input type='text' id='modeltitle' name='modeltitle' placeholder='' ><br><br>" +

            "<label class='margin' for='modeldes'>Mô tả mục hiển thị:</label>" +
            "<input type='textarea' id='modeldes' name='modeldes' placeholder=''><br><br>" +

            "<label class='margin' for='modeltime'>Thời gian:</label>" +
            "<input type='text' id='modeltime' name='modeltime' placeholder=''><br><br>" +

            "<label class='margin' for='modelImg'>ID ảnh nền:</label>" +
            "<input type='text' id='backgroundImg' name='backgroundImg'placeholder=''><br><br>" +

            "<label class='margin' for='itemtype'>Định dạng các item: </label>" +
            '<select name="itemtype" for="itemtype">' +
            '<option value="" selected></option>' +
            '<option value="video">Video</option>' +
            '<option value="img">Ảnh</option>' +
            '</select> <br><br>' +

            "<label class='margin' for='id'>Danh sách ID các item:</label>" +
            "<input type='text' id='id' name='id' placeholder=''><br><br>" +

            '</div></div>' +
            '<input type="submit" value="Thêm">   ' +
            "<button type='button' onclick='remove1()'>Hủy</button><br><br> " +
            '</form>';
            //document.getElementById("add").innerHTML = nextHtml2;
    }
    function remove1(){
        document.getElementById("add").innerHTML = "";
    }
</script>
