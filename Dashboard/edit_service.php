<?php require_once "head.php"; ?>

            <!--     Editor Plugins     -->
      <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.js"></script>

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
                                        <label for="code" class="a"><b>Service Title</b></label>
                                        <input type="text" class="form-control" name="title" placeholder="Service Title">
                                      </div>
                                    </div>


                                    <div class="form-row">
                                      <div class="form-group col-md-12">
                                        <label for="title" class="a"><b>Headline</b></label>
                                        <input type="text" class="form-control" name="headline" placeholder="Headline">
                                      </div>
                                    </div>

                                    <div class="form-row">
                                    <div class="form-group col-md-12">
                                      <label for="desc"><b>Service Price </b></label>
                                      <input type="text" class="form-control" name="price" placeholder="Service Price ">
                                    </div>
                                    </div>

                                    <div class="form-row">
                                    <div class="form-group col-md-12">
                                      <label for="desc"><b>Service Hours </b></label>
                                      <input type="number" class="form-control" name="hour" placeholder="Service Hours ">
                                    </div>
                                    </div>

                                    Select image to upload:<br>
                                      <input type="file" name="file" /><br><br>

                                      <label for="title" class="a"><b>Description</b></label><br><br>
                                    <textarea id="summernote" name="editordata"></textarea>
                                        <script>
                                          $('#summernote').summernote({
                                            placeholder: 'Details About this Package',
                                            tabsize: 2,
                                            height: 120,
                                            toolbar: [
                                              ['style', ['style']],
                                              ['font', ['bold', 'underline', 'clear']],
                                              ['color', ['color']],
                                              ['para', ['ul', 'ol', 'paragraph']],
                                            ]
                                          });
                                        </script><br><br>

                                     


                                  <div class="modal-footer">
                                    <button type="button" class="btn btn-dark" onclick="window.location.href='service.php'" data-bs-dismiss="modal">Back</button>
                                    <button type="submit" name="submit" class="btn btn-primary">Save changes</button>

                                        <?php
                                        if(isset($_POST['submit'])){
                                            $title = $_REQUEST['title'];
                                            $headline = $_REQUEST['headline'];
                                            $price = $_REQUEST['price'];
                                            $editordata = $_REQUEST['editordata'];
                                            $hour = $_REQUEST['hour'];

                                            $id = $_REQUEST['service_id'];

                                            $file = $_REQUEST['file'];
                                            $name = $_FILES['file']['name'];
                                            $target_dir = "../upload/service/";
                                            $target_file = $target_dir . basename($_FILES["file"]["name"]);
                                            $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
                                            $extensions_arr = array("jpg","jpeg","png","gif");

                                             if(isset($_FILES['file']) && !empty($_FILES['file']['name'])) { 
                                            if( in_array($imageFileType,$extensions_arr) ){
                                                move_uploaded_file($_FILES['file']['tmp_name'],$target_dir.$name);
                                                $query="UPDATE service SET image='$name' where service_id='".$id."'";
                                                mysqli_query($con,$query);
                                                echo "<script type=\"text/javascript\"> alert(\"Updated Succussfully\"); window.location= \"service.php\";</script>";
                                            }
                                          }

                                          if(!empty($title))
                                          {
                                            $query3="UPDATE service SET title='$title' WHERE service_id='".$id."'";
                                            $sql3=mysqli_query($con,$query3);
                                            echo "<script type=\"text/javascript\"> alert(\"Updated Succussfully\"); window.location= \"service.php\";</script>";
                                          }

                                          if(!empty($editordata))
                                          {
                                            $query3="UPDATE service SET description='$editordata' WHERE service_id='".$id."'";
                                            $sql3=mysqli_query($con,$query3);
                                            echo "<script type=\"text/javascript\"> alert(\"Updated Succussfully\"); window.location= \"service.php\";</script>";
                                          }

                                          if(!empty($price))
                                          {
                                            $query3="UPDATE service SET price='$price' WHERE service_id='".$id."'";
                                            $sql3=mysqli_query($con,$query3);
                                            echo "<script type=\"text/javascript\"> alert(\"Updated Succussfully\"); window.location= \"service.php\";</script>";
                                          }

                                          if(!empty($headline))
                                          {
                                            $query3="UPDATE service SET headline='$headline' WHERE service_id='".$id."'";
                                            $sql3=mysqli_query($con,$query3);
                                            echo "<script type=\"text/javascript\"> alert(\"Updated Succussfully\"); window.location= \"service.php\";</script>";
                                          }

                                          if(!empty($hour))
                                          {
                                            $query3="UPDATE service SET hour='$hour' WHERE service_id='".$id."'";
                                            $sql3=mysqli_query($con,$query3);
                                            echo "<script type=\"text/javascript\"> alert(\"Updated Succussfully\"); window.location= \"service.php\";</script>";
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