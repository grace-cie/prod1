<?php
    include_once 'includes/dbhandler.php';
    
    require "header.php"
    
?>
<main>
    <p>You are logged in</p>
    <p>You are logged out</p>


    <!-- Sign up system 
<form action="includes/signup.php" method="POST">
    <input type="text" name="first" placeholder="FirstName" required>
    <br>
    <input type="text" name="last" placeholder="LastName" required>
    <br>
    <input type="email" name="email" placeholder="Email" required>
    <br>
    <input type="text" name="uid" placeholder="UserName" required>
    <br>
    <input type="password" name="pwd" minlength="8" placeholder="Password" required>
    <br>
    <button type="submit">Sign Up!</button>
</form>
-->

<?php

/*  when sucess signup
    $fullUrl = "http//$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";

    if(strpos($fullUrl, "signup=sucess") == true){
        echo "<p style='color: green; font-weight: bold;'>Sign up sucess</p>";
    }


    #select data from inside the database in saferway prepared statements
    $data = "Admin";
    $sql = "SELECT * FROM users WHERE user_uid=?";

    $stmt = mysqli_stmt_init($conn); 

    if (!mysqli_stmt_prepare($stmt, $sql)){
        echo "SQL Statement Failed";
    } else {
        mysqli_stmt_bind_param($stmt, "s", $data);
        mysqli_stmt_execute($stmt);
        $result = mysqli_stmt_get_result($stmt);

        while ($row = mysqli_fetch_assoc($result)) {
            echo 'User: '. $row['user_uid'] . "<br>";
            echo 'First Name: ' . $row['user_first']. "<br>";
            echo 'Last Name: ' . $row['user_last'];
        }
    }


    #This is for cheking data from database to website  
    include_once 'includes/dbhandler.php';

    $sql = "SELECT * FROM users;";
    $result = mysqli_query($conn, $sql);

  

    $resultCheck = mysqli_num_rows($result);

    if ($resultCheck > 0){
        while ($row = mysqli_fetch_assoc($result)) {
            echo $row['user_first'] . "<br>";
        }
            
    }
    */
?>

<?php
    require "footer.php";
?>
</main>