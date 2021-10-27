<?php
    $servername = "Localhost";
    $dBUsername = "root";
    $dBPassword = "";
    $dBName = "cpsystem";

    $conn = mysqli_connect($servername, $dBUsername, $dBPassword, $dBName,);

    if (!$conn){
        die("Connection Failed" . mysqli_connect_error());
    }