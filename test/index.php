<?php session_start(); ?>
<html>
<head>
    <script type="text/javascript" src="js/jquery-3.6.0.min.js"></script>
</head>
<body>
  <?php
    if (isset($_SESSION['status'])){
      echo "<h4>".$_SESSION['status']."<h4>";
      unset($_SESSION['status']);
    }
  ?>
    <table width="100">
        <tr>
           <td>Name</td>
           <td>Price</td>
           <td>Quantity</td>
           <td>Date</td>
           <td>Sold</td>
           <td>Total</td>
        </tr>
        <tr>
          <form action="code.php" method="post">
           <td><input type="text" name="prodname" id="prodname" value="suka" readonly></td>
           <td><input type="text" name="prodprice" id="prodprice" value="6" readonly></td>
           <td><input type="text" name="quantity" id="quantity" data-static-value="30" value="30" readonly></td>
           <td><input type="date" name="dateoftrans"></td>
           <td><input type="text" name="sold" id="sold"></td>
           <td><input type="text" name="total" id="total"></td>
           <td><input type="submit" name="submit"></td>
          </form>
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

  $("#sold,#prodprice").keyup(function() {
    var totalq = 0;
    var a = Number($("#sold").val());
    var b = Number($("#prodprice").val());
    var totalq = a * b;
    $("#total").val(totalq); 
  });
});




</script>
</html>