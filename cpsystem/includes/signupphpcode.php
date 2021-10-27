<?php


if (isset($_POST['signup-submit'])){
    require 'dbhandler.php';

    $username = $_POST['uid'];
    $useremail = $_POST['mail'];
    $userpwd = $_POST['pwd'];
    
   
    #error handler
    if (empty($username) || empty($useremail) || empty($userpwd)){
        header("Location: ../signup.php?error=emptyfields&uid".$username."&mail".$useremail);
        exit();
    } else { #insert data in database
        $sql = "SELECT uidUsers FROM users WHERE uidusers=?";
        $stmt = mysqli_stmt_init($conn);
        if (!mysqli_stmt_prepare($stmt, $sql)){
            header("Location: ../signup.php?error=sqlerror");
            exit();
        } else { //add data to database func
            mysqli_stmt_bind_param($stmt, "s", $username);
            mysqli_stmt_execute($stmt);
            mysqli_stmt_store_result($stmt);

            $resultCheck = mysqli_stmt_num_rows($stmt);

            if ($resultCheck > 0){
                header("Location: ../signup.php?error=usertaken&mail=".$useremail);
                exit();
            } else {
                $sql = "INSERT INTO users (uidUsers, emailUsers, pwdUsers) VALUES (?, ?, ?)";
                $stmt = mysqli_stmt_init($conn);
                if (!mysqli_stmt_prepare($stmt, $sql)){
                    header("Location: ../signup.php?error=sqlerror");
                    exit();
                } else {
                    $hashedPwd = password_hash($password, PASSWORD_DEFAULT); //create hash pass

                    mysqli_stmt_bind_param($stmt, "sss", $username, $useremail, $hashedPwd);
                    mysqli_stmt_execute($stmt);
                    mysqli_stmt_store_result($stmt);
                    header("Location: ../signup.php?signup=sucess");
                    exit();
                }
            }
        }
    }
    mysqli_stmt_close($stmt);
    mysqli_close($conn);
} else {
    header("Location: ../signup.php");
    exit();
}
   
