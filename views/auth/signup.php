
<?php 
include '../layouts/header.php';
 
    $servername = "localhost";
    $username = "root";
    $password = "root";
    $dbname = "jobminis";
    $port = 3306;

    $conn = mysqli_connect($servername,$username,$password,$dbname,$port);
    if($conn)
    {
        echo "Connection Successful";

        if(isset($_POST['submit'])) {
            $name = $_POST['name'];
           $email=$_POST['email'];
           $password=md5($_POST['password']);
           $password=md5($_POST['confirmpassword']);
            if($name!="" && $email!=""  && $password!="" )
            {
                $query = "INSERT INTO user (name,email,password) VALUES('$name','$email','$password')";
                $result = mysqli_query($conn,$query);
                echo $query;
                if($result)
                {
                  echo "Account is added successfully.";
                  header("Location:dashboard.php");
                }
                else 
                {
                    echo "Account couldn't added successfully.";
                }
            }
        
        
          }
    }



 ?>

    <div class="container mt-20">
  
        <div class="lg:flex g-0">
            <div class="lg:w-6/12  ml-32 flex items-center lg:rounded-r-lg rounded-b-lg lg:rounded-bl-none   bg-teal-50">
                <img src="../img/login.png" alt="">
            </div>
            <div class="lg:w-6/12 ml-10 px-10 md:px-0 ">
                <div class="md:p-12 md:mx-6 ">
                    <div class="text-center ">
                        <h4 class="text-3xl font-semibold mt-1 mb-12 pb-1 ">Sign Up</h4>
                    </div>
                    <form  method="POST" enctype="multipart/form-data">
                        <div class="mb-4 ">
                            <input type="text " name="name" class="form-control block w-full rounded-full px-3 py-5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 transition ease-in-out m-0 focus:text-gray-700
                        focus:bg-white focus:border-blue-600 focus:outline-none " id="exampleFormControlInput1 " placeholder="Full Name " />
                        </div>
                        <div class="mb-4 ">
                            <input type="email" name="email" class="form-control block w-full rounded-full px-3 py-5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 transition ease-in-out m-0 focus:text-gray-700
                        focus:bg-white focus:border-blue-600 focus:outline-none " id="exampleFormControlInput1 " placeholder="Email " />
                        </div>
                        <div class="mb-4 ">
                            <input type="password " name="password" class="form-control block w-full rounded-full px-3 py-5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 transition ease-in-out m-0 focus:text-gray-700
                        focus:bg-white focus:border-blue-600 focus:outline-none " id="exampleFormControlInput1 " placeholder="Password " />
                        </div>
                        <div class="mb-4 ">
                            <input type="password " name="confirmpassword" class="form-control block w-full rounded-full px-3 py-5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 transition ease-in-out m-0 focus:text-gray-700
                        focus:bg-white focus:border-blue-600 focus:outline-none " id="exampleFormControlInput1 " placeholder="Confirm Password " />
                        </div>
                        <div class="text-center pt-1 mb-12 pb-1 ">
                            <button type="submit" name="submit" value="submit">Sign up</button>
                            <a class="text-teal-400 " href="#! ">Forgot password?</a>
                        </div>
                        <div class=" items-center justify-between pb-6 text-center ">
                            <p class="mb-0 mr-2 text-center">Already have a account?</p>
                            <a href="index.php" class="mb-0 mr-2 text-center text-teal-400 ">Sign in</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    </div>
</body>

</html>