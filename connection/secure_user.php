<?php
if(isset($_SESSION['email']))
{

}
else{
    echo header('Location: login.php?msg=invaliduser');
}
?>