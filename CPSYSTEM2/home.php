<?php 
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {

require "dbhandler.php"; 
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>HOME</title>
	<link rel="stylesheet" type="text/css" href="mainstyle.css">
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
               <a href="signupform.php">Add users</a>
               <a href="addproducts.php">Add Product</a>
          </section>
     </div>
     <section class="tit-holder">Table</section>
     <table style="width: 100%;">
          <tr>
               <th>Roll</th>
               <th>Product Name</th>
               <th>Price</th>
               <th>Quantity</th>
               <th>Total</th>
               <th colspan="2">&nbsp;Operations</th>
          </tr>
     <?php
          //show table from database
          $sql = "SELECT * FROM `productss`";
          $result = mysqli_query($conn, $sql);
          while ($row = mysqli_fetch_assoc($result)) { 
               $id = $row['id'];                
               $pname = $row['prod_name'];        
               $pprice = $row['prod_price'];         
               $pqnty = $row['prod_qnty']; 
               ?>
               <tr>
                    <td><?php echo $row['id']."."?></td>
                    <td class="pname-s"><?php echo $row['prod_name']?></td>
                    <td><?php echo "₱".$row['prod_price']?></td>
                    <td><?php echo $row['prod_qnty']."pcs"?></td>
                    <td><?php echo "₱".$row['prod_price'] * $row['prod_qnty']?></td>
                    <?php echo " <td class='btn-wrapper-ed'><a class='oprt-btn' href='update.php?edit&prod_id={$id}'>Update</a></td>";?>
                    <?php echo " <td class='btn-wrapper-del'><a class='oprt-btn' href='delete.php?delete={$id}'>Delete</a></td>";?>
               </tr>
               <?php
           }
     ?>
     </table>
</body>
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