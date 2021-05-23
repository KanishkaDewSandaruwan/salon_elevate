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
                        <h1 class="h3 mb-0 text-gray-800">Employee</h1>
                    </div>

                    <!-- Content Row -->
                    <div class="row">
                        <div class="col-md-12">
                            <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Employee Edit</h6>
                        </div>
                            <div class="col-md-6 mt-4" style="font-family: \"Times New Roman\",Times, serif;">
                                   <form class="reg_form bg-light p-4 border rounded" action="" method="POST" enctype="multipart/form-data">

                                        <div class="form-row">
                                            <div class="form-group col-md-12">
                                              <label for="name"><b>Full Name</b></label>
                                              <input type="text" class="form-control" name="name" placeholder="Full Name">
                                            </div>
                                            </div>


                                            <div class="form-row">
                                            <div class="form-group col-md-12">
                                              <label><b>Email</b></label>
                                              <input type="text" class="form-control" name="email" placeholder="Email Address">
                                            </div>
                                          </div>

                                          
                                          <div class="form-row">
                                          <div class="form-group col-md-12">
                                            <label for="address"><b>Address</b></label>
                                            <input type="text" class="form-control"  name="address" placeholder="Address">
                                          </div>
                                          </div>

                                          <div class="form-row">
                                          <div class="form-group col-md-12">
                                            <label for="phone"><b>Phone Number</b></label>
                                            <input type="text" class="form-control" name="phone" placeholder="Phone Number">
                                          </div>
                                          </div>

                                          <div class="form-row">
                                          <div class="form-group col-md-12">
                                            <label for="nic"><b>NIC Number</b></label>
                                            <input type="text" class="form-control" name="nic" placeholder="NIC Number">
                                          </div>
                                          </div>

                                     


                                  <div class="modal-footer">
                                    <button type="button" class="btn btn-dark" onclick="window.location.href='employee.php'" data-bs-dismiss="modal">Back</button>
                                    <button type="submit" name="submit" class="btn btn-primary">Save changes</button>

                                        <?php
                                        if(isset($_POST['submit'])){
                                            $fname = $_REQUEST['name'];
                                            $emails = $_REQUEST['email'];
                                            $address = $_REQUEST['address'];
                                            $phone = $_REQUEST['phone'];
                                            $nic = $_REQUEST['nic'];

                                            $id = $_REQUEST['emp_id'];


                                            if(!empty($fname))
                                              {
                                                $query3="UPDATE employee SET full_name='$fname' WHERE emp_id='".$id."'";
                                                $sql3=mysqli_query($con,$query3);
                                                echo "<script type=\"text/javascript\"> alert(\"Updated Succussfully\"); window.location= \"employee.php\";</script>";
                                              }
                                              if(!empty($emails))
                                              {
                                                if(filter_var($emails, FILTER_VALIDATE_EMAIL)){

                                                  $query1="SELECT * FROM employee WHERE email='$emails'";
                                                  $sql1=mysqli_query($con,$query1);


                                                    if(mysqli_num_rows($sql1)>0)
                                                    {
                                                      echo "<script type=\"text/javascript\"> alert(\"Email is already Exsisted\");</script>";
                                                    }
                                                    else
                                                      {
                                                        $query3="UPDATE employee SET email='$emails' WHERE emp_id='".$id."'";
                                                        $sql3=mysqli_query($con,$query3);
                                                        echo "<script type=\"text/javascript\"> alert(\"Updated Succussfully\"); window.location.href='employee.php';</script>";
                                                      }
                                                }
                                              }
                                              if(!empty($address))
                                              {
                                                $query3="UPDATE employee SET address='$address' WHERE emp_id='".$id."'";
                                                $sql3=mysqli_query($con,$query3);
                                                echo "<script type=\"text/javascript\"> alert(\"Updated Succussfully\"); window.location= \"employee.php\";</script>";
                                              }
                                              if(!empty($phone))
                                              {
                                                if(preg_match("/^([0]([7189])([071628])([0-9])([0-9])([0-9])([0-9])([0-9])([0-9])([0-9]))$/", $phone)){
                                                    $query3="UPDATE employee SET phone_number='$phone' WHERE emp_id='".$id."'";
                                                    $sql3=mysqli_query($con,$query3);
                                                    echo "<script type=\"text/javascript\"> alert(\"Updated Succussfully\"); window.location= \"employee.php\";</script>";

                                                  }else{echo "Enter Valid Phone Number";}
                                              }

                                              if(!empty($nic))
                                              {
                                                $query3="UPDATE employee SET nic='$nic' WHERE emp_id='".$id."'";
                                                $sql3=mysqli_query($con,$query3);
                                                echo "<script type=\"text/javascript\"> alert(\"Updated Succussfully\"); window.location= \"employee.php\";</script>";
                                              }
                                        } ?>
                      </div>
                    </form>
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