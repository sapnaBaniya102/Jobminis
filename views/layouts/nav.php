<?php
include '../layouts/header.php'
?>
<header>
        <div class=" sticky top-0 bg-transparent ">
            <div class="header_wrapper flex justify-between">
                <div class="logo w-48 -mt-7 ml-12">
<img src="../../public/logo.png" alt="">
                </div>
                <div class="navbar">
                    <ul class="flex justify-evenly space-x-5 mt-5 text-lg font-semibold">
                        <li class="p-2 hover:text-teal-500 ">Home</li>
                        <li class="p-2 hover:text-teal-500">Find Jobs</li>
                        <li class="p-2 hover:text-teal-500">Blog</li>
                        <li class="p-2 hover:text-teal-500">Companies</li>
                        <li class="p-2 hover:text-teal-500">About Us</li>
                        <li class="p-2 hover:text-teal-500">Contact</li>
                    </ul>
                </div>
                <div class="account flex space-x-3 mt-5">
                   <a href="">
                       <div class="post_job bg-blue-900 hover:bg-white hover:border hover:border-blue-900 hover:text-blue-900 text-white p-2 px-4 rounded-full">
                           <span>Post a Job</span>
                       </div>
                   </a>
                   <a href="">
                    <div class="sign_in border border-blue-900 rounded-full p-2 px-4 hover:bg-white hover:text-blue-900">
                        <span>Sign In</span>
                    </div>
                </a>
                </div>
            </div>

        </div>
    </header>