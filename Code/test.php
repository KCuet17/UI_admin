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
    </style>
    <script src="../jquery-3.6.0.min.js"></script>
</head>

<body>
    <br><br>
    <?php
    $string = file_get_contents("myfile.json");
    $obj = json_decode($string);
    //print_r($obj);
    //echo $obj->trealet[0]->time;
    //foreach ($obj->trealet as $value)
    //   print($value->time);
    ?>

    <div>
        <h1>Các mục đã có:</h1>
        <?php
        $count=0;
        foreach ($obj->trealet as $value) {
        ?>
            <button onclick="edit(<?= $count ?>)"> Chỉnh sửa </button>
            <button type="button" action="/detail.php" method="" > <?= $value->time ?> </button> <br>
        <?php
        $count++;
        }
        ?>
        <div class="detail"></div>
        <br>
        <button type="button" class="add"> Thêm mục mới </button> <br>
    </div>

    <script>
        var hihi=0;

        function edit($x){
            alert($x);

            document.getElementsByClassName("detail").innerHTML("XXX");
        }

        $("body").on("click", ".add", function() {
            var nextHtml1 = "<div>" +

                "<h1>Thêm mục thời gian mới:</h1>" +
                "<form action='result.php'>" +

                "<label for='time'>Thời gian:</label><br>" +
                "<input type='text' id='time' name='time' placeholder= 'dd/mm/yyyy'><br><br>" +

                "<label for='title'>Tiêu đề:</label><br>" +
                "<input type='text' id='title' name='title'><br><br>" +

                "<label for='description'>Thông tin chi tiết:</label><br>" +
                "<input type='text' id='description' name='description'><br><br>" +

                "<label for='backgroundImg'>ID ảnh minh họa:</label><br>" +
                "<input type='text' id='backgroundImg' name='backgroundImg'><br><br>" +

                "<label for='type'>Loại item:</label>" +
                "<select name='type' id='type'>" +
                "<option value='img'>Ảnh</option>" +
                "<option value='video'>Video</option>" +
                "</select><br><br>" +

                "<label for='link'>Link/ID item:</label><br>" +
                "<input type='text' id='link' name='link'><br><br>" +

                "<input type='submit' value='Submit'><br>" +

                "</form></div>";
            if (hihi==0){
                $(this).after(nextHtml1);
            }
            hihi++;
            
        });
    </script>

    <!-- <div>

        <h1>Thêm mục thời gian mới:</h1>
        <form action="result.php">

            <label for="time">Thời gian:</label><br>
            <input type="text" id="time" name="time" placeholder="<?= $obj->trealet[0]->time ?>"><br><br>

            <label for="title">Tiêu đề:</label><br>
            <input type="text" id="title" name="title"><br><br>

            <label for="description">Thông tin chi tiết:</label><br>
            <input type="text" id="description" name="description"><br><br>

            <label for="backgroundImg">ID ảnh minh họa:</label><br>
            <input type="text" id="backgroundImg" name="backgroundImg"><br><br>

            <label for="type">Loại item:</label>
            <select name="type" id="type">
                <option value="img">Ảnh</option>
                <option value="video">Video</option>
            </select><br><br>

            <label for="link">Link/ID item:</label><br>
            <input type="text" id="link" name="link"><br><br>

            <input type="submit" value="Submit"><br>

        </form>
    </div> -->


</body>

</html>