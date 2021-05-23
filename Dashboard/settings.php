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
                        <h1 class="h3 mb-0 text-gray-800">Settings</h1>
                    </div>

                    <!-- Content Row -->
                    <div class="row">
                        <div class="col-md-12">
                            <div class="row">
              <nav>
                    <div class="nav nav-tabs" id="nav-tab" role="tablist">
                      <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">Home Page</a>
                      <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">About Page</a>
                      <!-- <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-contact" role="tab" aria-controls="nav-contact" aria-selected="false">Home Work</a> -->
                    </div>
                  </nav>
                  <div class="tab-content" id="nav-tabContent">
                    <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                          <div class="col-md-12 mt-3">
                                <div class="col-md-3">
                                    <button style="font-size: 20px;" data-toggle="modal" data-target="#changeHeader" class="btn col-md-12 btn-lg btn-dark mt-3 ml-3">Change Home Page Header</button>
                                </div> 
                                <div class="col-md-3">
                                    <button style="font-size: 20px;" data-toggle="modal" data-target="#changebanner" class="btn col-md-12 btn-lg btn-dark mt-3 ml-3">Change Service Page and Banners</button>
                                </div> 
                        </div>
                    </div>
                    <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                      <div class="col-md-12 mt-3">
                        <div class="col-md-3">
                                    <button style="font-size: 20px;" data-toggle="modal" data-target="#changeDetails" class="btn col-md-12 btn-lg btn-dark mt-3 ml-3">Change About Details</button>
                                </div> 

                                <div class="col-md-3">
                                    <button style="font-size: 20px;" data-toggle="modal" data-target="#changeContact" class="btn col-md-12 btn-lg btn-dark mt-3 ml-3">Change Contact Details</button>
                                </div> 
                            
                        </div>
                    </div>
                    <!-- <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab"> -->
                      <!-- <div class="col-md-12 mt-3"> -->

                    </div>
                  </div>
                </div>
                        
                    </div>
                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

              <!-- Modal -->
      <div class="modal fade" id="changeContact" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title text-danger" id="exampleModalLabel">Change Contact Details</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
                <form class="col-md-12 mt-3" method="POST" enctype="multipart/form-data">
                  <div class="modal-body">

                        <div class="form-row">
                      <div class="form-group col-md-12">
                        <label for="name" class="a"><b>Email Address</b></label>
                        <input type="text" class="form-control" name="email" placeholder="Email Address">
                      </div>
                    </div>

                    <div class="form-row">
                      <div class="form-group col-md-12">
                        <label for="name" class="a"><b>Phone Number</b></label>
                        <input type="text" class="form-control" name="phone" placeholder="Phone Number">
                      </div>
                    </div>

                    <div class="form-row">
                      <div class="form-group col-md-12">
                        <label for="name" class="a"><b>Address</b></label>
                        <input type="text" class="form-control" name="address" placeholder="Address">
                      </div>
                    </div>

                    <div class="form-row">
                      <div class="form-group col-md-12">
                        <label for="name" class="a"><b>Facebook</b></label>
                        <input type="text" class="form-control" name="fb" placeholder="Facebook">
                      </div>
                    </div>

                    <div class="form-row">
                      <div class="form-group col-md-12">
                        <label for="name" class="a"><b>Twitter</b></label>
                        <input type="text" class="form-control" name="twit" placeholder="Twitter">
                      </div>
                    </div>

                    <div class="form-row">
                      <div class="form-group col-md-12">
                        <label for="name" class="a"><b>Instragram</b></label>
                        <input type="text" class="form-control" name="insta" placeholder="Instragram">
                      </div>
                    </div>


                                
                  </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" name="about" class="btn btn-primary">Save changes</button>
              </div>
                </form>
                <?php
                   if(isset($_POST['about'])){
 

                      $email = $_REQUEST['email'];
                      $phone = $_REQUEST['phone'];
                      $address = $_REQUEST['address'];

                      $fb = $_REQUEST['fb'];
                      $twit = $_REQUEST['twit'];
                      $insta = $_REQUEST['insta'];


                      if(!empty($email))
                      {
                        if(filter_var($email, FILTER_VALIDATE_EMAIL)){

                          $query1="SELECT * FROM employee WHERE email='$email'";
                          $sql1=mysqli_query($con,$query1);


                            if(mysqli_num_rows($sql1)>0)
                            {
                              echo "<script type=\"text/javascript\"> alert(\"Email is already Exsisted\");</script>";
                            }
                            else
                              {
                                $query3="UPDATE about SET email='$email'";
                                $sql3=mysqli_query($con,$query3);
                                echo "<script type=\"text/javascript\"> alert(\"Updated Succussfully\"); window.location.href='settings.php';</script>";
                              }
                        }
                      }
                      if(!empty($address))
                      {
                        $query3="UPDATE about SET address='$address'";
                        $sql3=mysqli_query($con,$query3);
                        echo "<script type=\"text/javascript\"> alert(\"Updated Succussfully\"); window.location= \"settings.php\";</script>";
                      }
                      if(!empty($phone))
                      {
                        if(preg_match("/^([0]([7189])([071628])([0-9])([0-9])([0-9])([0-9])([0-9])([0-9])([0-9]))$/", $phone)){
                            $query3="UPDATE about SET phone='$phone'";
                            $sql3=mysqli_query($con,$query3);
                            echo "<script type=\"text/javascript\"> alert(\"Updated Succussfully\"); window.location= \"settings.php\";</script>";

                          }else{echo "Enter Valid Phone Number";}
                      }

                      if(!empty($fb))
                      {
                        $query3="UPDATE about SET facebook='$fb'";
                        $sql3=mysqli_query($con,$query3);
                        echo "<script type=\"text/javascript\"> alert(\"Updated Succussfully\"); window.location= \"settings.php\";</script>";
                      }

                      if(!empty($twit))
                      {
                        $query3="UPDATE about SET twiter='$twit'";
                        $sql3=mysqli_query($con,$query3);
                        echo "<script type=\"text/javascript\"> alert(\"Updated Succussfully\"); window.location= \"settings.php\";</script>";
                      }

                      if(!empty($insta))
                      {
                        $query3="UPDATE about SET instragram='$insta'";
                        $sql3=mysqli_query($con,$query3);
                        echo "<script type=\"text/javascript\"> alert(\"Updated Succussfully\"); window.location= \"settings.php\";</script>";
                      }
                    }
                    
                  ?>
                    
            </div>
          </div>
        </div>

                 <!-- Modal -->
      <div class="modal fade" id="changeHeader" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title text-danger" id="exampleModalLabel">Change Home Page Images</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
                <form class="col-md-12 mt-3" method="POST" enctype="multipart/form-data">
                  <div class="modal-body">

                         Select Header image to upload:<br>
                        <input type="file" name="file" /><br><br>

                        <div class="form-row">
                      <div class="form-group col-md-6">

                        <label for="name" class="a"><b>Title</b></label>
                        <input type="text" class="form-control" name="title" placeholder="Title">
                      </div>
                    </div>

                    <div class="form-row">
                      <div class="form-group col-md-6">

                        <label for="name" class="a"><b>Description</b></label>
                        <input type="text" class="form-control" name="desc" placeholder="Description">
                      </div>
                    </div>

                    Select Subpage Header image to upload:<br>
                        <input type="file" name="file1" /><br><br>

                                
                  </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" name="image_set_home" class="btn btn-primary">Save changes</button>
              </div>
                </form>
                <?php
                   if(isset($_POST['image_set_home'])){
 
                      $name = $_FILES['file']['name'];
                      $name1 = $_FILES['file1']['name'];

                      $title = $_REQUEST['title'];
                        $desc = $_REQUEST['desc'];


                      // $target_dir = "upload/";
                      $target_dir = "../upload/home/";
                      $target_file = $target_dir . basename($_FILES["file"]["name"]);
                      $target_file1 = $target_dir . basename($_FILES["file1"]["name"]);


                      // Select file type
                      $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
                      $imageFileType1 = strtolower(pathinfo($target_file1,PATHINFO_EXTENSION));

                      // Valid file extensions
                      $extensions_arr = array("jpg","jpeg","png","gif");

                      // Check extension
                      if( in_array($imageFileType,$extensions_arr) ){
                          move_uploaded_file($_FILES['file']['tmp_name'],$target_dir.$name);
                          $query="UPDATE details SET header_image='$name'";
                          mysqli_query($con,$query);
                          echo '<script>alert("Header Details Change Success"); window.location.href="settings.php";</script>';
                      }

                      if( in_array($imageFileType1,$extensions_arr) ){
                          move_uploaded_file($_FILES['file1']['tmp_name'],$target_dir.$name1);
                          $query="UPDATE details SET subpage_image='$name1'";
                          mysqli_query($con,$query);
                          echo '<script>alert("Header Details Change Success"); window.location.href="settings.php";</script>';
                      }

                      if(!empty($title))
                      {

                        $query3="UPDATE details SET header_title='$title'";
                        $sql3=mysqli_query($con,$query3);
                          echo '<script>alert("Header Details Change Success"); window.location.href="settings.php";</script>';
                      }
                      if(!empty($desc))
                      {

                        $query3="UPDATE details SET header_desc='$desc'";
                        $sql3=mysqli_query($con,$query3);
                          echo '<script>alert("Header Details Change Success"); window.location.href="settings.php";</script>';
                      }
                    }
                    
                  ?>
                    
            </div>
          </div>
        </div>

               <!-- Modal -->
      <div class="modal fade" id="changebanner" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title text-danger" id="exampleModalLabel">Page Service & Banners</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
                <form class="col-md-12 mt-3" method="POST" enctype="multipart/form-data">
                  <div class="modal-body">

                         Select Header image to upload:<br>
                        <input type="file" name="file" /><br><br>

                        <div class="form-row">
                      <div class="form-group col-md-6">

                        <label for="name" class="a"><b>Title</b></label>
                        <input type="text" class="form-control" name="title" placeholder="Title">
                      </div>
                    </div>

                    <div class="form-row">
                      <div class="form-group col-md-6">

                        <label for="name" class="a"><b>Description</b></label>
                        <input type="text" class="form-control" name="desc" placeholder="Description">
                      </div>
                    </div>

                    Select Subpage Header image to upload:<br>
                        <input type="file" name="file1" /><br><br>

                                
                  </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" name="image_set_home" class="btn btn-primary">Save changes</button>
              </div>
                </form>
                <?php
                   if(isset($_POST['image_set_home'])){
 
                      $name = $_FILES['file']['name'];
                      $name1 = $_FILES['file1']['name'];

                      $title = $_REQUEST['title'];
                        $desc = $_REQUEST['desc'];


                      // $target_dir = "upload/";
                      $target_dir = "../upload/home/";
                      $target_file = $target_dir . basename($_FILES["file"]["name"]);
                      $target_file1 = $target_dir . basename($_FILES["file1"]["name"]);


                      // Select file type
                      $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
                      $imageFileType1 = strtolower(pathinfo($target_file1,PATHINFO_EXTENSION));

                      // Valid file extensions
                      $extensions_arr = array("jpg","jpeg","png","gif");

                      // Check extension
                      if( in_array($imageFileType,$extensions_arr) ){
                          move_uploaded_file($_FILES['file']['tmp_name'],$target_dir.$name);
                          $query="UPDATE details SET header_image='$name'";
                          mysqli_query($con,$query);
                          echo '<script>alert("Header Details Change Success"); window.location.href="settings.php";</script>';
                      }

                      if( in_array($imageFileType1,$extensions_arr) ){
                          move_uploaded_file($_FILES['file1']['tmp_name'],$target_dir.$name1);
                          $query="UPDATE details SET subpage_image='$name1'";
                          mysqli_query($con,$query);
                          echo '<script>alert("Header Details Change Success"); window.location.href="settings.php";</script>';
                      }

                      if(!empty($title))
                      {

                        $query3="UPDATE details SET header_title='$title'";
                        $sql3=mysqli_query($con,$query3);
                          echo '<script>alert("Header Details Change Success"); window.location.href="settings.php";</script>';
                      }
                      if(!empty($desc))
                      {

                        $query3="UPDATE details SET header_desc='$desc'";
                        $sql3=mysqli_query($con,$query3);
                          echo '<script>alert("Header Details Change Success"); window.location.href="settings.php";</script>';
                      }
                    }
                    
                  ?>
                    
            </div>
          </div>
        </div>

        <!-- Modal -->
      <div class="modal fade" id="changeDetails" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title text-danger" id="exampleModalLabel">Change Salon About Details</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
                <form class="col-md-12 mt-3" method="POST" enctype="multipart/form-data">
                  <div class="modal-body">

                         Select Header image to upload:<br>
                        <input type="file" name="file" /><br><br>

                        <div class="form-row">
                      <div class="form-group col-md-6">
                        <label for="title" class="a"><b>About Title</b></label><br>
                        <input type="text" class="form-control" name="title" placeholder="About Title">
                      </div>
                    </div>

                     <label for="title" class="a"><b>About Description</b></label><br><br>
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

                        <div class="form-row">
                      <div class="form-group col-md-6">
                        <label for="title" class="a"><b>Salon Opening</b></label><br>
                        <input type="text" class="form-control" name="open" placeholder="Salon Opening">
                      </div>
                    </div>
                                
                  </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" name="image_set" class="btn btn-primary">Save changes</button>
              </div>
                </form>
                <?php
                   if(isset($_POST['image_set'])){
 
                      $name = $_FILES['file']['name'];

                      $title = $_REQUEST['title'];
                      $desc = $_REQUEST['editordata'];
                      $open = $_REQUEST['open'];


                      // $target_dir = "upload/";
                      $target_dir = "../upload/home/";
                      $target_file = $target_dir . basename($_FILES["file"]["name"]);


                      // Select file type
                      $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

                      // Valid file extensions
                      $extensions_arr = array("jpg","jpeg","png","gif");

                      // Check extension
                      if( in_array($imageFileType,$extensions_arr) ){
                          move_uploaded_file($_FILES['file']['tmp_name'],$target_dir.$name);
                          $query="UPDATE about SET image='$name'";
                          mysqli_query($con,$query);
                          echo '<script>alert("Updated Succussfully"); window.location.href="settings.php";</script>';
                      }

                      if(!empty($title))
                      {

                        $query3="UPDATE about SET title='$title'";
                        $sql3=mysqli_query($con,$query3);
                        echo "<script type=\"text/javascript\"> alert(\"Updated Succussfully\"); window.location= \"settings.php\";</script>";
                      }
                      if(!empty($desc))
                      {

                        $query3="UPDATE about SET description='$desc'";
                        $sql3=mysqli_query($con,$query3);
                        echo "<script type=\"text/javascript\"> alert(\"Updated Succussfully\"); window.location= \"settings.php\";</script>";
                      }

                      if(!empty($open))
                      {

                        $query3="UPDATE about SET open='$open'";
                        $sql3=mysqli_query($con,$query3);
                        echo "<script type=\"text/javascript\"> alert(\"Updated Succussfully\"); window.location= \"settings.php\";</script>";
                      }
                    }
                    
                  ?>
                    
            </div>
          </div>
        </div>
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