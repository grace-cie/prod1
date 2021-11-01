<?php  require "dbhandler.php" ?>

<?php 
     if(isset($_GET['delete']))
     {
         $prodid= $_GET['delete'];

         // SQL query to delete data from user table where id = $userid
         $query = "DELETE FROM productss WHERE id = {$prodid}"; 
         $delete_query= mysqli_query($conn, $query);
         header("Location: home.php");
     }
?>
