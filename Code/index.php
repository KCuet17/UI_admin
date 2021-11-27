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
        $obj = json_decode($string);
    ?>

    <div>
        <h1>Bảo tàng lịch sử học Việt Nam </h1>
        <h2>Chào mừng đến với trang admin</h2>
    </div>
    <hr>
    <div>
        <form action="">
            <h3>Thông tin của bảo tàng:</h3>

            <label for="filename">Tên file lưu trữ:</label><br>
            <input type="text" id="filename" name="filename" placeholder="trealet_sample.trealet"><br><br>

            <label for="name">Tên bảo tàng:</label><br>
            <input type="text" id="name" name="name" placeholder="<?= $obj->trealet->footer->name ?>"><br><br>

            <label for="title">Tiêu đề trang:</label><br>
            <input type="text" id="title" name="title" placeholder="<?= $obj->trealet->title ?>"><br><br>

            <label for="des">Thông tin mô tả trang:</label><br>
            <input type="text" id="des" name="des" placeholder="<?= $obj->trealet->description ?>"><br><br>

            <label for="lisence">Giấy phép:</label><br>
            <input type="text" id="lisence" name="lisence" placeholder="<?= $obj->trealet->footer->lisence ?>"><br><br>

            <label for="lisencedate">Ngày cấp giấy phép:</label><br>
            <input type="text" id="lisencedate" name="lisencedate" placeholder="<?= $obj->trealet->footer->lisencedate ?>"><br><br>

            <label for="address">Địa chỉ:</label><br>
            <input type="text" id="address" name="address" placeholder="<?= $obj->trealet->footer->address ?>"><br><br>

            <label for="mail">Email:</label><br>
            <input type="text" id="mail" name="mail" placeholder="<?= $obj->trealet->footer->mail ?>"><br><br>

            <label for="phone">Số điện thoại liên hệ:</label><br>
            <input type="text" id="phone" name="phone" placeholder="<?= $obj->trealet->footer->phone ?>"><br><br>

            <label for="timeopen">Giờ mở cửa:</label><br>
            <input type="text" id="timeopen" name="timeopen" placeholder="<?= $obj->trealet->footer->timeopen ?>"><br><br>

            <input type="submit" value="Chỉnh sửa"><br>
    </div>
    <hr>
    <div>
        <form action="result_huy.php">
            <h3>Các mục hiển thị đã có:</h3> <br>

            <button type="button" class="addmoremodel">Thêm một mục hiển thị mới</button>

            <div id=models>
                <div class="model" id="model1">
                    <p class="margin">Model1</p>


                    <label class="margin" for="modeltitle">Title:</label>
                    <input type="text" id='modeltitle' name="modeltitle[]"><br><br>

                    <label class="margin" for="modelauthor">Author:</label>
                    <input type="text" id='modelauthor' name="modelauthor[]"><br><br>

                    <label class="margin" for="modeldes">Item Description:</label>
                    <input type="text" id='modeldes' name="modeldes[]"><br><br>

                    <label class="margin" for="modeltime">Time:</label>
                    <input type="text" id='modeltime' name="modeltime[]"><br><br>

                    <label class="margin" for="item">Item:</label>
                    <button type="button" class="addmoreitem">Add more item</button>

                    <div id="items">
                        <div class="item" id="item1">
                            <p class="margin">Item1</p>
                            <label class="margin" for="itemid">ItemID:</label>
                            <input type="text" id='itemid' name="itemid[][]"><br><br>
                        </div>
                    </div>

                </div>
            </div>

            <input type="submit" value="Submit"><br>


        </form>
    </div>


</body>

</html>
<script>
    var rowNum = 1;

    $("body").on("click", ".addmoremodel", function() {
        rowNum++;
        var $item = $(this).next().children().last();
        var nextHtml = "                <div class='item' id='item" + rowNum + "'>" +
            "<p class='margin'>Item" + rowNum + "</p>" +
            "<label class='margin' for='itemid'>ItemID:</label>" +
            "<input type='text'  id='itemid' name='itemid[]'><br><br>" +

            "<label class='margin' for='itemtitle'>Title:</label>" +
            "<input type='text' id='itemtitle' name='itemtitle[]'><br><br>" +

            "<label class='margin' for='itemdes'>Item Description:</label>" +
            "<input type='text' id='itemdes' name='itemdes[]'><br><br>" +

            "<label class='margin' for='itemtype'>Item Type:</label>" +
            "<input type='text' id='itemtype' name='itemtype[]'><br><br>" +

            "<label class='margin' for='itemdate'>Date:</label>" +
            "<input type='text' id='itemdate' name='itemdate[]'>" +

            "<button type='button' class='rmbtn'>Remove this item</button><br><br> " +

            "</div>";

        // nextHtml.attr('id', 'item' + rowNum);
        var hasRmBtn = $('.rmbtn', nextHtml).length > 0;
        //   if (!hasRmBtn) {
        //  var rm = "<button type='button' class='rmbtn'>Remove</button>"
        //  $('.addmoreadd', nextHtml).append(rm);
        //   }
        $item.after(nextHtml);
    });

    var itemNum;

    $("body").on("click", ".addmoreitem", function() {
        rowNum++;
        var $item = $(this).next().children().last();
        var nextHtml = "                <div class='item' id='item" + rowNum + "'>" +
            "<p class='margin'>Item" + rowNum + "</p>" +
            "<label class='margin' for='itemid'>ItemID:</label>" +
            "<input type='text'  id='itemid' name='itemid[]'><br><br>" +

            "<label class='margin' for='itemtitle'>Title:</label>" +
            "<input type='text' id='itemtitle' name='itemtitle[]'><br><br>" +

            "<label class='margin' for='itemdes'>Item Description:</label>" +
            "<input type='text' id='itemdes' name='itemdes[]'><br><br>" +

            "<label class='margin' for='itemtype'>Item Type:</label>" +
            "<input type='text' id='itemtype' name='itemtype[]'><br><br>" +

            "<label class='margin' for='itemdate'>Date:</label>" +
            "<input type='text' id='itemdate' name='itemdate[]'>" +

            "<button type='button' class='rmbtn'>Remove this item</button><br><br> " +

            "</div>";

        // nextHtml.attr('id', 'item' + rowNum);
        var hasRmBtn = $('.rmbtn', nextHtml).length > 0;
        //   if (!hasRmBtn) {
        //  var rm = "<button type='button' class='rmbtn'>Remove</button>"
        //  $('.addmoreadd', nextHtml).append(rm);
        //   }
        $item.after(nextHtml);
    });

    $("body").on("click", ".rmbtn", function() {
        $(this).parents('.item').remove();
    });
</script>