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
    <section class="content w-4/6 mt-28 ml-96 h-full">
        <div class="container-fluid">
            <!-- Small boxes (Stat box) -->
            <a href="addsiteconfig.php"> <button class="btn btn-primary p-2" style="margin-left:1110px;">Add</button></a>
           
                <!-- left column -->
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">Manage SiteConfig</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <table id="example1" width="100%" class="table table-bordered table-striped ">
                            <thead>
                                <tr>
                                    <th>S.N.</th>
                                    <th>Name</th>
                                    <th>Site_key</th>
                                    <th>Site_value</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $query = "SELECT * FROM siteconfig ORDER BY created_at DESC";
                                $result = mysqli_query($conn, $query);
                                $sn = 0;
                                while ($data = mysqli_fetch_array($result)) {
                                    $sn += 1; //$sn = $sn+1
                                ?>
                                    <tr class="ml-2 text-center">
                                        <td><?php echo $sn; ?></td>
                                        <td><?php echo $data['name']; ?></td>

                                        <td ><p class="w-56 truncate"><?php echo $data['site_key']; ?></p></td>
                                        
                                        <td  ><p class="w-56 truncate"><?php echo $data['site_value']; ?></p></td>
                                        <td class="flex space-x-1">
                                            <a class="btn btn-primary p-1 px-2" " href="editsiteconfig.php?id=<?php echo $data['id']; ?>" role="button"><i class="fa-solid fa-pen"></i></a>
                                            <a name="" id="" class="btn btn-danger btn-xs p-1 px-2" href="../process/deletesiteconfig.php?id=<?php echo $data['id']; ?>" role="button"><i class="fa-solid fa-trash"></i></a>
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
            <!--/.col (left) -->
</div><!-- /.container-fluid -->
</section>
</div>
<!-- end wrapper -->

<?php
require('../inc/footer.php');
?>