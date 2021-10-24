<?php
    include_once 'includes/dbhandler.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <!-- Sign up system -->
<form action="includes/signup.php" method="POST">
    <input type="text" name="first" placeholder="FirstName" required>
    <br>
    <input type="text" name="last" placeholder="LastName" required>
    <br>
    <input type="text" name="email" placeholder="Email" required>
    <br>
    <input type="text" name="uid" placeholder="UserName" required>
    <br>
    <input type="password" name="pwd" placeholder="Password" required>
    <br>
    <button type="submit">Sign Up!</button>
</form>


<?php
/*
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
</body>
</html>