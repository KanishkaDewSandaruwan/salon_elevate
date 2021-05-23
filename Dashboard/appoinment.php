<?php require_once "head.php"; ?>

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-dark sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.php">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-laugh-wink"></i>
                </div>
                <div class="sidebar-brand-text mx-3">SALON ELEVATE</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="index.php">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Nav Item - Customer -->
            <li class="nav-item">
                <a class="nav-link" href="customer.php">
                    <i class="fas fa-users"></i>
                    <span>Customer</span></a>
            </li>

            <!-- Nav Item - Service -->
            <li class="nav-item">
                <a class="nav-link" href="service.php">
                    <i class="fas fa-fw fa-table"></i>
                    <span>Service</span></a>
            </li>

            <!-- Nav Item - Appinment -->
            <li class="nav-item">
                <a class="nav-link" href="appoinment.php">
                    <i class="fas fa-calendar "></i>
                    <span>Appinment</span></a>
            </li>

            <!-- Nav Item - Employee -->
            <li class="nav-item">
                <a class="nav-link" href="employee.php">
                    <i class="fas fa-user"></i>
                    <span>Employee</span></a>
            </li>

            <!-- Nav Item - Gallery -->
            <li class="nav-item">
                <a class="nav-link" href="gallery.php">
                    <i class="fas fa-images"></i>
                    <span>Gallery</span></a>
            </li>

             <!-- Nav Item - Employee -->
            <li class="nav-item">
                <a class="nav-link" href="settings.php">
                    <i class="fas fa-cog"></i>
                    <span>Settings</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

        </ul>
        <!-- End of Sidebar -->

<?php require_once "nav.php"; ?>

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Appoinment</h1>
                    </div>

                    <!-- Content Row -->
                    <div class="row">
                        <div class="col-md-12">
                            <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Appoinment List</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table v-middle" style="text-align: center;">
                                    <thead>
                                        <tr class="bg-dark">
                                            <th class="border-top-0 text-white">Action</th>
                                            <th class="border-top-0 text-white">Service</th>
                                            <th class="border-top-0 text-white">Appoinment Date </th>
                                            <th class="border-top-0 text-white">Chech In Date</th>
                                            <th class="border-top-0 text-white">Check Out Date</th>
                                            <th class="border-top-0 text-white">Amount</th>

                                            <th class="border-top-0 text-white">Payment</th>
                                            <th class="border-top-0 text-white">Progress</th>
                                        </tr>
                                    </thead>
                                    <?php 
                                      $count=1;
                                        $viewquery = " SELECT * FROM appinment order by trn_date desc";
                                        $viewresult = mysqli_query($con,$viewquery);
                                    
                                         ?>
                                        <tbody>
                                          <?php while($row = mysqli_fetch_assoc($viewresult)) { 

                                                $viewquery1 = " SELECT * FROM service where service_id='".$row['service_id']."'";
                                                $viewresult1 = mysqli_query($con,$viewquery1);
                                                $row1 = mysqli_fetch_assoc($viewresult1);

                                                 $image = $row1['image'];
                                                $image_src = "../upload/service/".$image;
      
                                                ?>
                                                <tr>
                                                    <td>
                                                      <div class="dropdown">
                                                        <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                          Action
                                                        </button>
                                                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                            <?php if($row['payment'] == 'Paid'){ ?>
                                                          <a class="dropdown-item" href="manage.php?accept=<?php echo $row['appoinment_id']; ?>"><i class="fas fa-check-circle"> Accept</i></a>
                                                      <?php } ?>
                                                          <a class="dropdown-item" href="manage.php?cancel=<?php echo $row['appoinment_id']; ?>"><i class="fas fa-times-circle"> Cancel</i></a>
                                                          <a class="dropdown-item" href="delete.php?appoinment_id=<?php echo $row['appoinment_id']; ?>"><i class="fas fa-trash-alt"> Delete</i></a>
                                                        </div>
                                                      </div>
                                                    </td>
                                                    <td><?php echo $row1['title']; ?><br><?php echo $row1['hour']; ?><br><img style="width: 150px" src='<?php echo $image_src; ?>'></td>
                                                    <td><?php echo $row['eppinment_date']; ?></td>
                                                    <td><?php echo $row['eppinment_time']; ?></td>
                                                    <td><?php echo $row['eppinment_end_time']; ?></td>
                                                    <td><?php echo $row['amount']; ?></td>
                                                    <td><?php echo $row['payment']; ?></td>
                                                    <td><?php echo $row['status']; ?></td>
                                                </tr>
                                            <?php   $count++;   }?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                        </div>
                        
                    </div>
                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Saloon Elevate 2021. Created By : M.G.P.SUSANTHIKA | SEU/IS/16/MIT/099 </span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>



    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="vendor/chart.js/Chart.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="js/demo/chart-area-demo.js"></script>
    <script src="js/demo/chart-pie-demo.js"></script>

</body>

</html>