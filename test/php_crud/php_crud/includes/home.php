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
            $query="SELECT * FROM users";               // SQL query to fetch all table data
            $view_users= mysqli_query($conn,$query);    // sending the query to the database

            //  displaying all the data retrieved from the database using while loop
            while($row= mysqli_fetch_assoc($view_users)){
              $id = $row['id'];                
              $user = $row['username'];        
              $email = $row['email'];         
              $pass = $row['password'];        

              echo "<tr >";
              echo " <th scope='row' >{$id}</th>";
              echo " <td > {$user}</td>";
              echo " <td > {$email}</td>";
              echo " <td >{$pass} </td>";

              echo " <td class='text-center' > <a href='update.php?edit&user_id={$id}'>EDIT</a> </td>";

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