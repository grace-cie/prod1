<!-- Footer -->
<?php include "../db.php"?>

<?php
   // checking if the variable is set or not and if set adding the set data value to variable userid
   if(isset($_GET['prod_id']))
    {
      $prodid = $_GET['prod_id']; 
    }
      // SQL query to select all the data from the table where id = $userid
      $query="SELECT * FROM products WHERE id = $prodid ";
      $view_prods= mysqli_query($conn,$query);

      while($row = mysqli_fetch_assoc($view_prods))
        {
          $id = $row['id'];                
          $pname = $row['prodname'];        
          $pprice = $row['prodprice'];         
          $pqnty = $row['prodqnty'];    
        }
 
    //Processing form data when form is submitted
    if(isset($_POST['update'])) 
    {
      $pname = $_POST['pname-inpt'];
      $pprice = $_POST['pprice-inpt'];
      $pqnty = $_POST['pqnty-inpt'];
      
      // SQL query to update the data in user table where the id = $userid 
      $query = "UPDATE products SET prodname = '{$pname}' , prodprice = '{$pprice}' , prodqnty = '{$pqnty}' WHERE id = $prodid";
      $update_prod = mysqli_query($conn, $query);
      echo "<script type='text/javascript'>alert('User data updated successfully!')</script>";
    }             
?>

<h1 class="text-center">Update Product</h1>
  <div class="container ">
    <form action="" method="post">
      <div class="form-group">
        
        <input type="text" name="pname-inpt" class="form-control" value="<?php echo $pname  ?>">
      </div>

      <div class="form-group">
        
        <input type="number" name="pprice-inpt"  class="form-control" value="<?php echo $pprice  ?>">
      </div>
    
      <div class="form-group">
        
        <input type="number" name="pqnty-inpt"  class="form-control" value="<?php echo $pqnty  ?>">
      </div>    

      <div class="form-group">
         <input type="submit"  name="update" class="btn btn-primary mt-2" value="update">
      </div>
    </form>    
  </div>

    <!-- a BACK button to go to the home page -->
    <div class="container text-center mt-5">
      <a href="home.php"> Back </a>
    <div>