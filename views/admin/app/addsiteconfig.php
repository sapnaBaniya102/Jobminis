<?php
include '../../connection/config.php';
require('../inc/header.php');
require('../inc/navbar.php');
?>


<!-- strat wrapper -->
<div class="h-screen flex flex-row">
    <!-- start sidebar -->
    <?php
    require('../inc/sidebar.php')
    ?>
     <section class="content w-4/6 mt-28 ml-96 h-full" >
          <!-- left column -->
          <div class="">
            <!-- general form elements -->
            
            <?php
              if(isset($_POST['submit'])) {
                $name = $_POST['name'];
                $site_key=$_POST['site_key'];
                $site_value=$_POST['site_value'];
                if($name!="" && $site_key!="" && $site_value!="" )
                {
                    $query ="INSERT INTO siteconfig (name,site_key,site_value) VALUES('$name','$site_key','$site_value')";
                    $result = mysqli_query($conn,$query);
                    if($result)
                    {
                      echo "SiteConfig is added successfully.";
                      ?>
                          <meta http-equiv="refresh" content="0; URL=managesiteconfig.php?msg=csuccess" />
                            <?php
                    }
                    else 
                    {
                        echo "SiteConfig couldn't added successfully.";
                    }
                }


              }
            ?>
            <div class="card card-primary w-11/12 mx-auto my-6 relative">
              <div class="card-header">
                <h3 class="card-title text-3xl">Add SiteConfig</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="#" method="POST" enctype="multipart/form-data">
                <div class="card-body " >
                  <div class="form-group mt-5">
                    <label for="exampleInputEmail1" > Name:</label>
                    <input type="text" class="form-control border-solid border-2 rounded-md  w-full p-2" id="exampleInputEmail1" name="name" placeholder="">
                  </div>
                  <div class="form-group mt-5">
                    <label for="exampleInputEmail1" >Site_key:</label>
                    <input type="text" class="form-control border-solid border-2 rounded-md  w-full p-2" id="exampleInputEmail1" name="site_key" placeholder="">
                  </div>
                  <div class="form-group mt-5">
                    <label for="exampleInputEmail1" >Site_value:</label>
                    <input type="text" class="form-control border-solid border-2 rounded-md  w-full p-2" id="exampleInputEmail1" name="site_value" placeholder="">
                  </div>
                
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" name="submit" value="" class="btn btn-primary">Submit</button>
                </div>
              </form>
            </div>
            <!-- /.card -->
      </div><!-- /.container-fluid -->
    </section>
</div>
<!-- end wrapper -->

<?php
require('../inc/footer.php');
?>