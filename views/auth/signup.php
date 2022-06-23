<?php
include('../layouts/header.php');
require('../connection/config.php');

?>

<div class="div ">

    <div id="signup" class="container mt-20 ">

        <div class="lg:flex g-0">
            <div class="lg:w-6/12  ml-32 flex items-center lg:rounded-r-lg rounded-b-lg lg:rounded-bl-none   bg-teal-50">
                <img src="../../img/login.png" alt="">
            </div>
            <div class="lg:w-6/12 ml-10 px-10 md:px-0 ">
                <div class="md:p-12 md:mx-6 ">
                    <div class="text-center ">
                        <h4 class="text-3xl font-semibold mt-1 mb-12 pb-1 ">Sign Up</h4>
                    </div>
                    <?php
                    if (isset($_GET['msg'])) {
                        if ($_GET['msg']=='error') {
                            # code...
                        
                        # code...
                    ?>

                               <div class="alert text-white text-sm bg-red-400 p-3 rounded-md my-4 alert-dismissible fade show" role="alert">
                                      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                      </button>
                                      <strong>Please provide valid email and password</strong> 
                                    </div>
                                    
                                    <script>
                                      $(".alert").alert();
                                    </script>
                                    <?php
                                    }
                                    if ($_GET['msg']=="password") {
                                        # code...
                                        ?>
                                           <div class="alert text-sm text-white bg-red-400 p-3 rounded-md my-4 alert-dismissible fade show" role="alert">
                                      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                      </button>
                                      <strong>Password and Confirm Password does not match</strong> 
                                    </div>
                                    
                                    <script>
                                      $(".alert").alert();
                                    </script>
                                        <?php
                                    }
                                    if ($_GET['msg']=="Error") {
                                        # code...
                                        ?>
                                          <div class="alert text-sm text-white bg-red-400 p-3 rounded-md my-4 alert-dismissible fade show" role="alert">
                                      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                      </button>
                                      <strong>Cannot sign up</strong> 
                                    </div>
                                    
                                    <script>
                                      $(".alert").alert();
                                    </script>
                                        <?php
                                    }
                                }
?>
                    <form method="post" action="../process/signUp.php" enctype="multipart/form-data">
                        <div class="mb-4 ">
                            <input type="email" name="email" class="form-control block w-full rounded-full px-5 py-4 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 transition ease-in-out m-0 focus:text-gray-700
                        focus:bg-white focus:border-blue-600 focus:outline-none " placeholder="Email " />
                        </div>
                        <div class="mb-4 ">
                            <input type="password" name="password" class="form-control block w-full rounded-full px-5 py-4 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 transition ease-in-out m-0 focus:text-gray-700
                        focus:bg-white focus:border-blue-600 focus:outline-none " placeholder="Password" />
                        </div>
                        <div class="mb-4 ">
                            <input type="password" name="confirmpassword" class="form-control block w-full rounded-full px-5 py-4 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 transition ease-in-out m-0 focus:text-gray-700
                        focus:bg-white focus:border-blue-600 focus:outline-none " placeholder="Confirm Password " />
                        </div>
                        <div class="text-center pt-1 mb-12 pb-1 ">
                            <button type="submit" name="submit" value="submit" class="inline-block px-3 py-5 text-white font-medium text-10 rounde rounded-full  leading-tight uppercase shadow-md hover:bg-teal-600 hover:shadow-lg focus:shadow-lg focus:outline-none focus:ring-0 active:shadow-lg
                        transition duration-150 ease-in-out w-full mb-3  bg-teal-500 " id="signUpbtn" data-mdb-ripple="true " data-mdb-ripple-color="light ">
                                Sign up
                            </button>

                        </div>
                        <div class=" items-center justify-between pb-6 text-center ">
                            <p class="mb-0 mr-2 text-center">Already have a account?</p>
                            <a href="login.php" class="mb-0 mr-2 text-center text-teal-400 ">Sign in</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="username-wrapper bg-teal-50 h-screen " id="signupDetail">

        <div id="username" class="content absolute w-4/12 h-4/6 py-12 mx-auto mt-8 left-1/3 rounded-md shadow-lg shadow-gray-500 bg-white">
            <div class="header-logo flex justify-between">
                <button id="backToSign" onclick="BackSign()">
                    <i class="fa-solid fa-chevron-left absolute ml-10 text-gray-400 -mt-2"></i>
                </button>
                <img src="../../img/logo.png" class="w-2/3 -mt-10 -mb-10 mx-auto" alt="">
            </div>
            <div class="username-info mx-10 mt-6">
                <?php
                 if (isset($_GET['msg'])) {
                    if ($_GET['msg']=='usernameError') {
                        # code...
                    
                    # code...
                ?>
                    <div class="alert text-sm text-white bg-red-400 p-3 rounded-md my-4 alert-dismissible fade show" role="alert">
                                      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                      </button>
                                      <strong>Username cannot be empty</strong> 
                                    </div>
                                    
                                    <script>
                                      $(".alert").alert();
                                    </script>
                                    <?php
                    }
                }
                                    ?>
                <form method="post" action="../process/signUp.php" enctype="multipart/form-data" class="space-y-7">
                    <h1 class="text-xl font-bold mb-3">Choose a username</h1>
                    <span class="text-gray-600 text-sm font-light">Please note a username cannot be changed once choose</span>
                    <input type="text" name="username" placeholder="Username" class="border border-gray-400 p-2 w-full placeholder:pl-4 rounded-md">
                    <div class="m-auto pt-3">
                        <button type="submit" name="submit1" value="submit1" id="usernameBtn" class="bg-teal-500 rounded-full text-white text-md w-full font-semibold text-center p-3">Next</button>
                    </div>
                </form>
            </div>
        </div>

        <div id="accountType" class=" content absolute w-4/12 h-4/6 py-10 mx-auto mt-8 left-1/3 rounded-md shadow-lg shadow-gray-500 bg-white">
            <div class="header-logo flex justify-between">
                <button id="backToUsername" onclick="BackUsername()">
                    <i class="fa-solid fa-chevron-left absolute ml-10 text-gray-400 -mt-2"></i>
                </button>
                <img src="../../img/logo.png" class="w-2/3 -mt-10 -mb-10 mx-auto" alt="">
            </div>
            <div class="account-info mx-10 mt-8 ">
                <form method="post" action="../process/signUp.php" enctype="multipart/form-data" class="space-y-9">
                    <h1 class="text-xl font-bold mb-3">Select Account type</h1>

                    <div class="type grid grid-cols-2 gap-4">
                        <button type="submit" name="account" value="work">

                            <div class="type1 border bg-white shadow text-center shadow-gray-500 hover:shadow-lg hover:shadow-gray-600 py-6 rounded-2xl">
                                <i class="fa-solid fa-user-nurse text-3xl text-teal-700"></i>
                                <h1  class="text-base font-medium">I want to work</h1>
                                
                                <i class="fa-solid fa-arrow-right text-xl text-blue-600 pt-3"></i>
                            </div>
                        </button>
                        <button type="submit" name="account" value="hire">
                            <div class="type2 border shadow text-center shadow-gray-500 hover:shadow-lg hover:shadow-gray-600 bg-white py-6 rounded-2xl">
                                <i class="fa-solid fa-address-card text-3xl text-teal-700"></i>
                                <h1  class="text-base font-medium">I want to hire</h1>
                                <i class="fa-solid fa-arrow-right text-xl text-blue-600 pt-3"></i>
                            </div>
                        </button>
                    </div>
                </form>
            </div>
        </div>

    </div>

</div>
<script type="text/javascript" src="../../dist/js/frontend.js"></script>
</body>

</html>