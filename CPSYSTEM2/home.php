<?php 
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {

 ?>
<!DOCTYPE html>
<html>
<head>
	<title>HOME</title>
	<link rel="stylesheet" type="text/css" href="stylemain.css">
</head>
<body>
     <nav>
          <span style="font-size:30px;cursor:pointer" onclick="openNav()"><img src="img/icons/menu.png" alt="menu"></span>
          <a href="logout.php">Logout</a>
     </nav>
     <div id="mySidenav" class="sidenav">
     <a href="javascript:void(0)" class="closebtn" onclick="closeNav()"><span class="cbtn-wrapper"><img src="img/icons/close-button.png" alt="close button"></span></a>
          <section class="snav-wrapper">
          <div class="user-img-container">
               <img  src="img/icons/user.png" alt="user">
               <center><h1><?php echo $_SESSION['name']; ?></h1></center>
          </div>
               <a href="#">List</a>
               <a href="#">Add users</a>
          </section>
     </div>
</body>
<script>
     //side nav func
     function openNav() {
     document.getElementById("mySidenav").style.width = "400px";
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