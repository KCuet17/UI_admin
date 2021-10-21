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


    </style>
    <script src="../jquery-3.6.0.min.js"></script>
</head>
<body>
    <!--<div>
        Them kich ban:
        <form action="result.php">
            <label for="name">Name:</label><br>
            <input type="text" id="name" name="name" ><br><br>

            <label for="owner">Owner:</label><br>
            <input type="text" id="owner" name="owner" ><br><br>

            <label for="title">Title:</label><br>
            <input type="text" id="title" name="title" ><br><br>

            <label for="desc">Description:</label><br>
            <input type="text" id="desc" name="desc" ><br><br>

            <label for="step">Step:</label>
            <button type="button" onclick=addStep()>Add more step</button><br><br>
            
            <div id="steps">
    
                <label class="margin" for="type">Type:</label>
                <input type="text"  name="type"><br><br>
                
                <label class="margin" for="hint">Hint:</label>
                <input type="text" id="hint" name="hint"><br><br>
                
                <label class="margin" for="code">Code:</label>
                <input type="text" id="code" name="code"><br><br>


            </div>

            
            <input type="submit" value="Submit"><br>


        </form> 
    </div>
    -->
    <br><br>
    
    <div>
        <h1>Add show:</h1>
        <form action="result.php">
        


            <label for="filename">File Name:</label><br>
            <input type="text" id="filename" name="filename">.trealet<br><br>

            <label for="title">Title:</label><br>
            <input type="text" id="title" name="title" ><br><br>

            <label for="author">Author:</label><br>
            <input type="text" id="author" name="author" ><br><br>

            <label for="des">Description:</label><br>
            <input type="text" id="des" name="des" ><br><br>

            <label for="item">Item:</label>
            <button type="button" class="addmore">Add more item</button>
            
            
            <div id=items>
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
            </div>  
            <input type="submit" value="Submit"><br>


        </form>
    </div>



</body>
</html>
<script>
    var rowNum = 1;

    $("body").on("click", ".addmore", function() {
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
<script>
    // function addStep(){

    //     var element = document.getElementById("steps");

    //     var lbType = document.createElement("label");
    //     lbType.innerHTML = "Type:";
    //     lbType.classList.add('margin');
    //    // lbType.for = "type";

    //     var inpType= document.createElement("input");
    //     inpType.type = "text";
    //     inpType.id = "type";
    //     inpType.name = "type";
        
    //     var lbHint = document.createElement("label");
    //     lbHint.innerHTML = "Hint:";
    //     lbHint.classList.add('margin');

    //     var inpHint= document.createElement("input");
    //     inpHint.type = "text";
    //     inpHint.id = "hint";
    //     inpHint.name = "hint";

    //     var lbCode = document.createElement("label");
    //     lbCode.innerHTML = "Code:";
    //     lbCode.classList.add('margin');

    //     var inpCode= document.createElement("input");
    //     inpCode.type = "text";
    //     inpCode.id = "code";
    //     inpCode.name = "code";

    //     var br = document.createElement('br');

    //     element.appendChild(lbType);
    //     element.appendChild(inpType);
    //     element.appendChild(document.createElement('br'));
    //     element.appendChild(document.createElement('br'));

    //     element.appendChild(lbHint);
    //     element.appendChild(inpHint);
    //     element.appendChild(document.createElement('br'));
    //     element.appendChild(document.createElement('br'));

    //     element.appendChild(lbCode);
    //     element.appendChild(inpCode);
    //     element.appendChild(document.createElement('br'));
    //     element.appendChild(document.createElement('br'));

    // }


    // function addItem(){

    //     var element = document.getElementById("items");

    //     var lbId = document.createElement("label");
    //     lbId.innerHTML = "ItemID:";
    //     lbId.classList.add('margin');
    //     // lbType.for = "type";

    //     var inpId= document.createElement("input");
    //     inpId.type = "text";
    //     inpId.id = "itemid";
    //     inpId.name = "itemid";

    //     var lbTitle = document.createElement("label");
    //     lbTitle.innerHTML = "Title:";
    //     lbTitle.classList.add('margin');

    //     var inpTitle= document.createElement("input");
    //     inpTitle.type = "text";
    //     inpTitle.id = "title";
    //     inpTitle.name = "title";

    //     var lbDes = document.createElement("label");
    //     lbDes.innerHTML = "Item Des:";
    //     lbDes.classList.add('margin');

    //     var inpDes= document.createElement("input");
    //     inpDes.type = "text";
    //     inpDes.id = "itemdes";
    //     inpDes.name = "itemdes";

    //     var lbType = document.createElement("label");
    //     lbType.innerHTML = "Item Type:";
    //     lbType.classList.add('margin');

    //     var inpType= document.createElement("input");
    //     inpType.type = "text";
    //     inpType.id = "itemtype";
    //     inpType.name = "itemtype";

    //     var lbDate = document.createElement("label");
    //     lbDate.innerHTML = "Item Date:";
    //     lbDate.classList.add('margin');

    //     var inpDate= document.createElement("input");
    //     inpDate.type = "text";
    //     inpDate.id = "itemdate";
    //     inpDate.name = "itemdate";

    //     var br = document.createElement('br');

    //     element.appendChild(lbId);
    //     element.appendChild(inpId);
    //     element.appendChild(document.createElement('br'));
    //     element.appendChild(document.createElement('br'));

    //     element.appendChild(lbTitle);
    //     element.appendChild(inpTitle);
    //     element.appendChild(document.createElement('br'));
    //     element.appendChild(document.createElement('br'));

    //     element.appendChild(lbDes);
    //     element.appendChild(inpDes);
    //     element.appendChild(document.createElement('br'));
    //     element.appendChild(document.createElement('br'));

    //     element.appendChild(lbType);
    //     element.appendChild(inpType);
    //     element.appendChild(document.createElement('br'));
    //     element.appendChild(document.createElement('br'));

    //     element.appendChild(lbDate);
    //     element.appendChild(inpDate);
    //     element.appendChild(document.createElement('br'));
    //     element.appendChild(document.createElement('br'));

    // }

    // var i=0;
    // $('.menuHeader').each(function(){
    //     i++;
    //     var newID='menu'+i;
    //     $(this).attr('id',newID);
    //     $(this).val(i);
    // });

</script>