<!-- Header -->
<?php include "../header.php"?>

  <div class="container">
    <h1 class="text-center" >Data to perform CRUD Operations</h1>
      <a href="create.php">Create New User</a>

        <table>
            <tr>
              <th  scope="col">Roll</th>
              <th  scope="col">Product Name</th>
              <th  scope="col">Price</th>
              <th  scope="col">Quantity</th>
              <th  scope="col" colspan="3" class="text-center">Operations</th>
            </tr>  
          </thead>
            <tbody>
              <tr>
 
          <?php
            $query="SELECT * FROM products";               // SQL query to fetch all table data
            $view_prods= mysqli_query($conn,$query);    // sending the query to the database

            //  displaying all the data retrieved from the database using while loop
            while($row= mysqli_fetch_assoc($view_prods)){
              $id = $row['id'];                
              $pname = $row['prodname'];        
              $pprice = $row['prodprice'];         
              $pqnty = $row['prodqnty'];        

              echo "<tr >";
              echo " <th scope='row' >{$id}</th>";
              echo " <td > {$pname}</td>";
              echo " <td > {$pprice}</td>";
              echo " <td >{$pqnty} </td>";

              echo " <td class='text-center' > <a href='update.php?edit&prod_id={$id}'>EDIT</a> </td>";

              echo " <td  class='text-center'>  <a href='delete.php?delete={$id}'>DELETE</a> </td>";
              echo " </tr> ";
                  }  
                ?>
              </tr>  
            </tbody>
        </table>
  </div>

<!-- a BACK button to go to the index page -->
    <div>
      <a href="../index.php"> Back </a>
    <div>

<!-- Footer -->
<?php include "../footer.php" ?>