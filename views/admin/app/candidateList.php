<?php
include '../inc/header.php';
require('../inc/navbar.php');
?>


<!-- strat wrapper -->
<div class="h-full flex flex-row flex-wrap bg-white">
  <!-- start sidebar -->
  <?php
  require('../inc/sidebar.php')
  ?>
  <!-- end sidbar -->
<div class="candidate-list-wrapper bg-white">
    <div class="candidate-list-header w-full bg-teal-50 p-24 mt-8">             
        <h1 class="text-5xl font-bold mb-4">Search Candidate</h1>
        <span class="text-lg text-gray-600">Work with the most suitable candidates in the world</span>
        <form  class="mt-10 bg-white rounded-full p-3 grid grid-cols-4 gap-3">
            <input type="text" placeholder="Candidate Name" class="p-2 border-r ">
            <input type="text" placeholder="Location" class="border-r p-2">
            <select name="post" id="">
                <option value="All industries" selected>All industries</option>
                <option value="Project Manager" >Project Manager</option>
                <option value="Finance" >Finance</option>
                <option value="Human Resource" >Human Resource</option>
            </select>
            <button type="submit" name="submit" class="bg-blue-800 mx-5 rounded-full  text-white font-semibold">Find Candidate</button>
        </form>
    </div>
    <div class="list p-20">
    <div class="list-header">
                    <h1 class="text-2xl font-semibold text-gray-600">Showing <span class="text-black"> 1523 </span> companies</h1>
                </div>
    </div>
    <div class="list-body my-3 mx-20 grid grid-cols-3 gap-5">
        <div class="candidate-card hover:shadow hover:shadow-gray-500 border border-gray-300 space-y-2 text-center rounded-3xl">
        <div class="image">
            <img src="../../../public/download.jpeg" class=" rounded-full w-24 h-24 mx-auto my-6 " alt="">
        </div>
        <h1 class="font-bold text-xl mt-3 ">Scott Goodwin</h1>
        <span class="text-sm">Marketing Expert</span>
        <div class="location space-x-2 flex justify-center pt-4">
        <i class="fa-solid fa-earth-americas"></i>
        <h1 class="text-base font-medium -mt-1">Los Angles, CA</h1>
        </div>
        <div class="py-6 pb-8 ">
        <a href="#" class="text-lg text-blue-600 hover:text-blue-700 font-normal">View Profile  <i class="fa-solid fa-chevron-right text-sm font-semibold"></i></a>
        </div>
        </div>

        <div class="candidate-card hover:shadow hover:shadow-gray-500 border border-gray-300 space-y-2 text-center rounded-3xl">
        <div class="image">
            <img src="../../../public/download.jpeg" class=" rounded-full w-24 h-24 mx-auto my-6 " alt="">
        </div>
        <h1 class="font-bold text-xl mt-3 ">Scott Goodwin</h1>
        <span class="text-sm">Marketing Expert</span>
        <div class="location space-x-2 flex justify-center pt-4">
        <i class="fa-solid fa-earth-americas"></i>
        <h1 class="text-base font-medium -mt-1">Los Angles, CA</h1>
        </div>
        <div class="py-6 pb-8 ">
        <a href="#" class="text-lg text-blue-600 hover:text-blue-700 font-normal">View Profile  <i class="fa-solid fa-chevron-right text-sm font-semibold"></i></a>
        </div>
        </div>

        <div class="candidate-card hover:shadow hover:shadow-gray-500 border border-gray-300 space-y-2 text-center rounded-3xl">
        <div class="image">
            <img src="../../../public/download.jpeg" class=" rounded-full w-24 h-24 mx-auto my-6 " alt="">
        </div>
        <h1 class="font-bold text-xl mt-3 ">Scott Goodwin</h1>
        <span class="text-sm">Marketing Expert</span>
        <div class="location space-x-2 flex justify-center pt-4">
        <i class="fa-solid fa-earth-americas"></i>
        <h1 class="text-base font-medium -mt-1">Los Angles, CA</h1>
        </div>
        <div class="py-6 pb-8 ">
        <a href="#" class="text-lg text-blue-600 hover:text-blue-700 font-normal">View Profile  <i class="fa-solid fa-chevron-right text-sm font-semibold"></i></a>
        </div>
        </div>

        <div class="candidate-card hover:shadow hover:shadow-gray-500 border border-gray-300 space-y-2 text-center rounded-3xl">
        <div class="image">
            <img src="../../../public/download.jpeg" class=" rounded-full w-24 h-24 mx-auto my-6 " alt="">
        </div>
        <h1 class="font-bold text-xl mt-3 ">Scott Goodwin</h1>
        <span class="text-sm">Marketing Expert</span>
        <div class="location space-x-2 flex justify-center pt-4">
        <i class="fa-solid fa-earth-americas"></i>
        <h1 class="text-base font-medium -mt-1">Los Angles, CA</h1>
        </div>
        <div class="py-6 pb-8 ">
        <a href="#" class="text-lg text-blue-600 hover:text-blue-700 font-normal">View Profile  <i class="fa-solid fa-chevron-right text-sm font-semibold"></i></a>
        </div>
        </div>

        <div class="candidate-card hover:shadow hover:shadow-gray-500 border border-gray-300 space-y-2 text-center rounded-3xl">
        <div class="image">
            <img src="../../../public/download.jpeg" class=" rounded-full w-24 h-24 mx-auto my-6 " alt="">
        </div>
        <h1 class="font-bold text-xl mt-3 ">Scott Goodwin</h1>
        <span class="text-sm">Marketing Expert</span>
        <div class="location space-x-2 flex justify-center pt-4">
        <i class="fa-solid fa-earth-americas"></i>
        <h1 class="text-base font-medium -mt-1">Los Angles, CA</h1>
        </div>
        <div class="py-6 pb-8 ">
        <a href="#" class="text-lg text-blue-600 hover:text-blue-700 font-normal">View Profile  <i class="fa-solid fa-chevron-right text-sm font-semibold"></i></a>
        </div>
        </div>
       
        

    </div>
</div>
</div>
<?php
include '../inc/footer.php'
?>