<?php
require('../../connection/config.php');
require('../inc/header.php');

?>



<!-- strat wrapper -->
<div class="h-1/2 flex w-full justify-between absolute right-0 flex-row flex-wrap">
  <!-- start sidebar -->
  <div class="w-1/4">
  <?php
 require('../inc/sidebar.php');
  ?>
  </div>
  <!-- end sidbar -->
  <!-- strat content -->
  <div class="bg-gray-100 w-3/4 flex-auto pr-8 md:mt-16">


    <!-- General Report -->
    <div class="grid grid-cols-4 gap-6 xl:grid-cols-1">


      <!-- card -->
      <div class="report-card">
        <div class="card">
          <div class="card-body flex flex-col">

            <!-- top -->
            <div class="flex flex-row justify-between items-center">
              <div class="h6 text-indigo-700 fad fa-shopping-cart"></div>
              <span class="rounded-full text-white badge bg-teal-400 text-xs">
                12%
                <i class="fal fa-chevron-up ml-1"></i>
              </span>
            </div>
            <!-- end top -->

            <!-- bottom -->
            <div class="mt-8">
              <h1 class="h5 num-4"></h1>
              <p>items sales</p>
            </div>
            <!-- end bottom -->

          </div>
        </div>
        <div class="footer bg-white p-1 mx-4 border border-t-0 rounded rounded-t-none"></div>
      </div>
      <!-- end card -->


      <!-- card -->
      <div class="report-card">
        <div class="card">
          <div class="card-body flex flex-col">

            <!-- top -->
            <div class="flex flex-row justify-between items-center">
              <div class="h6 text-red-700 fad fa-store"></div>
              <span class="rounded-full text-white badge bg-red-400 text-xs">
                6%
                <i class="fal fa-chevron-down ml-1"></i>
              </span>
            </div>
            <!-- end top -->

            <!-- bottom -->
            <div class="mt-8">
              <h1 class="h5 num-4"></h1>
              <p>new orders</p>
            </div>
            <!-- end bottom -->

          </div>
        </div>
        <div class="footer bg-white p-1 mx-4 border border-t-0 rounded rounded-t-none"></div>
      </div>
      <!-- end card -->


      <!-- card -->
      <div class="report-card">
        <div class="card">
          <div class="card-body flex flex-col">

            <!-- top -->
            <div class="flex flex-row justify-between items-center">
              <div class="h6 text-yellow-600 fad fa-sitemap"></div>
              <span class="rounded-full text-white badge bg-teal-400 text-xs">
                72%
                <i class="fal fa-chevron-up ml-1"></i>
              </span>
            </div>
            <!-- end top -->

            <!-- bottom -->
            <div class="mt-8">
              <h1 class="h5 num-4"></h1>
              <p>total Products</p>
            </div>
            <!-- end bottom -->

          </div>
        </div>
        <div class="footer bg-white p-1 mx-4 border border-t-0 rounded rounded-t-none"></div>
      </div>
      <!-- end card -->


      <!-- card -->
      <div class="report-card">
        <div class="card">
          <div class="card-body flex flex-col">

            <!-- top -->
            <div class="flex flex-row justify-between items-center">
              <div class="h6 text-green-700 fad fa-users"></div>
              <span class="rounded-full text-white badge bg-teal-400 text-xs">
                150%
                <i class="fal fa-chevron-up ml-1"></i>
              </span>
            </div>
            <!-- end top -->

            <!-- bottom -->
            <div class="mt-8">
              <h1 class="h5 num-4"></h1>
              <p>new Visitor</p>
            </div>
            <!-- end bottom -->

          </div>
        </div>
        <div class="footer bg-white p-1 mx-4 border border-t-0 rounded rounded-t-none"></div>
      </div>
      <!-- end card -->


    </div>
    <!-- End General Report -->

    <!-- strat Analytics -->
    <div class="mt-6 grid grid-cols-2 gap-6 xl:grid-cols-1">

      <!-- update section -->
      <div class="card bg-teal-400 border-teal-400 shadow-md text-white">
        <div class="card-body flex flex-row">

          <!-- image -->
          <div class="img-wrapper w-40 h-40 flex justify-center items-center">
            <img src="../../../img/happy.svg" alt="img title">
          </div>
          <!-- end image -->

          <!-- info -->
          <div class="py-2 ml-10">
            <h1 class="h6">Good Job, Mohamed!</h1>
            <p class="text-white text-xs">You've finished all of your tasks for this week.</p>

            <ul class="mt-4">
              <li class="text-sm font-light"><i class="fad fa-check-double mr-2 mb-2"></i> Finish Dashboard Design</li>
              <li class="text-sm font-light"><i class="fad fa-check-double mr-2 mb-2"></i> Fix Issue #74</li>
              <li class="text-sm font-light"><i class="fad fa-check-double mr-2"></i> Publish version 1.0.6</li>
            </ul>
          </div>
          <!-- end info -->

        </div>
      </div>
      <!-- end update section -->

      <!-- carts -->
      <div class="flex flex-col">

        <!-- alert -->
        <div class="alert alert-dark mb-6">
          Hi! Wait A Minute . . . . . . Follow Me On Twitter
          <a class="ml-2" target="_blank" href="https://twitter.com/MohamedSaid__">@moesaid</a>
        </div>
        <!-- end alert -->

        <!-- charts -->
        <div class="grid grid-cols-2 gap-6 h-full">

          <div class="card">
            <div class="py-3 px-4 flex flex-row justify-between">
              <h1 class="h6">
                <span class="num-4"></span>k
                <p>page view</p>
              </h1>

              <div class="bg-teal-200 text-teal-700 border-teal-300 border w-10 h-10 rounded-full flex justify-center items-center">
                <i class="fad fa-eye"></i>
              </div>
            </div>
            <div class="analytics_1"></div>
          </div>

          <div class="card">
            <div class="py-3 px-4 flex flex-row justify-between">
              <h1 class="h6">
                <span class="num-2"></span>k
                <p>Unique Users</p>
              </h1>

              <div class="bg-indigo-200 text-indigo-700 border-indigo-300 border w-10 h-10 rounded-full flex justify-center items-center">
                <i class="fad fa-users-crown"></i>
              </div>
            </div>
            <div class="analytics_1"></div>
          </div>

        </div>
        <!-- charts    -->

      </div>
      <!-- end charts -->


    </div>
    <!-- end Analytics -->



    <!-- start numbers -->
    <div class="grid grid-cols-5 gap-6 xl:grid-cols-2">

      <!-- card -->
      <div class="card mt-6">
        <div class="card-body flex items-center">

          <div class="px-3 py-2 rounded bg-indigo-600 text-white mr-3">
            <i class="fad fa-wallet"></i>
          </div>

          <div class="flex flex-col">
            <h1 class="font-semibold"><span class="num-2"></span> Sales</h1>
            <p class="text-xs"><span class="num-2"></span> payments</p>
          </div>

        </div>
      </div>
      <!-- end card -->

      <!-- card -->
      <div class="card mt-6">
        <div class="card-body flex items-center">

          <div class="px-3 py-2 rounded bg-green-600 text-white mr-3">
            <i class="fad fa-shopping-cart"></i>
          </div>

          <div class="flex flex-col">
            <h1 class="font-semibold"><span class="num-2"></span> Orders</h1>
            <p class="text-xs"><span class="num-2"></span> items</p>
          </div>

        </div>
      </div>
      <!-- end card -->

      <!-- card -->
      <div class="card mt-6 xl:mt-1">
        <div class="card-body flex items-center">

          <div class="px-3 py-2 rounded bg-yellow-600 text-white mr-3">
            <i class="fad fa-blog"></i>
          </div>

          <div class="flex flex-col">
            <h1 class="font-semibold"><span class="num-2"></span> posts</h1>
            <p class="text-xs"><span class="num-2"></span> active</p>
          </div>

        </div>
      </div>
      <!-- end card -->

      <!-- card -->
      <div class="card mt-6 xl:mt-1">
        <div class="card-body flex items-center">

          <div class="px-3 py-2 rounded bg-red-600 text-white mr-3">
            <i class="fad fa-comments"></i>
          </div>

          <div class="flex flex-col">
            <h1 class="font-semibold"><span class="num-2"></span> comments</h1>
            <p class="text-xs"><span class="num-2"></span> approved</p>
          </div>

        </div>
      </div>
      <!-- end card -->

      <!-- card -->
      <div class="card mt-6 xl:mt-1 xl:col-span-2">
        <div class="card-body flex items-center">

          <div class="px-3 py-2 rounded bg-pink-600 text-white mr-3">
            <i class="fad fa-user"></i>
          </div>

          <div class="flex flex-col">
            <h1 class="font-semibold"><span class="num-2"></span> memebrs</h1>
            <p class="text-xs"><span class="num-2"></span> online</p>
          </div>

        </div>
      </div>
      <!-- end card -->

    </div>
    <!-- end nmbers -->




  </div>
  <!-- end content -->

</div>
<!-- end wrapper -->

