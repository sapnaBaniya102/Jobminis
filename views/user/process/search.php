<?php
    session_start();
    include_once "../../connection/config.php";

    $outgoing_id = $_SESSION['userId'];
    $searchTerm = mysqli_real_escape_string($conn, $_POST['searchTerm']);
    $sql = "SELECT * FROM user WHERE NOT id = {$outgoing_id} AND (email LIKE '%{$searchTerm}%' ) ";
    $output = "";
    $query = mysqli_query($conn, $sql);
    if(mysqli_num_rows($query) > 0){
        include_once "data.php";
    }else{
        $output .= 'No user found related to your search term';
    }
    echo $output;
?>