<?php 

$hostname = "sql312.infinityfree.com";
$username = "if0_36335043";
$password = "Mohit070304";
$dbname = "if0_36335043_knockknockapp_db";

    $conn = mysqli_connect($hostname, $username, $password,$dbname);

    if(!$conn)
    {
        echo "Database connection error".mysqli_connect_error();
    }



?>