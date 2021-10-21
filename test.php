<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="jquery-3.6.0.min.js"></script>

</head>
<body>
<div id="addresses">
    <div class="address" id="address0">
       <div class="street">
           <input type="text" name="street[]" />
       </div>
       <div class="city">
           <input type="text" name="city[]" />
       </div>
       <div class="addmoreadd">
          <button type="button" class="addmore">Add More Address</button>
       </div>
    </div>
</div>
</body>
<script>
    var rowNum = 0;

$("body").on("click", ".addmore", function() {
      rowNum++;
      var $address = $(this).parents('.address');
      var nextHtml = $address.clone();
      nextHtml.attr('id', 'address' + rowNum);
      var hasRmBtn = $('.rmbtn', nextHtml).length > 0;
    if (!hasRmBtn) {
      var rm = "<button type='button' class='rmbtn'>Remove</button>"
      $('.addmoreadd', nextHtml).append(rm);
    }
      $address.after(nextHtml); 
 });

$("body").on("click", ".rmbtn", function() {
    $(this).parents('.address').remove();
});
</script>
</html>