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
        form {
            display: inline; 
        }
    </style>
    <script src="./jquery-3.6.0.min.js"></script>
</head>

<body>
    <?php
    $string = file_get_contents("game_sample.trealet");
    $obj = json_decode($string, true);
    ?>


    <div>
        <h3>Các câu hỏi hiện có:</h3>
        <?php
        $count = 0;
        foreach ($obj as $value) {
        ?>
            <div class="question" id="question<?= $count?>">
                <p>Câu hỏi:<?= $value['question'] ?></p>
                <div class="answers">
                    <?php
                    foreach ($value['answers'] as $answer){
                        if($answer['correct']==true)
                            echo "<p> - ".$answer['text']." &#10004;</p>";
                        else
                            echo "<p> - ".$answer['text']." &#10005;</p>";

                    }
                    ?>

                </div>



                <!-- <form action="game_edit.php">
                    <input type="submit" value="Chỉnh sửa">
                </form> -->

                <form action="game_edit.php">
                    <input type="hidden" name="pos" value="<?= $count ?>">  
                    <input type='submit' class='editbtn' value="Sửa"></button>

                </form>
                <form action="game_delete.php">
                    <input type="hidden" name="pos" value="<?= $count ?>">  
                    <input type='submit' class='delbtn' value="Xóa"></button><br><br>

                </form>


                <!-- <button type='button' class='rmbtn'>Remove this model</button><br><br> -->
                <!-- <form action="game_delete.php">
                    <input type="submit" value="Xóa">
                </form> -->
            </div>
        <?php
            $count++;
        }
        ?>
    </div>
    <button type="button" class="addmoremodel">Thêm một mục mới</button> <br>
    <div class="add"><div></div></div>
</body>
</html>
<script>
    ///////////model

    $("body").on("click", ".addmoremodel", function() {
   
        var $item = $(this).next().next().children().last();
        var nextHtml = 
            "<form action='game_add.php'>" +
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
                    "<button type='button' class='rmbtn'>Hủy</button><br><br> " +
            '</div></div>' +
            '</form>';
        $item.after(nextHtml);
    });
    
    $("body").on("click", ".rmbtn", function() {
        $(this).parents('.question').remove();
    });

    
    function editmodel() {

        var nextHtml2 =
            "<form action='game_edit.php'>" +
            "<div >" +
            '<div >' +
            '<h4>Thông tin mục hiển thị</h4>' +

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
            "<button type='button' class='rmbtn'>Hủy</button><br><br> " +
            '</form>';
        //document.getElementsByClassName("add").children().last().after();
    }
</script>