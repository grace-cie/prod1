<?php
if (isset($_POST['addprod-submit'])){
    require 'dbhandler.php';

    //$name = $_POST['name'];
    //$username = $_POST['uname'];
    //$userpwd = $_POST['pwd'];

    $prodname = $_POST['prod-name'];
    $prodprice = $_POST['prod-price'];
    $prodqnty = $_POST['prod-qnty'];
    
   
    #error handler
    if (empty($prodname) || empty($prodprice)  || empty($prodqnty)){
        header("Location: addproducts.php?error=Empty fields&prods".$prodprice."&name".$prodname);
        exit();
    } else { #insert data in database
        $sql = "SELECT id FROM productss WHERE id=?";
        $stmt = mysqli_stmt_init($conn);
        if (!mysqli_stmt_prepare($stmt, $sql)){
            header("Location: addproducts.php?error=sqlerror");
            exit();
        } else { //add data to database func
            mysqli_stmt_bind_param($stmt, "s", $prodprice);
            mysqli_stmt_execute($stmt);
            mysqli_stmt_store_result($stmt);

            $resultCheck = mysqli_stmt_num_rows($stmt);
            if($resultCheck > 0){
                header("Location: addproducts.php?error=prodtaken&name=".$prodname);
                exit();
            } else { 
                $sql = "INSERT INTO productss (prod_name, prod_price, prod_qnty) VALUES (?, ?, ?)";
                $stmt = mysqli_stmt_init($conn);
                if (!mysqli_stmt_prepare($stmt, $sql)){
                    header("Location: addproducts.php?error=sqlerror");
                    exit();
                } else {
                    //$hashedPwd = password_hash($password, PASSWORD_DEFAULT); //create hash pass
                    mysqli_stmt_bind_param($stmt, "sss", $prodname, $prodprice, $prodqnty);
                    mysqli_stmt_execute($stmt);
                    mysqli_stmt_store_result($stmt);
                    header("Location: addproducts.php?addproduct=sucess");
                    exit();
                }
            }    
        }
    }
    mysqli_stmt_close($stmt);
    mysqli_close($conn);
} else {
    header("Location: addproducts.php");
    exit();
}
   
