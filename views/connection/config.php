<?php 
    $servername = "localhost";
    $username = "user";
    $password = "";
    $dbname = "jobMinis";

    $conn = new mysqli($servername,$username,$password,$dbname);
    if($conn)
    {
        echo "Connection Successful";
    }
    
?>