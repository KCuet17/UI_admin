<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .margin{
            margin-left:10px;
        }
        .margin-more{
            margin-left:10px;
        }


    </style>
    <script src="../jquery-3.6.0.min.js"></script>
</head>
<body>
    <br><br>
    
    <div>
        <h1>Add show:</h1>
        <form action="result_huy.php">
        

            <label for="filename">File Name:</label><br>
            <input type="text" id="filename" name="filename">.trealet<br><br>

            <label for="title">Title:</label><br>
            <input type="text" id="title" name="title" ><br><br>

            <label for="des">Description:</label><br>
            <input type="text" id="des" name="des" ><br><br>





            <label for="item">Model:</label>
            <button type="button" class="addmoremodel">Add more model</button>
            
            

            <div id=models>
                <div class="model" id="model1">
                    <p class="margin">Model1</p>


                    <label class="margin" for="modeltitle">Title:</label>
                    <input type="text" id='modeltitle'  name="modeltitle[]"><br><br>
                    
                    <label class="margin" for="modelauthor">Author:</label>
                    <input type="text" id='modelauthor' name="modelauthor[]"><br><br>

                    <label class="margin" for="modeldes">Item Description:</label>
                    <input type="text" id='modeldes' name="modeldes[]"><br><br>

                    <label class="margin" for="modeltime">Time:</label>
                    <input type="text" id='modeltime' name="modeltime[]"><br><br> 
                    
                    <label for="item">Item:</label>
                    <button type="button" class="addmoreitem">Add more item</button>

                    <div id="items">
                        <div class="item" id="item1">
                            <p class="margin">Item1</p>
                            <label class="margin" for="itemid">ItemID:</label>
                            <input type="text" id='itemid'  name="itemid[][]"><br><br>                        
                        </div>                        
                    </div>


                </div>
            </div>  




            <!-- <div id=items>
                <div class="item" id="item1">
                    <p class="margin">Item1</p>
                    <label class="margin" for="itemid">ItemID:</label>
                    <input type="text" id='itemid'  name="itemid[]"><br><br>

                    <label class="margin" for="itemtitle">Title:</label>
                    <input type="text" id='itemtitle'  name="itemtitle[]"><br><br>

                    <label class="margin" for="itemdes">Item Description:</label>
                    <input type="text" id='itemdes' name="itemdes[]"><br><br>

                    <label class="margin" for="itemtype">Item Type:</label>
                    <input type="text" id='itemtype' name="itemtype[]"><br><br>

                    <label class="margin" for="itemdate">Date:</label>
                    <input type="text" id='itemdate' name="itemdate[]"><br><br> 

                </div>
            </div>   -->
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
        var nextHtml = "                <div class='item' id='item"+rowNum+"'>"+
        "<p class='margin'>Item"+rowNum+"</p>"+
        "<label class='margin' for='itemid'>ItemID:</label>"+
        "<input type='text'  id='itemid' name='itemid[]'><br><br>"+

        "<label class='margin' for='itemtitle'>Title:</label>"+
        "<input type='text' id='itemtitle' name='itemtitle[]'><br><br>"+

        "<label class='margin' for='itemdes'>Item Description:</label>"+
        "<input type='text' id='itemdes' name='itemdes[]'><br><br>"+

        "<label class='margin' for='itemtype'>Item Type:</label>"+
        "<input type='text' id='itemtype' name='itemtype[]'><br><br>"+

        "<label class='margin' for='itemdate'>Date:</label>"+
        "<input type='text' id='itemdate' name='itemdate[]'>"+
        
        "<button type='button' class='rmbtn'>Remove this item</button><br><br> "+
        
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
        var nextHtml = "                <div class='item' id='item"+rowNum+"'>"+
        "<p class='margin'>Item"+rowNum+"</p>"+
        "<label class='margin' for='itemid'>ItemID:</label>"+
        "<input type='text'  id='itemid' name='itemid[]'><br><br>"+

        "<label class='margin' for='itemtitle'>Title:</label>"+
        "<input type='text' id='itemtitle' name='itemtitle[]'><br><br>"+

        "<label class='margin' for='itemdes'>Item Description:</label>"+
        "<input type='text' id='itemdes' name='itemdes[]'><br><br>"+

        "<label class='margin' for='itemtype'>Item Type:</label>"+
        "<input type='text' id='itemtype' name='itemtype[]'><br><br>"+

        "<label class='margin' for='itemdate'>Date:</label>"+
        "<input type='text' id='itemdate' name='itemdate[]'>"+
        
        "<button type='button' class='rmbtn'>Remove this item</button><br><br> "+
        
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
