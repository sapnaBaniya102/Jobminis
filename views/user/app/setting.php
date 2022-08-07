<?php
require('../../connection/config.php');
require('../inc/header.php');
require('../inc/navbar.php');
?>


<main class="bg-white h-full w-full mt-28 fixed">
    <div class="setting-wrapper grid grid-cols-12 h-full w-11/12 mx-auto">
        <aside class="col-span-3 h-full" aria-label="Sidebar">
   <div class="overflow-y-auto py-4 px-3 fixed h-full bg-gray-50 rounded dark:bg-gray-800">
    <h1 class="my-3 text-2xl font-semibold text-center">Settings</h1>
      <ul class="space-y-2">
         <li>
            <a href="#" class="flex items-center p-2 text-base font-normal text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700">
               <svg class="w-6 h-6 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M2 10a8 8 0 018-8v8h8a8 8 0 11-16 0z"></path><path d="M12 2.252A8.014 8.014 0 0117.748 8H12V2.252z"></path></svg>
               <span class="ml-3">Personal Information</span>
            </a>
         </li>
         <li>
            <a href="#" class="flex items-center p-2 text-base font-normal text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700">
               <svg class="flex-shrink-0 w-6 h-6 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M5 3a2 2 0 00-2 2v2a2 2 0 002 2h2a2 2 0 002-2V5a2 2 0 00-2-2H5zM5 11a2 2 0 00-2 2v2a2 2 0 002 2h2a2 2 0 002-2v-2a2 2 0 00-2-2H5zM11 5a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V5zM11 13a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z"></path></svg>
               <span class="flex-1 ml-3 whitespace-nowrap">Password</span>
            </a>
         </li>
         <li>
            <a href="#" class="flex items-center p-2 text-base font-normal text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700">
               <svg class="flex-shrink-0 w-6 h-6 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M8.707 7.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l2-2a1 1 0 00-1.414-1.414L11 7.586V3a1 1 0 10-2 0v4.586l-.293-.293z"></path><path d="M3 5a2 2 0 012-2h1a1 1 0 010 2H5v7h2l1 2h4l1-2h2V5h-1a1 1 0 110-2h1a2 2 0 012 2v10a2 2 0 01-2 2H5a2 2 0 01-2-2V5z"></path></svg>
               <span class="flex-1 ml-3 whitespace-nowrap">About</span>
            </a>
         </li>
     
      </ul>
   </div>
</aside>
<aside class="col-span-9  h-full">
    <div class="py-4 px-3">
        <div class="password-reset hidden mt-12 h-full">
            <div class="flex justify-center gap-5 py-5">
            <img src="../uploads/image-removebg-preview(4)1655989779.png" class="w-16 h-16 rounded-full" alt="">
            <h1 class="text-xl font-medium mt-5">Full Name</h1>
            </div>
            <hr>
        <form action="" method="post">
            <div class="old-password p-8">
                <label for="">Old Password</label>
                <input type="password" class="w-2/4 ml-20">
            </div>
            <hr>
            <div class="new-password p-8">
                <label for="">New Password</label>
                <input type="password" class="w-2/4 ml-20">
            </div>
            <hr>
            <div class="confirm-password p-8">
                <label for="">Confirm Password</label>
                <input type="password" class="w-2/4 ml-12">
            </div>
            <button type="submit" class="bg-blue-600 text-white text-lg px-6 font-medium rounded-lg flex text-center mx-auto p-2">Change Password</button>
            <span class="my-2 text-base text-blue-700 text-center items-center mx-auto"><a href="" class="text-center">Forget your password ?</a></span>
        </form>
        </div>

        <div class="about mt-12 h-full">
        
            <div class="skill p-8">
                <label for="" class="text-lg font-semibold">Skills</label>
                <div class=" flex justify-start gap-3 my-2 ml-7">
                    <h1 class="bg-blue-100 p-2 px-5 rounded-lg font-medium text-sm text-black">C++</h1>
                    <h1 class="bg-blue-100 p-2 px-5 rounded-lg font-medium text-sm text-black">Java</h1>

                </div>
                <h3 class="text-sm ml-7 my-3 text-blue-600 font-medium"><a href="" class="">Add new skills</a></h3>
                <div class="skills hidden">
            <select name="skill" size="3" multiple="multiple" tabindex="1">
            <option value="C++">C++</option>
            <option value="Java">Java</option>
            <option value="phython">Phython</option>
            <option value="node">Node-js</option>
          </select>
                </div>
            </div>
            <hr>
            <div class="Education p-8">
                <label for="" class="text-lg font-semibold">Education</label>
                <div class=" flex justify-start gap-3 my-2 ml-7">
                    <h1 class="bg-blue-100 p-2 px-5 rounded-lg font-medium text-sm text-black">+2</h1>
                    <h1 class="bg-blue-100 p-2 px-5 rounded-lg font-medium text-sm text-black">BCA</h1>

                </div>
                <h3 class="text-sm ml-7 my-3 text-blue-600 font-medium"><a href="">Add new education</a></h3>
                <input type="text" class="w-2/4 ml-20 hidden">
            </div>
            <hr>
            <div class="favourite p-8">
                <label for="" class="text-lg font-semibold">Favourite</label>
                <div class=" flex justify-start gap-3 my-2 ml-7">
                    <h1 class="bg-blue-100 p-2 px-5 rounded-lg font-medium text-sm text-black">Food</h1>
                    <h1 class="bg-blue-100 p-2 px-5 rounded-lg font-medium text-sm text-black">TT</h1>

                </div>
                <h3 class="text-sm ml-7 my-3 text-blue-600 font-medium"><a href="">Add new favourite</a></h3>
                <input type="text" class="w-2/4 ml-12 hidden">
            </div>
        </div>
       

    </div>
</aside>
        
    </div>
</main>