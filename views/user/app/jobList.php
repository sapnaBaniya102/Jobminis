<?php
include '../inc/header.php';
require('../inc/navbar.php');
require('../../connection/config.php');
?>


<main>
    <!-- strat wrapper -->
    <div class="h-full flex flex-row flex-wrap bg-white">
        <!-- start sidebar -->

        <!-- end sidbar -->
        <div class="company-list-wrapper w-full mt-28 h-full">
            <div class="title bg-teal-100 py-20 text-center">
                <h1 class="text-6xl font-extrabold mb-3">Search Jobs</h1>
                <span class="text-xl font-light text-gray-600 font-sans">search your career opportunity through different jobs</span>
            </div>
            <div class="company-list my-8 mx-16 grid grid-cols-12 gap-5">
                <div class="search-company bg-blue-100 space-y-6 h-2/4  rounded-3xl p-8  col-span-3">
                    <div class="name space-y-3">
                        <h1 class="text-lg font-semibold">Search by Name</h1>
                        <input type="text" name="name" id="name" placeholder="Job Title" class="w-full h-12 rounded-3xl placeholder:pl-3">
                        <i class="fa-solid fa-magnifying-glass absolute pt-4 -ml-10"></i>
                    </div>

                 

                </div>
                <div class="list col-span-9 py-7">
                    <div class="list-header my-5 gap-5 grid md:grid-cols-2 grid-cols-1">
                    <?php
                
$job_query = "SELECT * FROM job_details INNER JOIN job_type ON job_details.job_type_id = job_type.id WHERE job_details.status = 'true'";
$job_result = mysqli_query($conn, $job_query);
while ($row4 = mysqli_fetch_array($job_result)) {
    # code...
    ?>
<div class="job-card border border-gray-400 hover:shadow hover:shadow-gray-400 rounded-3xl">
                        <div class="job-title p-4 py-5 flex gap-5">
                            <img src="../../../public/maxresdefault.jpeg" class="border ml-4 rounded-xl" width="80" height="80" alt="">
                            <div class="title space-y-2">
                              <a href="./jobDetails.php?id=<?php echo $row4['id']; ?>"> <h1 class="text-lg font-semibold"><?php echo $row4['title'];  ?></h1></a> 
                                <div class="place flex gap-9">
                                    <div class="flex gap-3">
                                        <i class="fa-solid fa-earth-americas "></i>
                                        <h2 class="text-sm font-medium">Paris, France</h2>
                                    </div>

                                    <h2 class="text-sm font-light"><?php echo $row4['type'];  ?></h2>
                                </div>
                            </div>
                        </div>
                        <div class="time text-sm text-gray-700 font-extralight mb-4 text-right mr-12">
                            <?php
                             $today = new DateTime();
                             $createdDate = $row4['created_at'];
                             if ($today > $createdDate) {
                                # code...
                                $diff = date_diff($createdDate, $today);
                                ?>
                                  <h2 class="text-xs"><?php echo $diff->days;  ?> <strong><?php echo $row4['contact_person'];  ?></strong> </h2>

                                <?php
                             }
                              ?>
                        </div>
                        <div class="w-2/3 mx-auto mb-7">
                        <button type="submit" name="submit" class="w-full text-white bg-teal-600 hover:bg-teal-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Apply Now</button>
                        </div>
                    </div>
    <?php


}

?>
                    </div>
                    <!-- <div class="list-body grid grid-cols-2 mt-16 gap-5" id="companySearch">
                    </div> -->
                </div>
            </div>
        </div>
    </div>
</main>
<script type="text/javascript" src="../../../assets/js/jQuery.js"></script>
<script type="text/javascript">
    $(document).ready(function() {
     
        $("#name").keyup(function(){
            var name = $(this).val();
             if (name != "") {
                $.ajax({
                    url: "../process/getCompany.php",
                    method: "POST",
                    data:{
				type: 1,
                name: name,
			},
            success: function(data){
              
                $("#company").html(data);

            }
                });
             }
             else{
                $.ajax({
                    url: "../process/getCompany.php",
                    method: "POST",
                    data:{
				type: 2,
			},
            success: function(data){
              
                $("#company").html(data);

            }
                });

             }
             
        })

    });

</script>
<?php
include '../inc/footer.php'
?>


<!-- <main>
<div class="container-fluid company-list-wrapper">
<div>
  <div class="bg-blue-50 py-20 text-center">
  <h1 class="text-5xl font-extrabold mb-3 sm:text-2xl">Search Jobs</h1>
  <h4 class="text-xl font-light text-gray-600 font-sans ">search your career opportunity through <b>12,800</b> jobs</h4>
  </div>
  <div class="mt-38">
  <div class=" sm:col-span-12 company-list my-8 mx-16 grid grid-cols-12 gap-5 ml-28">
    <div class="col-span-1">
</div>

    <div class="ml-28 col-span-2">
            <div class="search-company space-y-6 h-auto rounded-3xl p-4 bg-blue-50">
                <div class="name space-y-2 ">
                <h1 class="font-semibold">Search by keyword</h1>
                <input type="text" name="name" placeholder="Company Name" class="w-full h-12 rounded-3xl placeholder:pl-3">
                <i class="fa-solid fa-magnifying-glass absolute pt-4 -ml-10"></i>
                </div>

                <div class="location space-y-3">
                <h1 class="s font-semibold">Location</h1>
                <input type="text" name="location" placeholder="Enter Location" class="w-full h-12 rounded-3xl placeholder:pl-3">
                <i class="fa-solid fa-earth-americas absolute pt-4 -ml-10"></i>
                </div>

                <div class="category  space-y-3">
                <h1 class=" font-semibold">Category</h1>
                <select name="category" id="category" place class="w-full h-12 rounded-3xl placeholder:pl-3 pl-3 text-gray-400 font-medium">
                    <option value="Farming" selected>All categories</option>
                    <option value="Business DEvelopment">Business DEvelopment</option>
                    <option value="Finance">Finance</option>
                    <option value="customer Service">customer Service</option>



                </select>
                <i class="fa-solid fa-earth-americas absolute pt-4 -ml-10"></i>
                </div>
                <div class="location space-y-3">
                <h1 class="s font-semibold">Type of Employment</h1>
                <div class="flex items-center mb-4">
    <input id="default-checkbox" type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100 rounded border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
    <label for="default-checkbox" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Full Time <span class="pl-5 bg-blue-400for="default-checkbox" class="ml-3 text-sm font-medium text-gray-900 dark:text-gray-300">56</span></label>
</div>
<div class="flex items-center mb-4">
    <input id="default-checkbox" type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100 rounded border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
    <label for="default-checkbox" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Part Time <span class="pl-5 bg-blue-400for="default-checkbox" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">56</span></label>
</div>
<div class="flex items-center mb-4">
    <input id="default-checkbox" type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100 rounded border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
    <label for="default-checkbox" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Remorte <span class="pl-5 bg-blue-400for="default-checkbox" class="ml-3 text-sm font-medium text-gray-900 dark:text-gray-300">34</span></label>
</div>
<div class="flex items-center mb-4">
    <input id="default-checkbox" type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100 rounded border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
    <label for="default-checkbox" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">internship <span class="pl-5 bg-blue-400for="default-checkbox" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">24</span></label>
</div>
<div class="flex items-center mb-4">
    <input id="default-checkbox" type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100 rounded border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
    <label for="default-checkbox" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">contract <span class="pl-5 bg-blue-400for="default-checkbox" class="ml-3 text-sm font-medium text-gray-900 dark:text-gray-300">76</span></label>
</div>
<div class="flex items-center mb-4">
    <input id="default-checkbox" type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100 rounded border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
    <label for="default-checkbox" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Training<span class="pl-5 bg-blue-400for="default-checkbox" class=" text-sm font-medium text-gray-900 dark:text-gray-300">26</span></label>
</div>

                
                <i class="fa-solid fa-earth-americas absolute pt-4 -ml-10"></i>
                </div>
                <div class="location space-y-3">
                <h1 class="s font-semibold">Experience Level</h1>
                <div class="flex items-center mb-4">
    <input id="default-checkbox" type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100 rounded border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
    <label for="default-checkbox" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">No Experience <span class="pl-20 bg-blue-400for="default-checkbox" class="ml-5 text-sm font-medium text-gray-900 dark:text-gray-300">56</span></label>
</div>
<div class="flex items-center mb-4">
    <input id="default-checkbox" type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100 rounded border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
    <label for="default-checkbox" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Entry-level <span class="pl-5 bg-blue-400for="default-checkbox" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">56</span></label>
</div>
<div class="flex items-center mb-4">
    <input id="default-checkbox" type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100 rounded border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
    <label for="default-checkbox" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Mid-Level <span class="pl-5 bg-blue-400for="default-checkbox" class="ml-3 text-sm font-medium text-gray-900 dark:text-gray-300">34</span></label>
</div>
<div class="flex items-center mb-4">
    <input id="default-checkbox" type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100 rounded border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
    <label for="default-checkbox" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Senior-Level <span class="pl-5 bg-blue-400for="default-checkbox" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">24</span></label>
</div>
<div class="flex items-center mb-4">
    <input id="default-checkbox" type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100 rounded border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
    <label for="default-checkbox" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Manager<span class="pl-5 bg-blue-400for="default-checkbox" class="ml-3 text-sm font-medium text-gray-900 dark:text-gray-300">76</span></label>
</div>
<div class="flex items-center mb-4">
    <input id="default-checkbox" type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100 rounded border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
    <label for="default-checkbox" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Training<span class="pl-5 bg-blue-400for="default-checkbox" class=" text-sm font-medium text-gray-900 dark:text-gray-300">26</span></label>
</div>

                <i class="fa-solid fa-earth-americas absolute pt-4 -ml-10"></i>
                </div>
                <div class="location space-y-3">
                <h1 class="s font-semibold">Salary Range</h1>
                <div class="flex items-center mb-4">
    <input id="default-checkbox" type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100 rounded border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
    <label for="default-checkbox" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">$700-$1000<span class="pl-5 bg-blue-400for="default-checkbox" class="ml-5 text-sm font-medium text-gray-900 dark:text-gray-300">56</span></label>
</div>
<div class="flex items-center mb-4">
    <input id="default-checkbox" type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100 rounded border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
    <label for="default-checkbox" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">$1000-$1200<span class="pl-5 bg-blue-400for="default-checkbox" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">56</span></label>
</div>
<div class="flex items-center mb-4">
    <input id="default-checkbox" type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100 rounded border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
    <label for="default-checkbox" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">$1200-$1400<span class="pl-5 bg-blue-400for="default-checkbox" class="ml-3 text-sm font-medium text-gray-900 dark:text-gray-300">34</span></label>
</div>
<div class="flex items-center mb-4">
    <input id="default-checkbox" type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100 rounded border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
    <label for="default-checkbox" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">$1500-$1800<span class="pl-5 bg-blue-400for="default-checkbox" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">24</span></label>
</div>
<div class="flex items-center mb-4">
    <input id="default-checkbox" type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100 rounded border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
    <label for="default-checkbox" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">$2000-$3000<span class="pl-5 bg-blue-400for="default-checkbox" class="ml-3 text-sm font-medium text-gray-900 dark:text-gray-300">76</span></label>
</div>

                <i class="fa-solid fa-earth-americas absolute pt-4 -ml-10"></i>
                </div>
                
                
               
            </div>
        </div>
            <div class="list col-span-8 sm:m-5 md:flex-wrap md:justify-center">
                <div class="list-header">
                    <h1 class="text-2xl sm:text-xl md:text-xl font-semibold text-gray-500
                    mt-5">Showing<span class="text-black"> 8,536 </span>jobs</h1> 
                    <span class="">
                        <div class="text-right">
                            <select class=" sm:text-xl md:text-xl ml-96 text-xl focus:ring-primary font-semibold">
                                <option>Most relevent</option>
                                <option>Newest</option>
                                <option>oldest</option>
                            </select></span>
                        </div>
                </div>
                <div class="container-fluid">
                <div class="list-body grid grid-cols-3 md:grid-cols-9 mt-16 gap-5 sm:col-span-12">
                    <div class="h-auto">
                    <div class="list-card border border-gray-300 p-6 rounded-3xl space-5 hover:shadow hover:shadow-gray-300 ">
                        <div class="card-logo ">
                            <div class="relative flex">
                                <img src="../../imgs/icons8-audio-48.png" class="absolutes h-6 w-6 place-items-center flex bg-blue-100"alt="" >
                                <span class=" text-1xl font-serif text-gray-500 ">Market and communication</span>
                        </div>
                            <h1 class=" text-1xl text-black-500 mt-5 "><strong>Senior Editor</strong></h1>
                        <div class="relative flex pt-4">
                            <img src="../../imgs/world.png" alt="" height="4" width="4" class=" absolutes h-5 w-5 place-items-center flex">
                            <h2 class="ml-2">San Franceisco, CA<span class=" text-gray-500 pl-3 ">Full-time</span></h2>
                        </div>

                        <div>
                            <h1 class=" text-gray-400 text-xl  mt-10 m-2 pl-5">3 days ago by</h1>
                        </div>
                        <div class="relative flex ">
                           <h1 class="text-1xl mt-1 pl-5 ml-2"><strong>Artistre Studio</strong></h1>
                           <img src="../../imgs/240_F_307608755_mUfmRxwRMmzEOKXGO6HYTrjUyKEQSoZ5.jpg" height="75" width="100" class="absolutes flex">
                        </div>
                    </div>
                    </div>
</div>
<div class="h-auto">
                    <div class="list-card border border-gray-300 p-6 rounded-3xl space-5 hover:shadow hover:shadow-gray-300 ">
                        <div class="card-logo ">
                            <div class="relative flex">
                                <img src="../../imgs/task.png" class="absolutes h-6 w-6 place-items-center flex bg-blue-100"alt="" >
                                <span class=" text-1xl font-serif text-gray-500 ">Project Management</span>
                        </div>
                            <h1 class=" text-1xl text-black-500 mt-5 "><strong>Software Engineering</strong></h1>
                        <div class="relative flex pt-4">
                            <img src="../../imgs/world.png" alt="" height="4" width="4" class=" absolutes h-5 w-5 place-items-center flex">
                            <h2 class="ml-2">Los Angeles, CA<span class=" text-gray-500 pl-3 ">Full-time</span></h2>
                        </div>

                        <div>
                            <h1 class=" text-gray-400 text-xl  mt-10 m-2 pl-5">3 days ago by</h1>
                        </div>
                        <div class="relative flex ">
                           <h1 class="text-1xl mt-1 pl-5 ml-2"><strong>craftgwnics</strong></h1>
                           <img src="../../imgs/1000_F_410453131_ha07Eg0f3QN4UQ6LvfH4h2z8pwMGWEr4.jpg" alt="" height="75" width="100" class="absolutes flex">
                        </div>
                    </div>
                    </div>
</div>
<div class="h-auto">
                    <div class="list-card border border-gray-300 p-6 rounded-3xl space-5 hover:shadow hover:shadow-gray-300 ">
                        <div class="card-logo ">
                            <div class="relative flex">
                                <img src="../../imgs/chat.png" class="absolutes h-6 w-6 place-items-center flex bg-blue-100"alt="" >
                                <span class=" text-1xl font-serif text-gray-500 ">Customer Service</span>
                        </div>
                            <h1 class=" text-1xl text-black-500 mt-5 "><strong>Technical support</strong></h1>
                        <div class="relative flex pt-4">
                            <img src="../../imgs/world.png" alt="" height="4" width="4" class=" absolutes h-5 w-5 place-items-center flex">
                            <h2 class="ml-2">paris, France<span class=" text-gray-500 pl-3 ">Full-time</span></h2>
                        </div>

                        <div>
                            <h1 class=" text-gray-400 text-xl  mt-10 m-2 pl-5">3 days ago by</h1>
                        </div>
                        <div class="relative flex ">
                           <h1 class="text-1xl mt-1 pl-5 ml-2"><strong>Illuminate studio</strong></h1>
                           <img src="../../imgs/1000_F_94747015_w710pojp7hWrRPNTZaY4MgBAMNW7LHq7.jpg" alt=""height="75" width="100"class="absolutes flex">
                        </div>
                    </div>
                    </div>
</div>
<div class="h-auto">
                    <div class="list-card border border-gray-300 p-6 rounded-3xl space-5 hover:shadow hover:shadow-gray-300 ">
                        <div class="card-logo ">
                            <div class="relative flex">
                                <img src="../../imgs/icons8-audio-48.png" class="absolutes h-6 w-6 place-items-center flex bg-blue-100"alt="" >
                                <span class=" text-1xl font-serif text-gray-500 ">Software Engeneering</span>
                        </div>
                            <h1 class=" text-1xl text-black-500 mt-5 "><strong>javascript Developer</strong></h1>
                        <div class="relative flex pt-4">
                            <img src="../../imgs/world.png" alt="" height="4" width="4" class=" absolutes h-5 w-5 place-items-center flex">
                            <h2 class="ml-2">London, UK<span class=" text-gray-500 pl-3 ">Full-time</span></h2>
                        </div>

                        <div>
                            <h1 class=" text-gray-400 text-xl  mt-10 m-2 pl-5">3 days ago by</h1>
                        </div>
                        <div class="relative flex ">
                           <h1 class="text-1xl mt-1 pl-5 ml-2"><strong>Syspresoft</strong></h1>
                           <img src="../../imgs/java-script.png" alt=""height="70" width="95"class="absolutes flex ml-5">
                        </div>
                    </div>
                    </div>
</div>
<div class="h-auto">
                    <div class="list-card border border-gray-300 p-6 rounded-3xl space-5 hover:shadow hover:shadow-gray-300 ">
                        <div class="card-logo ">
                            <div class="relative flex">
                                <img src="../../imgs/pie-chart.png" class="absolutes h-6 w-6 place-items-center flex bg-blue-100"alt="" >
                                <span class=" text-1xl font-serif text-gray-500 ">Business Development</span>
                        </div>
                            <h1 class=" text-1xl text-black-500 mt-5 "><strong>Technical writer</strong></h1>
                        <div class="relative flex pt-4">
                            <img src="../../imgs/world.png" alt="" height="4" width="4" class=" absolutes h-5 w-5 place-items-center flex">
                            <h2 class="ml-2">London, Uk<span class=" text-gray-500 pl-3 ">Full-time</span></h2>
                        </div>

                        <div>
                            <h1 class=" text-gray-400 text-xl  mt-10 m-2 pl-5">3 days ago by</h1>
                        </div>
                        <div class="relative flex ">
                           <h1 class="text-1xl mt-1 pl-5 ml-2"><strong>Gramware</strong></h1>
                           <img src="../../imgs\240_F_307608755_mUfmRxwRMmzEOKXGO6HYTrjUyKEQSoZ5.jpg" alt=""height="75" width="100"class="absolutes flex ml-5">
                        </div>
                    </div>
                    </div>
</div>
<div class="h-auto">
                    <div class="list-card border border-gray-300 p-6 rounded-3xl space-5 hover:shadow hover:shadow-gray-300 ">
                        <div class="card-logo ">
                            <div class="relative flex">
                                <img src="../../imgs/icons8-audio-48.png" class="absolutes h-6 w-6 place-items-center flex bg-blue-100"alt="" >
                                <span class=" text-1xl font-serif text-gray-500 ">Software Engineering</span>
                        </div>
                            <h1 class=" text-1xl text-black-500 mt-5 "><strong>Fullstack Web Developer</strong></h1>
                        <div class="relative flex pt-4">
                            <img src="../../imgs/world.png" alt="" height="4" width="4" class=" absolutes h-5 w-5 place-items-center flex">
                            <h2 class="ml-2">New York,NY<span class=" text-gray-500 pl-3 ">Full-time</span></h2>
                        </div>

                        <div>
                            <h1 class=" text-gray-400 text-xl  mt-10 m-2 pl-5">3 days ago by</h1>
                        </div>
                        <div class="relative flex ">
                           <h1 class="text-1xl mt-1 pl-5 ml-5"><strong>coder</strong></h1>
                           <img src="../../imgs/1000_F_94747015_w710pojp7hWrRPNTZaY4MgBAMNW7LHq7.jpg" alt=""height="75" width="100"class="absolutes flex ml-5">
                        </div>
                    </div>
                    </div>
</div>
<div class="h-auto">
                    <div class="list-card border border-gray-300 p-6 rounded-3xl space-5 hover:shadow hover:shadow-gray-300 ">
                        <div class="card-logo ">
                            <div class="relative flex">
                                <img src="../../imgs/resource.png" class="absolutes h-6 w-6 place-items-center flex bg-blue-100"alt="" >
                                <span class=" text-1xl font-serif text-gray-500 ">Human Resources</span>
                        </div>
                            <h1 class=" text-1xl text-black-500 mt-5 "><strong>Human Resources coordinator</strong></h1>
                        <div class="relative flex pt-4">
                            <img src="../../imgs/world.png" alt="" height="4" width="4" class=" absolutes h-5 w-5 place-items-center flex">
                            <h2 class="ml-2">San Franceisco, CA<span class=" text-gray-500 pl-3 ">Full-time</span></h2>
                        </div>

                        <div>
                            <h1 class=" text-gray-400 text-xl  mt-10 m-2 pl-5">3 days ago by</h1>
                        </div>
                        <div class="relative flex ">
                           <h1 class="text-1xl mt-1 pl-5 ml-2"><strong>Bitbytech</strong></h1>
                           <img src="../../imgs/240_F_296774199_DKirFGYBG8lUifNPi65rdVIaA1pPhZLk.jpg" alt=""height="75" width="100"class="absolutes flex ml-5">
                        </div>
                    </div>
                    </div>
</div>
<div class="h-auto">
                    <div class="list-card border border-gray-300 p-6 rounded-3xl space-5 hover:shadow hover:shadow-gray-300 ">
                        <div class="card-logo ">
                            <div class="relative flex">
                                <img src="../../imgs/icons8-audio-48.png" class="absolutes h-6 w-6 place-items-center flex bg-blue-100"alt="" >
                                <span class=" text-1xl font-serif text-gray-500 ">Market and communication</span>
                        </div>
                            <h1 class=" text-1xl text-black-500 mt-5 "><strong>social Media Expert</strong></h1>
                        <div class="relative flex pt-4">
                            <img src="../../imgs/world.png" alt="" height="4" width="4" class=" absolutes h-5 w-5 place-items-center flex">
                            <h2 class="ml-2">San Franceisco, CA<span class=" text-gray-500 pl-3 ">Full-time</span></h2>
                        </div>

                        <div>
                            <h1 class=" text-gray-400 text-xl  mt-10 m-2 pl-5">3 days ago by</h1>
                        </div>
                        <div class="relative flex ">
                           <h1 class="text-1xl mt-1 pl-5 ml-2"><strong>Artistre Studio</strong></h1>
                           <img src="../../imgs/240_F_296774199_DKirFGYBG8lUifNPi65rdVIaA1pPhZLk.jpg" alt=""height="75" width="100"class="absolutes flex ml-5">
                        </div>
                    </div>
                    </div>
</div>
<div class="h-auto">
                    <div class="list-card border border-gray-300 p-6 rounded-3xl space-5 hover:shadow hover:shadow-gray-300 ">
                        <div class="card-logo ">
                            <div class="relative flex">
                                <img src="../../imgs/task.png" class="absolutes h-6 w-6 place-items-center flex bg-blue-100"alt="" >
                                <span class=" text-1xl font-serif text-gray-500 ">Project Management</span>
                        </div>
                            <h1 class=" text-1xl text-black-500 mt-5 "><strong>software Engineering Team </strong></h1>
                        <div class="relative flex pt-4">
                            <img src="../../imgs/world.png" alt="" height="4" width="4" class=" absolutes h-5 w-5 place-items-center flex">
                            <h2 class="ml-2">Los Angeles, CA<span class=" text-gray-500 pl-3 ">Full-time</span></h2>
                        </div>

                        <div>
                            <h1 class=" text-gray-400 text-xl  mt-10 m-2 pl-5">3 days ago by</h1>
                        </div>
                        <div class="relative flex ">
                           <h1 class="text-1xl mt-1 pl-5 ml-2"><strong>Craftgenics</strong></h1>
                           <img src="../../imgs/1000_F_410453131_ha07Eg0f3QN4UQ6LvfH4h2z8pwMGWEr4.jpg" alt=""height="75" width="100"class="absolutes flex ml-5">
                        </div>
                    </div>
                    </div>
                    
</div>
                </div>
            </div>
</div>
       </div>
    </div>
    </div>
</div>
</div>
<div class="pagination text-right mr-45">
            <button class=" font-semibold p-3 px-6 bg-blue-100 rounded-3xl">Show me more</button>
            </div>
</div>

</main> -->
<?php
include '../inc/footer.php'
?>