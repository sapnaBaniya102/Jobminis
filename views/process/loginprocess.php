

<?php
require('../connection/config.php');
session_start();
if(isset($_POST['login'])) {
    $email = $_POST['email'];
    $password = md5($_POST['password']);
    if ($email == "" || $password == "" ) {
        echo header("Location: ../auth/login.php?msg=error");
    } else {
    $query = "  SELECT * FROM user INNER JOIN credentials ON user.id = credentials.user_id WHERE user.email='$email' AND credentials.e ='$password'";
 
    $result = mysqli_query($conn, $query)
    or die(mysqli_error($conn));
    $count = mysqli_num_rows($result);
   
    if($count==1)
    {
       
        $row=mysqli_fetch_assoc($result);
        $_SESSION['email']= $row['email'];
     
        
        // header("Location: http://localhost:3000/admin/dashboard.php");
     
        ?>
       <meta http-equiv="refresh" content="0;url=../admin/app/dashboard.php">
        <?php 
        
    }
    else 
    {
        
        echo header("Location:../auth/login.php?msg=loginerror");
        
    }
}
}

?>