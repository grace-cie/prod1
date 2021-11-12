<?php
session_start();
$host= "localhost";
$username= "root";
$password = "";

$db_name = "demo";

$conn = mysqli_connect($host, $username, $password, $db_name);

if (!$conn) {
	echo "Connection failed!";
}


if(isset($_POST['submit'])){

    $pname = $_POST['prodname'];
    $solds = $_POST['sold'];
    $trans = date('Y-m-d', strtotime($_POST['dateoftrans']));
    $tot = $_POST['total'];

    $query = "INSERT INTO trans (prod_name, coutof_sold, date_sold, total) VALUES ('$pname','$solds','$trans','$tot')";
    $query_run = mysqli_query($conn, $query);
    
    if($query_run){
        $_SESSION['status'] = "Inserted!";
        header("Location: index.php");
    } else {
        $_SESSION['status'] = "Failed!!";
        header("Location: index.php");
    }
}