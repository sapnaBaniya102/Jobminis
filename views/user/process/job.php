<!-- Add new job -->

<?php
require('../../connection/config.php');
session_start();
$userId = $_SESSION['userId'];
if(isset($_POST['submit'])) {
    
    $title = $_POST['title'];
    $contactPerson = $_POST['contactPerson'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $industry = $_POST['industry'];
    $finalDate = $_POST['finalDate'];
    $description = $_POST['description'];
    $skill = $_POST['skill'];
    $availability = $_POST['availability'];
    $experience = $_POST['experience'];
    $language = $_POST['language'];
    $type = $_POST['type'];
    $rate = $_POST['rate'];
    $isActive ="true";
    $status ="true";
    if ($title=='' || $contactPerson =='' || $email =='' || $phone =='' || $industry =='' || $finalDate =='' || $description =='' || $skill =='' ||$type =='') {
        # code...
        echo header("Location: ../app/newJob.php?msg=error");
    }
    else {
        # code...
        $query ="INSERT INTO `job_details` (user_id,title,job_category_id, contact_person, email, phone,date, description,skill, experience, availability, language, salary, job_type_id, is_active, status) VALUES('$userId', '$title', '$industry', '$contactPerson', '$email', '$phone', '$finalDate', '$description', '$skill', '$experience', '$availability', '$language', '$rate', '$type','$isActive','$status' )";
        $jobResult = mysqli_query($conn,$query);
        
        if ($jobResult) {
            echo header("Location:../app/newJob.php?msg=success");
        }
        else {
            echo header("Location:../app/newJob.php?msg=sqlErr");
        }
    }
}

// Access data from job_details table


?>