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
                        <h1 class="h3 mb-0 text-gray-800">Service</h1>
                        <button class="d-none d-sm-inline-block btn btn-lg btn-primary shadow-sm" data-bs-toggle="modal" data-bs-target="#exampleModal"><i
                                class="fas fa-plus fa-sm text-white-50"></i> Add New</button>
                    </div>

                    <!-- Content Row -->
                    <div class="row">
                        <div class="col-md-12">
                            <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Service List</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Title</th>
                                            <th>Headline</th>
                                            <th>Description</th>
                                            <th>Image</th>
                                            <th>Price</th>
                                            <th>Hours</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>Title</th>
                                            <th>Headline</th>
                                            <th>Description</th>
                                            <th>Image</th>
                                            <th>Price</th>
                                            <th>Hours</th>
                                            <th>Action</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        <?php 
                                        $viewquery = " SELECT * FROM service";
                                        $viewresult = mysqli_query($con,$viewquery);
                                        while($row = mysqli_fetch_assoc($viewresult)) { 

                                            $image = $row['image'];
                                            $image_src = "../upload/service/".$image;?>
                                        <tr>
                                            <td><?php echo $row['title']; ?></td>
                                            <td><?php echo $row['headline']; ?></td>
                                            <td><?php echo $row['description']; ?></td>
                                            <td><img width="100px" src='<?php echo $image_src; ?>'></td>
                                            <td><?php echo $row['price']; ?></td>
                                            <td><?php echo $row['hour']; ?></td>
                                            <td>
                                                <div class="dropdown show">
                                                  <a class="btn btn-info dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    Action
                                                  </a>

                                                  <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                                     <a class="dropdown-item" href="edit_service.php?service_id=<?php echo $row['service_id']; ?>"><i class="fas fa-edit"></i> Edit</a>
                                                    <a class="dropdown-item" href="delete.php?service_id=<?php echo $row['service_id']; ?>"><i class="fas fa-trash-alt"></i> Delete</a>
                                                  </div>
                                                </div>
                                            </td>
                                        </tr>
                                    <?php } ?>
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

             <!-- Modal -->
          <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
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
                                <button type="button" class="btn btn-dark" data-bs-dismiss="modal">Close</button>
                                <button type="submit" name="submit" class="btn btn-primary">Save changes</button>

                                     <?php
                                    if(isset($_POST['submit'])){

                                      $title = $_REQUEST['title'];
                                      $headline = $_REQUEST['headline'];
                                      $price = $_REQUEST['price'];
                                      $editordata = $_REQUEST['editordata'];
                                      $hour = $_REQUEST['hour'];
                                      $cdate = date("Y/m/d m:H:s");

                                      $name = $_FILES['file']['name'];
                                      $target_dir = "../upload/service/";
                                      $target_file = $target_dir . basename($_FILES["file"]["name"]);
                                      $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
                                      $extensions_arr = array("jpg","jpeg","png","gif");


                                      if(!empty($title)){
                                        if(!empty($headline)){
                                            if(!empty($editordata)){
                                              if(!empty($price)){
                                                if(!empty($hour)){
                                                if(isset($_FILES['file']) && !empty($_FILES['file']['name'])) { 

                                                  $query2="SELECT * FROM service WHERE title='$title'";
                                                      $sql2=mysqli_query($con,$query2);

                                                      if(mysqli_num_rows($sql2)>0){
                                                          echo "<script>alert(\"This Service already Exsisted\");</script>";
                                                      }else{

                                                        if (in_array($imageFileType,$extensions_arr)) {
                                                            move_uploaded_file($_FILES['file']['tmp_name'],$target_dir.$name);
                    
                                                          $q1="INSERT INTO service(title,description,image,price,headline,hour) values('$title','$editordata','$name','$price','$headline','$hour')";
                                                                $res1=mysqli_query($con,$q1);
                                                                if ( $res1) {

                                                                     echo '<script>alert("Service Saving is Scussessfully."); window.location.href="service.php";
                                                                                  </script>';
                                                                    
                                                                }else{
                                                                  echo "<script>alert(\"Service Saving is Not Scussess\");</script>";
                                                                }
                                                        }
                                                                      
                                                                
                                                    }
      
                                             }else{ echo "<script>alert(\"Please Select Image to Upload\");</script>";}
                                            }else{ echo "<script>alert(\"Enter Service Hours\");</script>";}
                                            }else{ echo "<script>alert(\"Enter Price\");</script>";}
                                          }else {echo "<script>alert(\"Enter Description\");</script>";}
                                        }else{ echo "<script>alert(\"Enter Headline\");</script>";}
                                      }else{ echo "<script>alert(\"Enter Service Title\");</script>";} 
                                  
                                  } ?>
                  </div>
                </form>
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