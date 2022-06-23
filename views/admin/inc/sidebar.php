<?php
include 'header.php'
?>
 <!-- start sidebar -->
 <div id="sideBar" class=" flex flex-col flex-wrap bg-white border-r border-gray-300 p-6 flex-none w-64 md:-ml-64 md:fixed md:top-0 md:z-30 md:h-screen md:shadow-xl animated faster">
    

    <!-- sidebar content -->
    <div class="flex flex-col">

      <!-- sidebar toggle -->
      <div class="text-right hidden md:block mb-4">
        <button id="sideBarHideBtn">
          <i class="fad fa-times-circle"></i>
        </button>
      </div>
      <!-- end sidebar toggle -->

      <p class="uppercase text-xs text-gray-600 mb-4 tracking-wider">homes</p>

      <!-- link -->
      <a href="../app/dashboard.php" class="mb-3 capitalize font-medium text-sm hover:text-teal-600 transition ease-in-out duration-500">
        <i class="fad fa-chart-pie text-xs mr-2"></i>                
    dashboard
      </a>
      <!-- end link -->

      <p class="uppercase text-xs text-gray-600 mb-4 mt-4 tracking-wider">Elements</p>

      <!-- link -->
      <a href="../app/uploadfile.php" class="mb-3 capitalize font-medium text-sm hover:text-teal-600 transition ease-in-out duration-500">
      <i class="fad fa-folder-open text-xs mr-2"></i>
        File Manager
      </a>
      <!-- end link -->

      <!-- link -->
      <a href="#" class="mb-3 capitalize font-medium text-sm hover:text-teal-600 transition ease-in-out duration-500">
        <i class="fad fa-comments text-xs mr-2"></i>
       Administrator
      </a>
      <!-- end link -->

      <!-- link -->
      <a href="#" class="mb-3 capitalize font-medium text-sm hover:text-teal-600 transition ease-in-out duration-500">
      <i class="fad fa-shield-check text-xs mr-2"></i>
        Slider
      </a>
      <!-- end link -->

      <!-- link -->
      <a href="#" class="mb-3 capitalize font-medium text-sm hover:text-teal-600 transition ease-in-out duration-500">
        <i class="fad fa-calendar-edit text-xs mr-2"></i>
        About us
      </a>
      <!-- end link -->

      <!-- link -->
      <a href="#" class="mb-3 capitalize font-medium text-sm hover:text-teal-600 transition ease-in-out duration-500">
      <i class="fad fa-cheese-swiss text-xs mr-2"></i>
        Siteconfig
      </a>
      <!-- end link -->
      
      
     
      

    </div>
    <!-- end sidebar content -->

  </div>
  <!-- end sidbar -->