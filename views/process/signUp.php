<?php
require('../connection/config.php');
session_start();

if (isset($_POST['submit'])) {
    $email = $_POST['email'];
    $password = md5($_POST['password']);
    $confirmPassword = md5($_POST['confirmpassword']);

    if ($email == "" || $password == "" || $confirmPassword == "") {
        echo header("Location: ../auth/signup.php?msg=error#signup");
    } else {
        if ($password == $confirmPassword) {
            $status = "inactive";
            $user = "INSERT INTO `user` (email,status) VALUES('$email','$status')";
            
            $result = mysqli_query($conn, $user);
            if ($result) {
                $_SESSION["userId"] = 12;
                $credentialsType = "password";
                $v = "null";
                $active = "false";
                $credentialsQuery = "INSERT INTO `credentials`(credentials_type,user_id,k,e,v,is_active) VALUES('$credentialsType',LAST_INSERT_ID(),LAST_INSERT_ID(),'$password','$v','$active')";
           
                $result2 = mysqli_query($conn, $credentialsQuery);
            
                if ($result2) {
                   
                    echo header("Location:../auth/signup.php#username");
                }
                else{
                    
                    echo header("Location:../auth/signup.php?msg=Error#signup");
                }
                
            }
            else {
               
                echo header("Location:../auth/signup.php?msg=Error#signup");
            }
           
        }
        else {
            echo header("Location: ../auth/signup.php?msg=password#signup");
        }
    }
}
if (isset($_POST['submit1'])) {
    
    $username = $_POST['username'];
    if ($username == "") {
        # code...
        echo header("Location: ../auth/signup.php?msg=usernameError#username");
    }
    else {
        $active = "false";
        $accountQuery = "INSERT INTO `account` (user_name,slug,is_active) VALUES('$username','$username','$active')";
            
        $result = mysqli_query($conn, $accountQuery);
        if ($result) {
            echo header("Location:../auth/signup.php#accountType");
        }
        else {
            echo header("Location:../auth/signup.php?msg=Error#username");
        }
    }


}
if (isset($_POST['account'])) {
    
    $account = $_POST['account'];
    $active = "false";
    $p_type ="g";
    $role = "";
    $userId = $_SESSION["userId"];
    if ($account == "work") {
        # code...
        $role ="job-seeker";

    }
    else {
        $role ="job-provider";
    }
    $accountQuery = "INSERT INTO `permissions` (p_type,v0,v1,v2,is_active) VALUES('$p_type','$userId','$role','$role','$active')";
        
    $result = mysqli_query($conn, $accountQuery);
    if ($result) {
        echo header("Location:../auth/signup.php#accountType");
    }
    else {
        echo header("Location:../auth/signup.php?msg=error#username");
    }
    
  
}

?>