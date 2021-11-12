<?php 
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {

require "dbhandler.php"; 
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Wholesale</title>
	<link rel="stylesheet" type="text/css" href="mainstyle.css">
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
     <nav>
          <span style="cursor:pointer" onclick="openNav()"><img style="height: 140px;" src="img/icons/menu-hamb.png" alt="menu"></span>
          <a href="logout.php">Logout</a>
     </nav>
     <div id="mySidenav" class="sidenav">
     <a href="javascript:void(0)" class="closebtn" onclick="closeNav()"><span class="cbtn-wrapper"><img style="width: 48px;" src="img/icons/close-btn.png" alt="close button"></span></a>
          <section class="snav-wrapper">
          <div class="user-img-container">
               <img  src="img/icons/user.png" alt="user">
               <center><h1><?php echo $_SESSION['name']; ?></h1></center>
          </div>
               <a href="home.php">Products</a>
               <a href="dashb.php">Retail</a>
               <a href="wholesalechrt.php">Wholesale</a>
               <a href="addproducts.php">Add Product</a>
               <a href="#">Sales</a>
               <a href="signupform.php">Add users</a>
          </section>
     </div>
     <section class="tit-holder">
          <div class="srch-holder" style="position: absolute; left: -39px;">
               <i class="search fa fa-search"></i>
               <input type="text" name="srch" id="srch" class="srch-nav" placeholder="Search">
               <span class="tot-val" id="tot-val" style ="font-size: 32px; padding-left: 137px;"></span>
          </div>
     </section>
     <table style="width: 100%;" id="prod-table">
          <tr>
               <th>Roll</th>
               <th>Product Name</th>
               <th>Wholesale</th>
               <th>Quantity</th>
               <th>Total ₱</th>
               <th colspan="2">&nbsp;Operations</th>
          </tr>
     <?php
          //show table from database
          $sql = "SELECT * FROM `productss`";
          $result = mysqli_query($conn, $sql);
          while ($row = mysqli_fetch_assoc($result)) { 
               $id = $row['id'];                
               $pname = $row['prod_name'];        
               $pwhlprice = $row['prod_whlsale'];   //$pprice = $row['prod_price'];      
               $pqnt = $row['prod_qnt'];     //$pqnty = $row['prod_qnty'];
               ?>
               <tr>
                    <td><?php echo $row['id']."."?></td>
                    <td class="pname-s"><?php echo $row['prod_name']?></td>
                    <td><?php echo "₱".$row['prod_whlsale']?></td>
                    <td><?php echo $row['prod_qnt']."pcs"?></td>
                    <td id="total"><?php echo $row['prod_whlsale'] * $row['prod_qnt']?></td>
                    <td class='btn-wrapper-ed'><?php echo " <a class='oprt-btn' href='update.php?edit&prod_id={$id}'>Update</a>";?></td>
                    <!--<td class='btn-wrapper-del'><?php# echo " <a class='oprt-btn-dl' href='#?delete={$id}'>Details</a>";?></td>-->
               </tr>
               <?php
          }
     ?>
     </table>
</body>
<script>
          updateSubTotal(); // Initial call

          function updateSubTotal() {
               var table = document.getElementById("prod-table");
               let subTotal = Array.from(table.rows).slice(1).reduce((total, row) => {
                    return total + parseFloat(row.cells[4].innerHTML);
               }, 0);
               document.getElementById("tot-val").innerHTML = "Whlsale: ₱ " + subTotal.toFixed(2);
          }

          function onClickRemove(deleteButton) {
          let row = deleteButton.parentElement.parentElement;
          row.parentNode.removeChild(row);
          updateSubTotal(); // Call after delete
          }
</script>
<script>
     //search func
     $(document).ready(function(){
          $('#srch').keyup(function(){
               search_table($(this).val());
          });
          function search_table(value){
               $('#prod-table tr').each(function(){
                    var found = 'false';
                    $(this).each(function(){
                         if($(this).text().toLowerCase().indexOf(value.toLowerCase()) >=0 ) {
                              found = 'true'
                         }
                    });
                    if(found == 'true'){
                         $(this).show();
                    } else {
                         $(this).hide();
                    }
               });
          }
     });
</script>
<script>
     //side nav func
     function openNav() {
     document.getElementById("mySidenav").style.width = "487px";
     document.getElementById("main").style.marginLeft = "250px";
     document.body.style.backgroundColor = "rgba(0,0,0,0.4)";
     }

     function closeNav() {
     document.getElementById("mySidenav").style.width = "0";
     document.getElementById("main").style.marginLeft= "0";
     document.body.style.backgroundColor = "white";
     }
</script>
</html>

<?php 
   } else {
        header("Location: index.php");
        exit();
    }
 ?>