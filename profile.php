<?php 
require_once 'connection.php';
require_once 'user.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="icon" type="image/png" href="img/logo.jpeg" sizes="300x300" />
<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
<meta name="description" content="Beauty Salon - provide the easy responsive free website templates. You can easily customize and make your own website for your startup business.">
<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
<meta name="keywords" content="bootstrap template, Responsive Template, Website Template, free website templates, free website template download ">
<title>SALON ELEVATE</title>
<!-- Bootstrap -->
<link href="css/bootstrap.min.css" rel="stylesheet">
<!-- Style css -->
<link rel="stylesheet" href="css/style.css">
<!-- Font Awesome CSS -->
<link rel="stylesheet" href="css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="css/fontello.css">



<!-- animsition css -->
<link rel="stylesheet" type="text/css" href="css/animsition.min.css">
<!-- owl Carousel Css -->
<link href="css/owl.carousel.css" rel="stylesheet">
<link href="css/owl.theme.css" rel="stylesheet">
<!-- Font css -->
<link rel="stylesheet" href="css/imagehover.min.css">
<link href="https://fonts.googleapis.com/css?family=Lato:100,100i,300,300i,400,400i,700,700i,900,900i%7cLibre+Baskerville:400,400i,700" rel="stylesheet">
  <?php 
$home_query = "SELECT * FROM details";
$home_query_result = mysqli_query($con, $home_query);
$row = mysqli_fetch_assoc($home_query_result);
$bottom_banner_01 = $row['subpage_image'];
$image_src1 = "upload/home/".$bottom_banner_01; ?>

<?php $viewquery = "SELECT * FROM about";
$viewresult = mysqli_query($con,$viewquery);
$row1 = mysqli_fetch_assoc($viewresult);
$about_image = $row1['image'];
$image_src2 = "upload/home/".$about_image; ?>
</head>
<body class="animsition">
<div class="header">
  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12">
        <div class="logo"> <a href="index.html"><img src="img/logo.jpeg" style="width: 300px;" alt=""></a> </div>
      </div>
      <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
        <div class="row">
          <div class="col-lg-4 col-md-2 col-sm-4 col-xs-6">
            <div class="call-block" style="margin-top: 20px;">
              <h3 class="call-no">+94 <?php echo $row1['phone']; ?></h3>
              <p class="call-text">Need any help?</p>
            </div>
            <div class="time-block">
              <h3 class="time"><?php echo $row1['open']; ?></h3>
              <p class="call-text">Opening Timing</p>
            </div>
          </div>
          <div class="col-lg-4 col-md-4 col-sm-5 col-xs-6">
            
          </div>
          <div class="col-lg-4 col-md-4 col-sm-3 col-xs-12">
            <div class="top-btn"> <a href="service.php" class="btn btn-primary btn-lg">FIND SERVICE</a> </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- navigation -->
<div class="navigation-wrapper">
  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="navigation" id="navigation">
         <ul>
            <li class="active"><a href="index.php" title="Home" class="animsition-link">Home</a></li>
            <li class="active"><a href="service.php" title="Home" class="animsition-link">Service</a></li>
            
            <?php if (isset($_SESSION['customer_id'])){ ?>
            <li><a href="" title="Blog" class="animsition-link">My Account</a>
              <ul>
                <li><a href="myapponment.php" title="Blog" class="animsition-link">Appinment</a></li>
                <li><a href="profile.php" title="Blog" class="animsition-link">Profile</a></li>
                <li><a href="logout.php" title="Blog Single" class="animsition-link">Logout</a></li>
              </ul>
            </li>
            <?php }else{ ?>

              <li><a href="" title="Blog" class="animsition-link">My Account</a>
              <ul>
                <li><a href="login.php" title="Blog" class="animsition-link">Login</a></li>
                <li><a href="register.php" title="Blog" class="animsition-link">Register</a></li>
              </ul>
            </li>
            <?php } ?>
            <li class="active"><a href="gallery.php" title="Home" class="animsition-link">Gallery</a></li>
            <li class="active"><a href="contact.php" title="Home" class="animsition-link">Contact Us</a></li>
           
            
          </ul>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="hero-section">
  <!-- navigation -->
  <style type="text/css">
    .hero-section { background: url(<?php echo $image_src1; ?>) no-repeat center right; background-size: cover; }
  </style>
  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-5 col-md-5 col-sm-6 col-xs-12">
        <div class="hero-caption"></div>
      </div>
    </div>
  </div>
</div>
<div class="space-medium">
  <div class="container-fluid">
    <div class="row">
          <?php 
            $viewquery = " SELECT * FROM customer where customer_id = '".$_SESSION['customer_id']."'";
            $viewresult = mysqli_query($con,$viewquery);
            $row = mysqli_fetch_assoc($viewresult); ?>
        <div class="col-md-3">
            <button type="button" name="submit" class="btn col-md-12 btn-lg p-4  btn-info" data-toggle="modal" data-target="#editprofile" style="border-radius:20px; margin-top: 5%;">Edit Profile</button>
            <button type="button" name="submit" class="btn col-md-12 btn-lg p-4  btn-info" data-toggle="modal" data-target="#exampleModal" style="border-radius:20px; margin-top: 5%;">Change Password</button>
            <button type="button" name="submit" class="btn col-md-12 btn-lg p-4  btn-info" data-toggle="modal" data-target="#exampleModalemail" style="border-radius:20px; margin-top: 5%;">Change Email</button>
            <button type="button" name="submit" class="btn col-md-12 btn-lg p-4  btn-danger" onclick="window.location.href='delete_customer.php?customer_id=<?php echo $row['customer_id']; ?>'" style="border-radius:20px; margin-top: 5%;">Delete Account</button>
        </div>
        <div class="col-md-1 pt-5 pb-5 ml-3 ">
        </div>
        <div class="col-md-6 pt-5 pb-5 ml-3 ">
                <div class="row ml-3">  
                   <h3 style="color: maroon;">Name : <?php echo $row['name']; ?></h3>
                </div>
                <div class="row ml-3">
                   <h3 style="color: maroon;">Address : <?php echo $row['address']; ?></h3>
                </div>
                <div class="row ml-3">
                   <h3 style="color: maroon;">Phone Number : <?php echo $row['phone']; ?></h3>
                </div>
                <div class="row ml-3">
                   <h3 style="color: maroon;">Email Address : <?php echo $row['email']; ?></h3>
                </div>
                <div class="row ml-3">
                   <h3 style="color: maroon;">NIC Number : <?php echo $row['nic']; ?></h3>
                </div>
            </div>
    </div>
  </div>
  <?php 
$home_query = "SELECT * FROM details";
$home_query_result = mysqli_query($con, $home_query);
$row = mysqli_fetch_assoc($home_query_result);
$bottom_banner_01 = $row['subpage_image'];
$image_src1 = "upload/home/".$bottom_banner_01; ?>

<?php $viewquery = "SELECT * FROM about";
$viewresult = mysqli_query($con,$viewquery);
$row1 = mysqli_fetch_assoc($viewresult);
$about_image = $row1['image'];
$image_src2 = "upload/home/".$about_image; ?>



        <!-- Modal -->
                    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                      <div class="modal-dialog" role="document">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel" style="text-align: center;">Change Password</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                            </button>
                          </div>
                            <form action="" method="POST"> 
                          <div class="modal-body">

                              <div class="form-row">
                                  <div class="form-group col-md-12">
                                    <input type="password" name="cpass" id="userPassword" class="form-control input-sm chat-input" placeholder="Current Password"/>
                                  </div>
                              </div>
                              <div class="form-row">
                                <div class="form-group col-md-12">
                                  <input type="password" name="npass" id="userPassword" class="form-control input-sm chat-input" placeholder="New Password"/>
                                </div>
                              </div>
                              <div class="form-row">
                                <div class="form-group col-md-12">
                                  <input type="password" name="conpass" id="userPassword" class="form-control input-sm chat-input" placeholder="Confirm Password"/>
                                </div>
                              </div>
                          </div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="submit" name="pass_change"  class="btn btn-primary">Save changes</button>
                          </div>
                           <?php
                            if(isset($_POST['pass_change']))
                            {


                            $currentpass=stripslashes($_REQUEST['cpass']);
                            $newpass=stripslashes($_REQUEST['npass']);
                            $confpass=stripslashes($_REQUEST['conpass']);
                            $g = $_SESSION['customer_id'];

                            if(!empty($currentpass)){
                              if(!empty($newpass)){
                                if(!empty($confpass)){

                                  $loginsql="SELECT * FROM customer WHERE password='".md5($currentpass)."'";
                                  $result=mysqli_query($con,$loginsql) or mysqli_errno();
                                  $rows=mysqli_fetch_assoc($result);

                                  $query5="SELECT password FROM customer WHERE customer_id='".$g."'";
                                  $sql5=mysqli_query($con,$query5);
                                  $row=mysqli_fetch_assoc($sql5);

                                  if(isset($rows['password'])==isset($row['password']))
                                  {
                                    if($newpass==$confpass){
                                      $query3="SELECT * FROM customer WHERE password='$newpass'";
                                      $sql3=mysqli_query($con,$query3);

                                      if(mysqli_num_rows($sql3)>0)
                                      {
                                        echo "password already Exsisted";
                                      }
                                      else
                                      {
                                          $query2="UPDATE customer SET password='".md5($newpass)."' WHERE customer_id='".$g."'";
                                          $sql2=mysqli_query($con,$query2);
                                          echo "<script type=\"text/javascript\"> alert(\"Password Update Successfull\"); window.location.href='logout.php'; </script>"; 
                                      }

                                    }else{ echo "<script>alert(\"Password is Not Match\");</script>";} 
                                  }else{ echo "<script>alert(\"Current Password is Wrong\");</script>";} 
                                }else{ echo "<script>alert(\"Enter Confirm Password\");</script>";} 
                              }else{ echo "<script>alert(\"Enter New Password\");</script>";} 
                            }else{ echo "<script>alert(\"Enter Current Password\");</script>";} 

                            }
                        ?>
                        </form>
                        </div>
                      </div>
                    </div>

                    <!-- Modal Edit Profile-->
                    <div class="modal fade" id="editprofile" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                      <div class="modal-dialog" role="document">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel" style="text-align: center;">Change Profile Details</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                            </button>
                          </div>
                            <form action="" method="POST"> 
                          <div class="modal-body">

                              <div class="form-row">
                                  <div class="form-group col-md-12">
                                    <input type="text" name="name" id="name" class="form-control input-sm chat-input" placeholder="Your Name"/>
                                  </div>
                              </div>
                              <div class="form-row">
                                <div class="form-group col-md-12">
                                  <input type="text" name="phone" id="phone" class="form-control input-sm chat-input" placeholder="Phone Number"/>
                                </div>
                              </div>
                              <div class="form-row">
                                <div class="form-group col-md-12">
                                  <input type="text" name="address" id="address" class="form-control input-sm chat-input" placeholder="Your Address"/>
                                </div>
                              </div>

                              <div class="form-row">
                                <div class="form-group col-md-12">
                                  <input type="text" name="nic" id="nic" class="form-control input-sm chat-input" placeholder="NIC Number"/>
                                </div>
                              </div>
                          </div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="submit" name="pass_detail"  class="btn btn-primary">Save changes</button>
                          </div>
                            <?php
                                if(isset($_POST['pass_detail']))
                                {


                                    $name = $_REQUEST['name'];
                                    $phone = $_REQUEST['phone'];
                                    $address = $_REQUEST['address'];
                                    $nic = $_REQUEST['nic'];
                                    $geID = $_SESSION['customer_id'];
                                    $cdate = date("Y/m/d m:H:s");


                                      
                                                if(!empty($name))
                                                  {
                                                    $query3="UPDATE customer SET name='$name' WHERE customer_id='".$geID."'";
                                                    $sql3=mysqli_query($con,$query3);
                                                    echo "<script type=\"text/javascript\"> alert(\"Updated Succussfully\"); window.location= \"profile.php\";</script>";
                                                  }

                                                  if(!empty($address))
                                                  {
                                                    $query3="UPDATE customer SET address='$address' WHERE customer_id='".$geID."'";
                                                    $sql3=mysqli_query($con,$query3);
                                                    echo "<script type=\"text/javascript\"> alert(\"Updated Succussfully\"); window.location= \"profile.php\";</script>";
                                                  }

                                                  if(!empty($nic))
                                                  {
                                                    $query3="UPDATE customer SET nic='$nic' WHERE customer_id='".$geID."'";
                                                    $sql3=mysqli_query($con,$query3);
                                                    echo "<script type=\"text/javascript\"> alert(\"Updated Succussfully\"); window.location= \"profile.php\";</script>";
                                                  }

                                                  if(!empty($phone))
                                                  {
                                                    if(preg_match("/^([0]([0-9])([0-9])([0-9])([0-9])([0-9])([0-9])([0-9])([0-9])([0-9]))$/", $phone)){
                                                        $query3="UPDATE customer SET phone='$phone' WHERE customer_id='".$geID."'";
                                                        $sql3=mysqli_query($con,$query3);
                                                        echo "<script type=\"text/javascript\"> alert(\"Updated Succussfully\"); window.location= \"profile.php\";</script>";

                                                      }else{echo "Enter Valid Phone Number";}
                                                  }


                                }
                            ?>
                        </form>
                        </div>
                      </div>
                    </div>
                         <!-- Modal -->
                    <div class="modal fade" id="exampleModalemail" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                      <div class="modal-dialog" role="document">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel" style="text-align: center;">Change Email</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                            </button>
                          </div>
                            <form action="" method="POST"> 
                          <div class="modal-body">

                              <div class="form-row">
                                  <div class="form-group col-md-12">
                                    <input type="email" name="cemail" id="userPassword" class="form-control input-sm chat-input" placeholder="Current Email"/>
                                  </div>
                              </div>
                              <div class="form-row">
                                <div class="form-group col-md-12">
                                  <input type="email" name="nemail" id="userPassword" class="form-control input-sm chat-input" placeholder="New Email"/>
                                </div>
                              </div>
                          </div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="submit" name="submit"  class="btn btn-primary">Save changes</button>
                          </div>
                          <?php
                  if(isset($_POST['submit']))
                  {

                  $currentemail=stripslashes($_REQUEST['cemail']);
                  $newemail=stripslashes($_REQUEST['nemail']);
                  $g = $_SESSION['customer_id'];

                  if(!empty($currentemail)){
                    if(!empty($newemail)){
                      if(filter_var($newemail, FILTER_VALIDATE_EMAIL)){

                        $loginsql="SELECT * FROM customer WHERE email='".$currentemail."'";
                        $result=mysqli_query($con,$loginsql) or mysqli_errno();
                        $rows=mysqli_fetch_assoc($result);

                        $query5="SELECT email FROM customer WHERE customer_id='".$g."'";
                        $sql5=mysqli_query($con,$query5);
                        $row=mysqli_fetch_assoc($sql5);

                        if(isset($rows['email'])==isset($row['email']))
                        {
                            $query3="SELECT * FROM customer WHERE email='$newemail'";
                            $sql3=mysqli_query($con,$query3);

                            if(mysqli_num_rows($sql3)>0)
                            {
                              echo "<script>alert(\"Email already Exsisted\");</script>";
                            }
                            else
                            {
                                $query2="UPDATE customer SET email='".$newemail."' WHERE email='".$currentemail."'";
                                $sql2=mysqli_query($con,$query2);
                                echo "<script type=\"text/javascript\"> alert(\"Email Update Successfull\"); window.location.href='logout.php'; </script>"; 
                            }
                        }else{ echo "<script>alert(\"Current Email is Wrong\");</script>";} 
                    
                      }else{ echo "<script>alert(\"Enter Valid Email\");</script>";} 
                    }else{ echo "<script>alert(\"Enter New Email\");</script>";} 
                  }else{ echo "<script>alert(\"Enter Current Email\");</script>";} 

                  }
              ?>
                        </form>
                        </div>
                      </div>
                    </div>


<div class="footer">
  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
        <div class="footer-widget bg-white pinside30 mb30">
          <div class="logo mb30"> <a href="img/logo.jpeg"><img src="img/logo.jpeg" class="img-responsive" alt=""></a> </div>
          <p class="mb30"><?php echo $row['header_title'] ?></p>
          <div class="footer-social"><a href="<?php echo $row1['twiter'] ?>"><i class="fa fa-twitter"></i></a><a href="<?php echo $row1['facebook'] ?>"><i class="fa fa-facebook"></i></a></div>
        </div>
      </div>
      <div class="col-lg-offset-1 col-lg-3 col-md-offset-1 col-md-3 col-sm-6 col-xs-12">
        <div class="footer-widget footer-contact">
          <h2 class="footer-title">Contact Info</h2>
          <ul class="listnone">
            <li>
              <div class="row">
                <div class="col-md-2"><i class="fa fa-phone"></i></div>
                <div class="col-md-10">
                  <h4 class="call-no"><a href="contact.html">+94 <?php echo $row1['phone'] ?></a></h4>
                </div>
              </div>
            </li>
            <li>
              <div class="row">
                <div class="col-md-2"><i class="fa fa-envelope-o"></i></div>
                <div class="col-md-10">
                  <h4 class="mail-text"><a href="contact.html"><?php echo $row1['email'] ?></a></h4>
                </div>
              </div>
            </li>
            <li>
              <div class="row">
                <div class="col-md-2"><i class="fa fa-clock-o"></i></div>
                <div class="col-md-10">
                  <h4 class="time-text"><a href="contact.html"><?php echo $row1['open'] ?></a></h4>
                </div>
              </div>
            </li>
          </ul>
        </div>
      </div>
      <div class="col-lg-offset-1 col-lg-3 col-md-offset-1 col-md-3 col-sm-6 col-xs-12">
        <div class="footer-widget">
          <h2 class="footer-title">Quick Access</h2>
          <ul class="listnone">
            <li><i class="fa fa-caret-right"></i><a href="index.php">Home</a></li>
            <li><i class="fa fa-caret-right"></i><a href="service.php">Services</a></li>
            <li><i class="fa fa-caret-right"></i><a href="contact.php">Contact</a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="tiny-footer">
  <div class="container">
    <div class="row">
      <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">Copyrights @ 2021 | All Rights Reserve. Saloon Elevate 2021. Created By : M.G.P.SUSANTHIKA | SEU/IS/16/MIT/099</div>
    </div>
  </div>
</div>
<!-- back to top icon -->
<a href="#0" class="cd-top" title="Go to top">Top</a>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="js/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="js/bootstrap.min.js"></script>
<script src="js/menumaker.js"></script>
<!-- animsition -->
<script type="text/javascript" src="js/animsition.js"></script>
<script type="text/javascript" src="js/animsition-script.js"></script>
<!-- sticky header -->
<script type="text/javascript" src="js/jquery.sticky.js"></script>
<script type="text/javascript" src="js/sticky-header.js"></script>
<!-- testimonial-carousel--> 
<script type="text/javascript" src="js/owl.carousel.min.js"></script> 
<script type="text/javascript" src="js/testimonial-carousel.js"></script> 
<!-- Back to top script -->
<script src="js/back-to-top.js" type="text/javascript"></script>
</body>
</html>
