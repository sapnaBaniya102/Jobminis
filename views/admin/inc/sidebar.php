<?php
include 'header.php'
?>
<!-- start sidebar -->
<div id="sideBar" class="relative flex flex-col flex-wrap bg-white border-r border-gray-300 p-6 flex-none w-64 md:-ml-64 md:fixed md:top-0 md:z-30 md:h-screen md:shadow-xl animated faster">


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
    <ol>

      <a href="../app/uploadfile.php" class="mb-3 capitalize font-medium text-sm hover:text-teal-600 transition ease-in-out duration-500">
        <i class="fad fa-folder-open text-xs mr-2"></i>
        File Manager
      </a>
      <ul >
              <li class="nav-item">
                <a href="uploadfile.php" >
                  <p>Uploadfile</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="managefile.php" >
                  <p>Manage Files</p>
                </a>
              </li>
            </ul>
    </ol>
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
    <ol>

      <a href="#" class="mb-3 capitalize font-medium text-sm hover:text-teal-600 transition ease-in-out duration-500">
        <i class="fad fa-cheese-swiss text-xs mr-2"></i>
        Siteconfig
      </a>
      <ul >
              <li class="nav-item">
                <a href="addsiteconfig.php" >
                  <p>Add Siteconfig</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="managesiteconfig.php" >
                  <p>Manage Siteconfig</p>
                </a>
              </li>
            </ul>
    </ol>
    <ol>

<a href="#" class="mb-3 capitalize font-medium text-sm hover:text-teal-600 transition ease-in-out duration-500">
  <i class="fad fa-cheese-swiss text-xs mr-2"></i>
  Slider
</a>
<ul >
        <li class="nav-item">
          <a href="addslider.php" >
            <p>Add Slider</p>
          </a>
        </li>
        <li class="nav-item">
          <a href="manageslider.php" >
            <p>Manage Slider</p>
          </a>
        </li>
      </ul>
</ol>
    

    <li>
         <div class="dropdown mt-2 relative md:static">

             <button class="menu-btn  flex flex-wrap items-center  justify-center w-full rounded-md border border-gray-300 shadow-sm px-4 py-2 bg-white text-sm font-medium text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-gray-100 focus:ring-indigo-500">
                 <div class="rounded-full">
                 <i class="fas fa-fw fa-user"></i>
                 </div>

                 <div class="ml-2 capitalize flex ">
                     <h1 class="text-sm text-gray-800 font-semibold m-0 p-0 leading-none">Users</h1>
                     <i class="fad fa-chevron-down ml-2 text-xs leading-none"></i>
                 </div>
             </button>


             <div class="text-gray-500 menu hidden md:mt-10 md:w-full rounded bg-white shadow-md  z-20 right-0 w-full py-2 animated faster">

                 <!-- item -->
                 <a class="px-4 py-2 block capitalize font-medium text-sm tracking-wide bg-white hover:bg-gray-200 hover:text-gray-900 transition-all duration-300 ease-in-out" href="createuser.php">
                    Create User
                     
                 </a>
                 <!-- end item -->

                 <hr>

                 <!-- item -->
                 <a class="px-4 py-2 block capitalize font-medium text-sm tracking-wide bg-white hover:bg-gray-200 hover:text-gray-900 transition-all duration-300 ease-in-out" href="manageuser.php">
                   Manage User
                 </a>
                 <!-- end item -->

             </div>
         </div>
     </li>



  </div>
  <!-- end sidebar content -->

</div>
<!-- end sidbar -->