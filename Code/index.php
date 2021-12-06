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
    $string = file_get_contents("trealet.json");
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
            <form action="edit_model.php"><input type="hidden" name="pos" value="<?= $count ?>"><input type="submit" value="Chỉnh sửa"></form>
            <form action="delete.php"><input type="hidden" name="pos" value="<?= $count ?>"><input type="submit" value="Xóa"></form>
        <?php
            $count++;
        }
        ?><button type="button" onclick="addmoremodel()">Thêm một mục mới</button> <br>
    </div>
    <div id="model"></div>
    <hr>
    <div>
        <h3>Các câu hỏi hiện có:</h3>
        <?php
        $count1 = 0;
        foreach ($obj['trealet']['questions'] as $value) {
        ?>
            <div class="question" id="question<?= $count?>">
                <p>Câu hỏi:<?= $value['question'] ?></p>

                <form action="game_edit.php">
                    <input type="hidden" name="pos2" value="<?= $count1 ?>">  
                    <input type='submit' class='editbtn' value="Sửa"></button>
                </form>
                <form action="game_delete.php">
                    <input type="hidden" name="pos2" value="<?= $count1 ?>">  
                    <input type='submit' class='delbtn' value="Xóa"></button><br><br>

                </form>
            </div>
        <?php
            $count1++;
        }
        ?>
        <button type="button" onclick="addAgame()">Thêm một câu hỏi mới</button> <br>
    </div>
    <div id="game"></div>
    <hr>
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
            document.getElementById("model").innerHTML = nextHtml;
           }
    
    function remove(){
        document.getElementById("model").innerHTML = "";
    }

    function addAgame(){
        var nextHtml3 = "<form action='game_add.php'>" +
                "<div id=questions>" +
                    '<div class="question" id="question">' +
                    '<h4>Thêm câu hỏi mới</h4>' +

                    "<label class='margin' for='question'>Câu hỏi:</label>" +
                    "<input type='text' name='question'><br><br>" +

                    "<label class='margin' for='image'>Link ảnh:</label>" +
                    "<input type='text' id='image' name='image'><br><br>" +

                    "<label class='margin' for='ans1'>Đáp án 1:</label>" +
                    "<input type='textarea' id='ans1' name='ans1'>"+
                    "<input type='hidden' value='0' name='ans1true'>"+
                    "<input type='checkbox' name='ans1true' value='1'> <br><br>" +


                    "<label class='margin' for='ans2'>Đáp án 2:</label>" +
                    "<input type='text' id='ans2' name='ans2'>"+
                    "<input type='hidden' value='0' name='ans2true'>"+
                    "<input type='checkbox' name='ans2true' value='1'><br><br>" +

                    "<label class='margin' for='ans3'>Đáp án 3:</label>" +
                    "<input type='text' id='ans3' name='ans3'>"+
                    "<input type='hidden' value='0' name='ans3true'>"+
                    "<input type='checkbox' name='ans3true' value='1'><br><br>" +

                    "<label class='margin' for='ans4'>Đáp án 4: </label>" +
                    "<input type='text' id='ans4' name='ans4'>"+
                    "<input type='hidden' value='0' name='ans4true'>"+
                    "<input type='checkbox' name='ans4true' value='1'><br><br>" +

                    '<input type="submit" value="Thêm">   ' +
                    "<button type='button' onclick='remove2()'>Hủy</button><br><br> " +
            '</div></div>' +
            '</form>';
            document.getElementById("game").innerHTML = nextHtml3;
    }
    function remove2(){
        document.getElementById("game").innerHTML = "";
    }
</script>
