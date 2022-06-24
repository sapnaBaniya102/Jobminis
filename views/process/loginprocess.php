

<?php
require('../connection/config.php');
if(isset($_POST['login'])) {
    $email = $_POST['email'];
    $password = md5($_POST['password']);

    $query = "  SELECT * FROM user
    INNER JOIN credentials ON user.id = credentials.user_id AND 'user.email'='$email'";
  echo $query;
    $result = mysqli_query($conn, $query)
    or die(mysqli_error($conn));
    $count = mysqli_num_rows($result);
    echo $count;
    if($count==1)
    {
        echo "success";
        $row=mysqli_fetch_assoc($result);
        $_SESSION['email']= $row['email'];
        echo "hello";
        
        // header("Location: http://localhost:3000/admin/dashboard.php");
     
        ?>
       <meta http-equiv="refresh" content="0;url=../auth/dashboard.php">
        <?php 
        
    }
    else 
    {
        ?>
        <!-- <meta http-equiv="refresh" content="0;url=../auth/login.php?msg=loginerror"> -->
        <?php 
    }
}

?>