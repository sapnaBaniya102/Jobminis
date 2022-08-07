<?php
require('../../connection/config.php');
require('../inc/header.php');
require('../inc/navbar.php');
?>


<main>
    <div class="profile-wrapper mt-36 w-10/12 mx-auto">
        <div class="background-image">
            <div class="image w-full h-56 bg-gradient-to-br rounded-tl-3xl from-teal-100 to-red-200">
                <img src="" alt="">
            </div>
            <div class="camera absolute right-56 -mt-16 bg-red-300  rounded-md opacity-30 ring-offset-1 ring-1 ring-white">
           <button><i class="fa-solid fa-camera text-2xl text-white p-1 px-2 focus:ring-offset-1 focus:ring-1 focus:ring-white"></i></button> 
            </div>
        </div>
        <div class="profile-image w-36 h-36 bg-slate-300 rounded-full absolute  ml-20 -mt-12 ring-offset-2 ring-2 ring-white">
            <img src="" alt="">
        </div>
        <div class="info bg-white">
        <form action="#" method="post" class="pt-8">
            <div class="info-header w-4/6 mx-auto flex justify-between">
            <div class="title ml-24">
                <h1 class="text-3xl font-semibold mb-2">Profile</h1>
                <span class="text-gray-500 font-medium">Update you photo and personal details</span>
            </div>
            <div class="button space-x-1">
                <button class="border border-gray-400 p-2 px-4 rounded-xl hover:bg-teal-700 hover:text-white font-semibold bg-white">Cancel</button>
                <button class="border border-gray-400 p-2 px-4 rounded-xl hover:bg-teal-700 hover:text-white font-semibold bg-white">Update</button>
            </div>
            </div>
            <div class="info-body mt-24 w-10/12 mx-auto mb-10 pb-5">
                
                    <div class="name w-full flex justify-between py-5 pb-10 border-b border-b-gray-100">
                        <div class="first space-x-4">
                            <label for="firstname" class="text-gray-600 text-lg font-semibold text-center">First Name</label>
                            <input type="text" name="firstname" class="border border-gray-300 rounded-xl p-3" required>
                        </div>
                        <div class="middle space-x-4">
                            <label for="middlename" class="text-gray-600 text-lg font-semibold text-center">Middle Name</label>
                            <input type="text" name="middlename" class="border border-gray-300 rounded-xl p-3" >
                        </div>
                        <div class="last space-x-4">
                            <label for="lastname" class="text-gray-600 text-lg font-semibold text-center">Last Name</label>
                            <input type="text" name="lastname" class="border border-gray-300 rounded-xl p-3" required>
                        </div>

                    </div>
                    <div class="username w-full space-x-8  flex justify-start py-7 pb-10 border-b border-b-gray-100">
                   
                            <label for="username" class="text-gray-600 text-lg font-semibold text-center">User Name</label>
                            <input type="text" name="username" class="border w-2/4 border-gray-300 rounded-xl p-3" required>
                        
                    </div>
                    <div class="email w-full space-x-20 flex justify-start pb-10 py-5 border-b border-b-gray-100">
                            <label for="email" class="text-gray-600 text-lg font-semibold text-center">Email</label>
                            <input type="email" name="email" class="border w-2/4 border-gray-300 rounded-xl p-3" > 
                        
                    </div>
                    <div class="address w-full flex justify-between pb-10 py-5 border-b border-b-gray-100">
                    <div class="country space-y-3">
                            <label for="country" class="text-gray-600 text-lg font-semibold text-center">Country</label>
                            <input type="text" name="country"  class="border border-gray-300 rounded-xl p-3"required>
                        </div>
                        <div class="state space-y-3">
                            <label for="state" class="text-gray-600 text-lg font-semibold text-center">State</label>
                            <input type="text" name="state" re class="border border-gray-300 rounded-xl p-3"quired>
                        </div>
                        <div class="city space-y-3">
                            <label for="city" class="text-gray-600 text-lg font-semibold text-center">City</label>
                            <input type="text" name="city" req class="border border-gray-300 rounded-xl p-3"uired>
                        </div>
                        <div class="street space-y-3">
                            <label for="street" class="text-gray-600 text-lg font-semibold text-center">Street</label>
                            <input type="text" name="street" r class="border border-gray-300 rounded-xl p-3"equired>
                        </div>
                    </div>
                    

                    <div class="website w-full flex justify-start space-x-16 pb-10 py-5 border-b border-b-gray-100">
                    
                            <label for="website" class="text-gray-600 text-lg font-semibold text-center">Website</label>
                            <input type="text" name="website"  class="border w-2/4 border-gray-300 rounded-xl p-3">
                        
                  
                    </div>
                    <div class="github w-full flex justify-start space-x-10 pb-10 py-5 border-b border-b-gray-100">
                    <label for="github" class="text-gray-600 text-lg font-semibold text-center">Github Link</label>
                            <input type="text" name="github" class="border w-2/4 border-gray-300 rounded-xl p-3"> 
                        
                    </div>
                    <div class="linkedin w-full flex justify-start space-x-16 pb-10 py-5 border-b border-b-gray-100">
                    <label for="linkedin" class="text-gray-600 text-lg font-semibold text-center">Linkedin</label>
                            <input type="text" name="linkedin" class="border w-2/4 border-gray-300 rounded-xl p-3" >
                        
                    </div>
                    <div class="bio w-full flex justify-start space-x-16 pb-10 py-5">
                    <label for="bio" class="text-gray-600 text-lg font-semibold text-center">You bio</label>
                    <textarea name="bio" id="" cols="20" rows="5" class="w-2/4 rounded-xl border border-gray-200"></textarea>
                            
                    </div>
             
            </div>
            </form>
        </div>
    </div>
</main>