<?php
    include_once 'dbhandler.php';

        $first = mysqli_real_escape_string($conn, $_POST['first']);
        $last = mysqli_real_escape_string($conn, $_POST['last']);
        $email = mysqli_real_escape_string($conn, $_POST['email']);
        $uid = mysqli_real_escape_string($conn, $_POST['uid']);
        $pwd = mysqli_real_escape_string($conn, $_POST['pwd']);
   
        
       
    

    #insert data to database safer way prepared statements
    $sql = "INSERT INTO users (user_first, user_last, user_email, user_uid, user_pwd)
            VALUES(?, ?, ?, ?, ?);";
            
    $stmt = mysqli_stmt_init($conn); 
    if (!mysqli_stmt_prepare($stmt, $sql)){
        echo "SQL Statement Failed";
    } else {
        mysqli_stmt_bind_param($stmt, "sssss", $first, $last, $email, $uid, $pwd);
        mysqli_stmt_execute($stmt);
    }  
    header("Location: ../index.php?signup=sucess"); #if sucess
    /*
    #insert data to database "users" not safe
    $sql = "INSERT INTO users (user_first, user_last, user_email, user_uid, user_pwd)
            VALUES('$first ', '$last', '$email', '$uid', '$pwd');";            
    mysqli_query($conn, $sql);

    */
?>