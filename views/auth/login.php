<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Document</title>
</head>
<?php
                                        if(isset($_GET['msg'])){
                                            $msg= $_GET['msg'];
                                            if($msg=='loginerror')
                                            {
                                               ?>
                                                       <div class="alert alert-danger alert-dismissible fade show "  role="alert">
                                                         <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                         <span aria-hidden="true">&times;</span>
                                                         </button>
                                                         <strong>Your credentials are not matched.</strong> 
                                                         </div>
                        
                                                         <script>
                                                            $(".alert").alert();
                                                        </script>
                                               <?php
                                            }
                                        }
                                        ?>

                                        <?php
                                        if(isset($_GET['msg'])){
                                            $msg= $_GET['msg'];
                                            if($msg=='invaliduser')
                                            {
                                               ?>
                                                       <div class="alert alert-danger alert-dismissible fade show"  role="alert">
                                                         <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                         <span aria-hidden="true">&times;</span>
                                                         </button>
                                                         <strong>You are invalid user You need permission to access those pages. Please first login.</strong> 
                                                         </div>
                        
                                                         <script>
                                                            $(".alert").alert();
                                                        </script>
                                               <?php
                                            }
                                        }
                                        ?>

<body>
    <div class="container mt-28">
        <div class="lg:flex g-0">
            <div class="lg:w-6/12  ml-32 flex items-center lg:rounded-r-lg rounded-b-lg lg:rounded-bl-none   bg-teal-50">
                <img src="../img/login.png" alt="">
            </div>
            <div class="lg:w-6/12 ml-10 px-10 md:px-0 ">
                <div class="md:p-12 md:mx-6 ">
                    <div class="text-center ">
                        <h4 class="text-3xl font-semibold mt-1 mb-12 pb-1 ">Sign In</h4>
                    </div>
                    <form class="user"  action="process/loginprocess.php" method="POST" enctype="multipart/form-data">
                        <div class="mb-4 ">
                            <input type="email " name="email" class="form-control block w-full rounded-full px-3 py-5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 transition ease-in-out m-0 focus:text-gray-700
                        focus:bg-white focus:border-blue-600 focus:outline-none " id="exampleFormControlInput1 " placeholder="Email " />
                        </div>
                        <div class="mb-4 ">
                            <input type="password " name="password" class="form-control block w-full rounded-full px-3 py-5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 transition ease-in-out m-0 focus:text-gray-700
                        focus:bg-white focus:border-blue-600 focus:outline-none " id="exampleFormControlInput1 " placeholder="Password " />
                        </div>
                        <div class="text-center pt-1 mb-12 pb-1 ">
                            <button class="inline-block px-3 py-5 text-white font-medium text-10 rounde rounded-full  leading-tight uppercase shadow-md hover:bg-teal-600 hover:shadow-lg focus:shadow-lg focus:outline-none focus:ring-0 active:shadow-lg
                        transition duration-150 ease-in-out w-full mb-3  bg-teal-500 " type="submit " data-mdb-ripple="true " data-mdb-ripple-color="light " name="login">
                    Log in
                  </button>
                            <a class="text-teal-400 " href="#! ">Forgot password?</a>
                        </div>
                        <div class=" items-center justify-between pb-6 text-center ">
                            <p class="mb-0 mr-2 text-center">New to JobMinis?</p>
                            <a href="signup.php" class="mb-0 mr-2 text-center text-teal-400 ">Create an accounts</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    </div>
</body>

</html>