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
    <main>
    <section class="">
        <div class="main-content py-16 bg-teal-50">
            <div class="container_wrapper grid grid-cols-2 mt-20">
                <div class="search_wrapper col-span-1 w-full space-x-7">
                    <div class="search_content space-y-8 text-center">
                    <div class="content_text space-y-4 ml-32">
                        <h1 class="text-6xl font-extrabold font-serif">Find the perfect</h1>
                        <div class="flex space-x-6">
                        <span class="text-6xl font-extrabold font-serif text-teal-600">Job</span>
                        <h1 class="text-6xl font-extrabold font-serif">for you</h1>
                    </div>
                    </div>
                    <h2 class="text-gray-600 text-2xl font-extralight font-serif">Search your career opportunity here</h2>
                    <div class="search_area p-2 w-3/4 rounded-full bg-white shadow-lg shadow-gray-500 mx-auto">
                        <input type="text" class="p-3 w-5/6 bg-white" placeholder="Job Title or Keyword">
                        <i class="fa-solid fa-magnifying-glass text-white p-4 rounded-full bg-teal-700"></i>
                    </div>
                    <div class="popular_search text-left ml-32 space-y-3">
                        <h2 class="text-xl font-semibold font-serif">Popular Searches</h2>
                        <ul class="flex space-x-3">
                            <li class="bg-teal-100 px-3 hover:text-white hover:bg-teal-700 text-teal-600 p-2 rounded-full">Work from home</li>
                            <li class="bg-teal-100 px-3 hover:text-white hover:bg-teal-700 text-teal-600 p-2 rounded-full">IT</li>
                            <li class="bg-teal-100 px-3 hover:text-white hover:bg-teal-700 text-teal-600 p-2 rounded-full">Finance</li>
                            <li class="bg-teal-100 px-3 hover:text-white hover:bg-teal-700 text-teal-600 p-2 rounded-full">Retail</li>
    
    
                        </ul>
                    </div>
                </div>
               
                </div>
                <div class="photo_icon col-span-1 w-full pl-48">
                    <div class="photo_content absolute top-28 w-1/5 rounded-3xl bg-gradient-to-b from-zinc-800 z-20 to-gray-200 h-3/6">
              <img src="../../public/image-removebg-preview (5).png" class="py-16" alt="" width="1000">
                    </div>
                    <div class="div1 w-1/5 origin-bottom-left z-10 rotate-6 rounded-3xl h-3/6 bg-blue-900 absolute top-28"></div>
                    <div class="div2 w-1/5 origin-bottom-left rotate-12 rounded-3xl h-3/6 bg-teal-700 absolute top-28"></div>
                </div>

            </div>
        </div>
    </section>
    
    <!-- search by category started-->
    <section>
        <div class="search-wrapper text-center">
            <div class="search-title my-20 bg-white">
                <h1 class="text-5xl font-extrabold mb-4">Search by Category</h1>
                <span class="font-serif text-gray-500 font-medium text-xl">Search your career oppourtunity here</span>
            </div>
            <div class="search-container mx-10 grid grid-cols-4 space-x-7">
                <div class="search-card bg-blue-50 p-8 rounded-3xl col-span-1 ">
                    <div class="job-logo w-24 mx-auto rounded-3xl bg-white">

                        <i class="fa-solid text-black text-center text-4xl p-6  fa-business-time"></i>
                    </div>
                    <div class="job-title text-lg font-semibold">
                        <h2>Business</h2>
                    </div>
                    <div class="total-job text-sm font-extralight my-10">
                        <span>133 jobs available</span>
                    </div>
                </div>
                <div class="search-card bg-blue-50 p-8 rounded-3xl col-span-1 ">
                    <div class="job-logo w-24 mx-auto rounded-3xl bg-white">

                        <i class="fa-solid fa-business-time text-black text-center text-4xl p-6"></i>
                    </div>
                    <div class="job-title text-lg font-semibold">
                        <h2>Business</h2>
                    </div>
                    <div class="total-job text-sm font-extralight my-10">
                        <span>133 jobs available</span>
                    </div>
                </div>
                <div class="search-card bg-blue-50 p-8 rounded-3xl col-span-1 ">
                    <div class="job-logo w-24 mx-auto rounded-3xl bg-white">

                        <i class="fa-solid fa-business-time text-black text-center text-4xl p-6"></i>
                    </div>
                    <div class="job-title text-lg font-semibold">
                        <h2>Business</h2>
                    </div>
                    <div class="total-job text-sm font-extralight my-10">
                        <span>133 jobs available</span>
                    </div>
                </div>
                <div class="search-card bg-blue-50 p-8 rounded-3xl col-span-1 ">
                    <div class="job-logo w-24 mx-auto rounded-3xl bg-white">

                        <i class="fa-solid fa-business-time text-black text-center text-4xl p-6"></i>
                    </div>
                    <div class="job-title text-lg font-semibold">
                        <h2>Business</h2>
                    </div>
                    <div class="total-job text-sm font-extralight my-10">
                        <span>133 jobs available</span>
                    </div>
                </div>
                
            </div>
        </div>
        <div class="search-button mx-auto mt-10 p-3 flex space-x-5 hover:w-52 hover:space-x-10 bg-teal-700 rounded-3xl w-48 ">
            <button class=" rounded-3xl text-white text-lg font-semibold text-center">All Categories</button>
            <i class="fa-solid fa-greater-than text-md mt-2 font-semibold text-white"></i>
        </div>
    </section>
    <!-- end of search by category -->

    <!-- beginning of feature job -->
    <section>
        <div class="search-wrapper my-12 text-center bg-amber-50">
            <div class="search-title pt-24 pb-20 ">
                <h1 class="text-5xl font-extrabold mb-4">Featured Job Offer</h1>
                <span class="font-serif text-gray-500 font-medium text-lg">Search your career oppourtunity here</span>
            </div>
            <div class="job-container mx-10 py-9 grid grid-cols-2 gap-9">
                <div class="job-card group bg-white p-8 rounded-3xl col-span-1 space-y-6 ">
                    <div class="job-title flex space-x-4">
                        <i class="fa-solid fa-bullhorn bg-teal-50 rounded-lg group-hover:bg-teal-600 group-hover:text-white p-2"></i>
                        <h1 class="font-light group-hover:text-teal-600 text-md">Marketing and Communication</h1>
                    </div>
                    <div class="job-position font-semibold">
                        <h1 class="text-lg text-left">Senior Manager</h1>
                    </div>
                    <div class="job-place flex space-x-6">
                        <div class="flex space-x-3">
                        <i class="fa-solid fa-earth-asia"></i>
                        <h1 class="text-sm font-semibold text-left">San Francisco, CA</h1>
                        </div>
                        <span class="text-sm font-light">Full Time</span>
                        
                    </div>
                    <div class="job-time flex space-x-6">
                        
                        <span class="text-sm text-gray-500 font-light">3 days ago</span>
                        <div class="company-logo">

                        </div>
                        
                    </div>
                </div>
                <div class="job-card group bg-white p-8 rounded-3xl col-span-1 space-y-6 ">
                    <div class="job-title flex space-x-4">
                        <i class="fa-solid fa-bullhorn bg-teal-50 rounded-lg group-hover:bg-teal-600 group-hover:text-white p-2"></i>
                        <h1 class="font-light group-hover:text-teal-600 text-md">software Developer</h1>
                    </div>
                    <div class="job-position font-semibold">
                        <h1 class="text-lg text-left">Senior Manager</h1>
                    </div>
                    <div class="job-place flex space-x-6">
                        <div class="flex space-x-3">
                        <i class="fa-solid fa-earth-asia"></i>
                        <h1 class="text-sm font-semibold text-left">San Francisco, CA</h1>
                        </div>
                        <span class="text-sm font-light">Full Time</span>
                        
                    </div>
                    <div class="job-time flex space-x-6">
                        
                        <span class="text-sm text-gray-500 font-light">3 days ago</span>
                        <div class="company-logo">

                        </div>
                        
                    </div>
                </div>
                <div class="job-card group bg-white p-8 rounded-3xl col-span-1 space-y-6 ">
                    <div class="job-title flex space-x-4">
                        <i class="fa-solid fa-bullhorn bg-teal-50 rounded-lg group-hover:bg-teal-600 group-hover:text-white p-2"></i>
                        <h1 class="font-light group-hover:text-teal-600 text-md">Scientist</h1>
                    </div>
                    <div class="job-position font-semibold">
                        <h1 class="text-lg text-left">Senior Researcher</h1>
                    </div>
                    <div class="job-place flex space-x-6">
                        <div class="flex space-x-3">
                        <i class="fa-solid fa-earth-asia"></i>
                        <h1 class="text-sm font-semibold text-left">San Francisco, CA</h1>
                        </div>
                        <span class="text-sm font-light">Part Time</span>
                        
                    </div>
                    <div class="job-time flex space-x-6">
                        
                        <span class="text-sm text-gray-500 font-light">3 days ago</span>
                        <div class="company-logo">

                        </div>
                        
                    </div>
                </div>
                <div class="job-card group bg-white p-8 rounded-3xl col-span-1 space-y-6 ">
                    <div class="job-title flex space-x-4">
                        <i class="fa-solid fa-bullhorn bg-teal-50 rounded-lg group-hover:bg-teal-600 group-hover:text-white p-2"></i>
                        <h1 class="font-light group-hover:text-teal-600 text-md">Marketing and Communication</h1>
                    </div>
                    <div class="job-position font-semibold">
                        <h1 class="text-lg text-left">Senior Manager</h1>
                    </div>
                    <div class="job-place flex space-x-6">
                        <div class="flex space-x-3">
                        <i class="fa-solid fa-earth-asia"></i>
                        <h1 class="text-sm font-semibold text-left">San Francisco, CA</h1>
                        </div>
                        <span class="text-sm font-light">Full Time</span>
                        
                    </div>
                    <div class="job-time flex space-x-6">
                        
                        <span class="text-sm text-gray-500 font-light">3 days ago</span>
                        <div class="company-logo">

                        </div>
                        
                    </div>
                </div>
              
            </div>
        </div>
        <div class="search-button mx-auto mt-20 mb-10 p-3 flex hover:w-52 hover:space-x-10 space-x-5 bg-teal-700 rounded-3xl w-48 ">
            <button class=" rounded-3xl text-white text-lg font-semibold pl-3 text-center">All Job Offers</button>
            <i class="fa-solid fa-greater-than text-md font-bold mt-2 text-white"></i>
        </div>
    </section>
    </main>
<?php
include '../layouts/footer.php'
?>