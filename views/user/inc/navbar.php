<?php
include 'header.php';
session_start();
$role =  $_SESSION['role'];
?>
<!-- start navbar -->
<header>
    <nav class="navigation bg-white z-50  top-0 w-full fixed">
        <div class=" header_wrapper flex justify-between">
            <div class="logo w-48 -mt-5 ml-12  ">
                <img src="../../../img/logo.png" alt="">
            </div>
            <div class="navbar">
                <ul class="flex justify-between space-x-5 mt-7 text-lg font-semibold">
                    <li class="p-2 hover:text-teal-700 "><a href="../app/dashboard.php">Home</a> </li>
                    <li class="p-2 hover:text-teal-700"><a href="../app/"> Job</a></li>
                    <!-- <li class="p-2 hover:text-teal-700"><a href="">About Us</a> </li> -->
                    <li class="p-2 hover:text-teal-700"><a href="../app/companyList.php">Company</a> </li>
                    <li class="p-2 hover:text-teal-700"><a href="../app/candidateList.php">Candidate</a> </li>

                </ul>
            </div>
            <!-- <div class="account flex space-x-3 mt-5">
                <a href="../auth/signup.php">
                    <div class="post_job bg-blue-900 hover:bg-white hover:border hover:border-blue-900 hover:text-blue-900 text-white p-2 px-4 rounded-full">
                        <span>Post a Job</span>
                    </div>
                </a>
                <a href="../auth/login.php">
                    <div class="post_job bg-blue-900 hover:bg-white hover:border hover:border-blue-900 hover:text-blue-900 text-white p-2 px-4 rounded-full">
                        <span>Sign In</span>
                    </div>
                </a>
            </div> -->
            <div class="flex space-x-3 mt-8 mr-12">
<?php


    # code...
    ?>
      <div>
            <button id="dropdownJob" data-dropdown-toggle="job" class=" bg-teal-700 p-2 text-white hover:bg-white hover:text-teal-700 focus:ring-4 hover:ring-2 hover:ring-teal-600 focus:outline-none focus:ring-teal-600 px-2 font-medium rounded-lg text-sm text-center inline-flex items-center  type="button">Post a job</button>
<!-- Dropdown menu -->
<div id="job" class="z-10 hidden bg-white divide-y divide-gray-100 rounded shadow dark:bg-gray-700">
    <ul class="py-1 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownJob">
      <li>
        <a href="../app/newJob.php" class="block px-4 py-2 hover:bg-teal-700 hover:text-white dark:hover:bg-gray-600 dark:hover:text-white"><i class="fa-solid fa-file-plus pr-3"></i>New job</a>
      </li>
      <li>
        <a href="../app/manageJob.php" class="block px-4 py-2 hover:bg-teal-700 hover:text-white dark:hover:bg-gray-600 dark:hover:text-white">Manage job</a>
      </li>
    
    </ul>
</div>
</div> 
<?php


?>
          
              <div>
            <button id="dropdownDefault" data-dropdown-toggle="dropdown" class=" hover:text-teal-700 focus:ring-4 focus:outline-none focus:ring-teal-600 px-2 font-medium rounded-lg text-sm text-center inline-flex items-center  type="button"><i class="fa-solid fa-gear text-lg"></i></button>
<!-- Dropdown menu -->
<div id="dropdown" class="z-10 hidden bg-white divide-y divide-gray-100 rounded shadow dark:bg-gray-700">
    <ul class="py-1 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownDefault">
      <li>
        <a href="../app/setting.php" class="block px-4 py-2 hover:bg-teal-700 hover:text-white dark:hover:bg-gray-600 dark:hover:text-white"><i class="fa-solid fa-key pr-3"></i>Security and login</a>
      </li>
      <li>
        <a href="#" class="block px-4 py-2 hover:bg-teal-700 hover:text-white dark:hover:bg-gray-600 dark:hover:text-white"><i class="fa-solid fa-right-from-bracket pr-3"></i>Log out</a>
      </li>
      <?php
if ($role == "job-seeker") {
    ?>
  <li>
        <a href="#" class="block px-4 py-2 hover:bg-teal-700 hover:text-white dark:hover:bg-gray-600 dark:hover:text-white"><i class="fa-solid fa-file-circle-plus pr-3"></i>CV</a>
      </li>
      <?php
}
?>
    
    </ul>
</div>
</div>   
              
              <div class="notification">
              <i class="fa-solid fa-bell text-lg px-2 hover:text-teal-700"></i>
              </div>
              <div class="profile flex space-x-2">
               <a href="../app/profile.php"> <img src="../../../img/user.svg" class="w-9 -mt-1 " alt=""></a>
               <a href="../app/profile.php"> <span class="hover:text-teal-700 text-lg font-semibold">Simran</span></a>
              </div>
            </div>
        </div>

</nav>

<script>
    
   const nav = document.getElementsByClassName("navigation")
    window.addEventListener('scroll', () => {
       
        const y= window.scrollY
       
if (y >=50) {
    console.log(y)
    nav[0].classList.remove('bg-transparent');
    nav[0].classList.add('bg-white');
}
else {
   
}
    })

</script>
<script src="https://unpkg.com/flowbite@1.4.7/dist/flowbite.js"></script>
</header>