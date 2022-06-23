<?php
include '../../connection/config.php';
require('../inc/header.php');
require('../inc/navbar.php');
?>


<!-- strat wrapper -->
<div class="h-screen flex flex-row flex-wrap">
    <!-- start sidebar -->
    <?php
    require('../inc/sidebar.php')
    ?>
   <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <a href="uploadfile.php"> <button class="btn btn-primary p-2" style="margin-left:1110px;">Add</button></a> 
       
          <!-- left column -->
          <div class="col-md-12">
          <div class="card">
              <div class="card-header">
                <h3 class="card-title">Manage Files</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" width="100%" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>S.N.</th>
                    <th>File Name</th>
                    <th>File Link</th>
                    <th>Images</th>
                    <th>Preview</th>
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>
                  <?php
                  $query = "SELECT * FROM files ORDER BY created_at DESC";
                  $result = mysqli_query($conn,$query);
                  $sn = 0;
                  while($data=mysqli_fetch_array($result))
                  {
                    $sn+=1; //$sn = $sn+1
                    ?>
                  <tr>
                    <td><?php echo $sn; ?></td>
                    <td><?php echo $data['name']; ?></td>
                    <td><?php echo $data['filelink']; ?></td>
                    <td> <img src="../uploads/<?php echo $data['filelink'];?>" alt="" height="80px;" width="80px;"></td>
                    <td><a name="" id="" class="btn btn-info btn-xs" href="../uploads/<?php echo $data['filelink']; ?>" role="button" target="_blank">Preview</a></td>
                    <td>
                        <a name="" id="" class="btn btn-danger btn-xs" href="process/deletefile.php?id=<?php echo $data['id']; ?>" role="button">Delete</a>
                    </td>
                  </tr>
                    <?php
                  }
                  ?>
                  </tfoot>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
          </div>
          <!--/.col (left) -->
      
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
</div>
<!-- end wrapper -->

<?php
require('../inc/footer.php');
?>