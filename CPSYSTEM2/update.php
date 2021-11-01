<!-- Footer -->
<?php include "dbhandler.php"?>

<?php
   // checking if the variable is set or not and if set adding the set data value to variable userid
   if(isset($_GET['prod_id']))
    {
      $prodid = $_GET['prod_id']; 
    }
      // SQL query to select all the data from the table where id = $userid
      $query="SELECT * FROM productss WHERE id = $prodid ";
      $view_prods= mysqli_query($conn,$query);

      while($row = mysqli_fetch_assoc($view_prods))
        {
          $id = $row['id'];                
          $pname = $row['prod_name'];        
          $pprice = $row['prod_price'];         
          $pqnty = $row['prod_qnty'];    
        }
 
    //Processing form data when form is submitted
    if(isset($_POST['update'])) 
    {
      $pname = $_POST['pname-inpt'];
      $pprice = $_POST['pprice-inpt'];
      $pqnty = $_POST['pqnty-inpt'];
      
      // SQL query to update the data in user table where the id = $userid 
      $query = "UPDATE productss SET prod_name = '{$pname}' , prod_price = '{$pprice}' , prod_qnty = '{$pqnty}' WHERE id = $prodid";
      $update_prod = mysqli_query($conn, $query);
      echo "<script type='text/javascript'>alert('User data updated successfully!')</script>";
    }             
?>
<head>
  <title>Update Product</title>
</head>
<style>
   body{
		background: #f1f1f1;
	}
  .main-container {
		background: #caebf2;
		height: 500px;
		width: 600px;
		border-radius: 14px;
		position: relative;
		top: 410px;
	}
  .main-container h1{
    padding-top: 39px;
    font-family: 'Public Sans', sans-serif;
    font-size: 52px;
    color: #a9a9a9;
  }
  input[name="pname-inpt"]::placeholder {        
		text-align: center;
	}input[name="pprice-inpt"]::placeholder {        
		text-align: center;
	}input[name="pqnty-inpt"]::placeholder {        
		text-align: center;
	}
	input {
		height: 70px;
		width: 69%;
		font-size: 41px;
		border: none;
		text-align: center;
		font-family: 'Public Sans', sans-serif;
	}
  input[name="update"]{
		height: 60px;
		width: 70%;
		position: relative;
		top: 24px;
		border: none;
		background: #ff3b3f;
		color: #ffffff;
		font-size: 36px;
		font-family: 'Public Sans', sans-serif;
	}
  input[name="pprice-inpt"]{
    position: relative;
    top: 8px;
  }
  input[name="pqnty-inpt"]{
    position: relative;
    top: 16px;
  }
  input[name="update"]{
    height: 76px;
    width: 69%;
    font-size: 40px;
  }
  img[name="back-btn"]{
    position: absolute;
    height: 62px;
    top: -70px;
    right: 1px;
}

</style>
<center>
  <div class="main-container">
    <a href="home.php"><img name="back-btn" src="img/icons/close-btn.png" alt="Back"></a>
  <h1 class="text-center">Update Product</h1>
    <form action="" method="post">
        <input type="text" name="pname-inpt"  value="<?php echo $pname  ?>">
        <input type="number" name="pprice-inpt" value="<?php echo $pprice  ?>">
        <input type="number" name="pqnty-inpt" value="<?php echo $pqnty  ?>">
        <input type="submit"  name="update" value="Update">
    </form>    
  </div>

    <!-- a BACK button to go to the home page -->
    <div class="container text-center mt-5">
      <a href="home.php"> Back </a>
    <div>
</center>