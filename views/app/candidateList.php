<?php
include '../layouts/header.php';    
include '../layouts/nav.php'
?>

<div class="candidate-list-wrapper">
    <div class="candidate-list-header bg-teal-50 p-20">
        <h1 class="text-5xl font-bold mb-4">Search Candidate</h1>
        <span class="text-lg text-gray-600">Work with the most suitable candidates in the world</span>
        <form action="#" method="post" class="mt-10 bg-white rounded-3xl p-5 flex">
            <input type="text" placeholder="Candidate Name">
            <input type="text" placeholder="Location">
            <select name="post" id="">
                <option value="All industries" selected>All industries</option>
                <option value="Project Manager" >Project Manager</option>
                <option value="Finance" >Finance</option>
                <option value="Human Resource" >Human Resource</option>
            </select>
            <button type="submit" name="submit">Find Candidate</button>
        </form>
    </div>
    <div class="list">
    <div class="list-header">
                    <h1 class="text-2xl font-semibold text-gray-600">Showing <span class="text-black"> 1523 </span> companies</h1>
                </div>
    </div>
    <div class="list-body grid grid-cols-4">
        <div class="candidate-card">
        <div class="image"></div>
        <h1>Scott Goodwin</h1>
        <span>Marketing Expert</span>
        <div class="location">
        <i class="fa-solid fa-earth-americas absolute pt-4 -ml-10"></i>
        <h1>Los Angles, CA</h1>
        </div>
        <a href="#">View Profile  <i class="fa-solid fa-greater-than text-md mt-2 font-semibold text-white"></i></a>
        
        </div>
       
        

    </div>
</div>
<?php
include '../layouts/footer.php'
?>