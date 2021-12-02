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
        #items{
            margin-left:30px;
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





            <label for="model">Model:</label>
            <button type="button" class="addmoremodel">Add more model</button>
            
            

            <div id=models>

                <div class='model' id='model1'>
                    <p class='margin'>Model1</p>


                    <label class='margin' for='modeltitle'>Title:</label>
                    <input type='text' id='modeltitle'  name='modeltitle[]'><br><br>
                    
                    <label class='margin' for='modelauthor'>Author:</label>
                    <input type='text' id='modelauthor' name='modelauthor[]'><br><br>

                    <label class='margin' for='modeldes'>Item Description:</label>
                    <input type='text' id='modeldes' name='modeldes[]'><br><br>

                    <label class='margin' for='modeltime'>Time:</label>
                    <input type='text' id='modeltime' name='modeltime[]'><br><br> 
                                
                    <label class='margin' for='item'>Item:</label>
                    <button type='button' class='addmoreitem'>Add more item</button>

                    <div id='items'>
             
                        <div class='item' id='item1'>
                            <p class='margin'>Item1</p>
                            <label class='margin' for='itemid'>ItemID:</label>
                            <input type='text' id='itemid'  name='itemid[][]'><br>
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
    /////////////////////////// model
    var modelNum = 1;
    $("body").on("click", ".addmoremodel", function() {
        var $item = $(this).next().children().last();

        var nextHtml ="<div class='model' id='model"+modelNum+"'>"+
                    "<p class='margin'>Model"+modelNum+"</p>"+


                    "<label class='margin' for='modeltitle'>Title:</label>"+
                    "<input type='text' id='modeltitle'  name='modeltitle[]'><br><br>"+
                    
                    "<label class='margin' for='modelauthor'>Author:</label>"+
                    "<input type='text' id='modelauthor' name='modelauthor[]'><br><br>"+

                    "<label class='margin' for='modeldes'>Item Description:</label>"+
                    "<input type='text' id='modeldes' name='modeldes[]'><br><br>"+

                    "<label class='margin' for='modeltime'>Time:</label>"+
                    "<input type='text' id='modeltime' name='modeltime[]'><br><br> "+
                    
                    "<label for='item'>Item:</label>"+
                    "<button type='button' class='addmoreitem'>Add more item</button>"+

                    "<div id='items'>"+
                        "<div class='item' id='item1'>"+
                            "<p class='margin'>Item1</p>"+
                            "<label class='margin' for='itemid'>ItemID:</label>"+
                            "<input type='text' id='itemid'  name='itemid[][]'><br><br>"+                        
                        "</div>    "                    +
                    "</div>"+

                    "<button type='button' class='rmbtn'>Remove this model</button><br><br> "+
                "</div>";



        $item.after(nextHtml); 
    });

    $("body").on("click", ".rmbtn", function() {
        $(this).parents('.model').remove();
    });

/////////////////////////////////////////// item

    var itemNum = [];

    $("body").on("click", ".addmoreitem", function() {

        //get number from id .eg: model3 -> 3
        var $name = $(this).parent().attr('id');
        var $numb = $name.match(/\d/g);
        $numb = $numb.join("");        
        
        if (itemNum[$numb]==null)  itemNum[$numb] = 1;
        itemNum[$numb]++;

        var $item = $(this).next().children().last();


        var nextHtml =
        "<div class='item' id='item"+itemNum[$numb]+"'>"+
            "<p class='margin'>Item"+itemNum[$numb]+"</p>"+
            "<label class='margin' for='itemid'>ItemID:</label>"+
            "<input type='text' id='itemid'  name='itemid[][]'>"+  
            "<button type='button' class='rmbtnitem'>Remove this item</button><br><br> "+
             
        "</div> ";

        $item.after(nextHtml); 
    });

    $("body").on("click", ".rmbtnitem", function() {
        $(this).parents('.item').remove();
    });

    
</script>
