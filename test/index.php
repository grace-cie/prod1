<html>
<head>
    <script type="text/javascript" src="js/jquery-3.6.0.min.js"></script>
</head>
<body>
    <table width="100">
        <tr>
           <td>Quantity</td>
           <td>Sold</td>
        </tr>
        <tr>
           <td><input type="text" id="quantity" data-static-value="30" value="30"></td>
           <td><input type="text" id="sold"></td>
        </tr>
    </table>
</body>
<script>
$(document).ready(function() {
  const def = $("#quantity").val()
  $("#sold,#quantity").keyup(function() {
    var total = 0;
    var x = Number($("#sold").val());
    var total = def - x;
    $("#quantity").val(total); // the result will be showed in "quantity"
  });
});
</script>
</html>