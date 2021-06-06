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
                <div class="container-fluid" onload="myFunction()">

                    <script>
                      function myFunction() {
                      <?php $query3="UPDATE message SET msg_read='Reded'";
                      $sql3=mysqli_query($con,$query3); ?>
                      }
                      </script>

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Email</h1>
                    </div>

                    <!-- Content Row -->
                            <div class="row p-5">
							      <div class="col-md-12 order-md-last d-flex">
							        <form action="" method="POST">

							                <!--Grid row-->
							                <div class="row">
							                    <!--Grid column-->
							                    <div class="col-md-12">
							                        <div class="md-form mb-0">
							                            <label for="email" class="">To</label>
							                            <input type="text" id="email" disabled value="<?php echo $_REQUEST['email']; ?>" name="email" class="form-control">
							                        </div>
							                    </div>
							                <!--Grid column-->
							                <br><br><br><br>
							                </div>
							                <!--Grid row-->

							                <!--Grid row-->
							                <div class="row">
							                    <div class="col-md-12">
							                        <div class="md-form mb-0">
							                            <label for="subject" class="">Subject</label>
							                            <input type="text" id="subject" name="subject" class="form-control">
							                        </div>
							                    </div>
							                </div>
							                <!--Grid row-->

							                <!--Grid row-->
							                <div class="row">

							                    <!--Grid column-->
							                    <div class="col-md-12">

							                        <div class="md-form">
							                            <label for="message">Your message</label>
							                            <textarea type="text" id="message" name="message" rows="2" class="form-control md-textarea"></textarea>
							                        </div>

							                    </div>
							                </div>
							                <!--Grid row-->

							                <br><br>
							                <div class="col-md-6 text-center text-md-left">
							                <input type="submit" name="submit" class="btn btn-info" style="width: 100%;" value="Send" >
							            </div>
							            </form>
							            <?php 

							              if(isset($_POST['submit'])){

							                    $email = $_REQUEST['email'];
							                    $subject = $_REQUEST['subject'];
							                    $message = $_REQUEST['message'];
							                    $headers = 'From: noreply @ company . com';

							                    mail($email,$subject,$message,$headers);
							             }?>
							         
							        
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