<?php
include ('../layouts/header.php');
require('../connection/config.php');
session_start();
$id = $_SESSION['userId'];



// email send

?>

<!-- <head>
    <meta charset='UTF-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <title>Tailwind CSS Simple Email Template Example </title>
    <link href='https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css' rel='stylesheet'>
</head> -->
<body>
    <div class='flex items-center justify-center min-h-screen p-5 bg-blue-100 min-w-screen'>
        <div class='max-w-xl p-8 text-center text-gray-800 bg-white shadow-xl lg:max-w-3xl rounded-3xl lg:p-12'>
        <img src='../../assets/img/logo.png' class='w-56 mx-auto -mt-10' alt=''>

        
        <h3 class='text-xl'>Thanks for signing up for our website!</h3>
            <div class='flex justify-center'>
                <svg xmlns='http://www.w3.org/2000/svg' class='w-16 h-16 text-green-400' fill='none'
                    viewBox='0 0 24 24' stroke='currentColor'>
                    <path stroke-linecap='round' stroke-linejoin='round' stroke-width='1'
                        d='M3 19v-8.93a2 2 0 01.89-1.664l7-4.666a2 2 0 012.22 0l7 4.666A2 2 0 0121 10.07V19M3 19a2 2 0 002 2h14a2 2 0 002-2M3 19l6.75-4.5M21 19l-6.75-4.5M3 10l6.75 4.5M21 10l-6.75 4.5m0 0l-1.14.76a2 2 0 01-2.22 0l-1.14-.76' />
                </svg>
            </div>

            <p>We're happy you're here. Let's get your email address verified:</p>
            <form action='#' method='post' enctype='multipart/form-data' id='verify-user'>
            <div class='mt-4'>
                <input type='hidden' name='id' id='userID' value='<?php echo $id; ?>'>
                <button id='verify' value ='true' name ='verify' class='px-2 py-2 text-blue-200 bg-blue-600 rounded'>Click to Verify Email</button>
       
            </div>
            </form>
        </div>
    </div>

    <script type='text/javascript' src='../../assets/js/jQuery.js'></script>
<script type='text/javascript'>
    $('#verify').click(function(e){
$('#verify-user').submit(function(){
    var verify = $('$verify').val();
    var id = $('userID').val();
                e.preventDefault();
                $.ajax({
            method: 'POST',
            url: '../process/email.php',
            data: {status:verify, userId: id },

  
            success: function(data) {

              console.log(data)

            }
        })

})
    })
    </script>
</body>
</html>