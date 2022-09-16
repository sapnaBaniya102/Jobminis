<?php
// require('../connection/config.php');
// session_start();


 

// if (isset($_POST['verify'])) {
//     $verify = $_POST['status'];
//     $id = $_POST['userId'];
//     $user = " UPDATE profile SET email_verified = '$verify' WHERE user_id = '$id'";
//     $result = mysqli_query($conn, $user);
//     if ($result) {
//         $user1 = " UPDATE user SET status = 'active' WHERE id = '$id'";
//         $result1 = mysqli_query($conn, $user1);
//         if ($result1) {
//             # code...
//             echo "successfull";

//         }
//         else{
//             echo "error";

//         }
//     }
//     else{
//         echo "error";
//     }
// }


$to = "skyrootmam123@gmail.com";
$subject = "This is subject";

$message = "<b>This is HTML message.</b>";
// $message .= "<h1>This is headline.</h1>";

$header = "From:itsadityabaniya@gmail.com \r\n";
// $header .= "MIME-Version: 1.0\r\n";
// $header .= "Content-type: text/html\r\n";

$retval = mail ($to,$subject,$message,$header);

if( $retval == true ) {
   echo "Message sent successfully...";
}else {
   echo "Message could not be sent...";
}
?>