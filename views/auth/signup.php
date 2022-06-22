<?
require('../../connection/config.php');
 ?>

<!DOCTYPE html>
<html lang="en">s

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Document</title>
</head>

<body>
    <div class="container mt-20">
        <?php
        if (isset($_POST['submit'])) {
            $name = $_POST['name'];
            $email = $_POST['email'];
            $password = md5($_POST['password']);
            $status = 0;
            $confirmpassword = md5($_POST['confirmpassword']);
            if ($name != "" && $email != ""  && $password != "") {
                $query = "INSERT INTO user(name,email,password,status) VALUES('$name','$email','$password','$status')";
                $result = mysqli_query($conn, $query);
                echo $query;
                if ($result) {
                    echo "Account is added successfully.";
                    //   echo header("Location:dashboard.php");
                } else {
                    echo "Account couldn't added successfully.";
                }
            }
        }

        ?>
        <div class="lg:flex g-0">
            <div class="lg:w-6/12  ml-32 flex items-center lg:rounded-r-lg rounded-b-lg lg:rounded-bl-none   bg-teal-50">
                <img src="../../img/login.png" alt="">
            </div>
            <div class="lg:w-6/12 ml-10 px-10 md:px-0 ">
                <div class="md:p-12 md:mx-6 ">
                    <div class="text-center ">
                        <h4 class="text-3xl font-semibold mt-1 mb-12 pb-1 ">Sign Up</h4>
                    </div>
                    <form method="POST" enctype="multipart/form-data">
                        <div class="mb-4 ">
                            <input type="text " name="name" class="form-control block w-full rounded-full px-3 py-5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 transition ease-in-out m-0 focus:text-gray-700
                        focus:bg-white focus:border-blue-600 focus:outline-none " id="exampleFormControlInput1 " placeholder="Full Name " />
                        </div>
                        <div class="mb-4 ">
                            <input type="email" name="email" class="form-control block w-full rounded-full px-3 py-5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 transition ease-in-out m-0 focus:text-gray-700
                        focus:bg-white focus:border-blue-600 focus:outline-none " id="exampleFormControlInput1 " placeholder="Email " />
                        </div>
                        <div class="mb-4 ">
                            <input type="password" name="password" class="form-control block w-full rounded-full px-3 py-5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 transition ease-in-out m-0 focus:text-gray-700
                        focus:bg-white focus:border-blue-600 focus:outline-none " id="exampleFormControlInput1 " placeholder="Password " />
                        </div>
                        <div class="mb-4 ">
                            <input type="password" name="confirmpassword" class="form-control block w-full rounded-full px-3 py-5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 transition ease-in-out m-0 focus:text-gray-700
                        focus:bg-white focus:border-blue-600 focus:outline-none " id="exampleFormControlInput1 " placeholder="Confirm Password " />
                        </div>
                        <div class="text-center pt-1 mb-12 pb-1 ">
                            <button class="inline-block px-3 py-5 text-white font-medium text-10 rounde rounded-full  leading-tight uppercase shadow-md hover:bg-teal-600 hover:shadow-lg focus:shadow-lg focus:outline-none focus:ring-0 active:shadow-lg
                        transition duration-150 ease-in-out w-full mb-3  bg-teal-500 " type="submit" data-mdb-ripple="true " data-mdb-ripple-color="light " name="submit" value="submit">
                                Sign up
                            </button>
                            <a class="text-teal-400 " href="#! ">Forgot password?</a>
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
    </div>
</body>

</html>