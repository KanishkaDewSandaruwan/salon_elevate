<?php 
require_once 'connection.php';
session_start();
// require_once 'admin.php';
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
          $service_id = $_REQUEST['service_id'];
            $services="SELECT * FROM service where service_id = '$service_id' ";
            $query1 = mysqli_query($con,$services); 
            $count = 0;
            if ($row3 = mysqli_fetch_assoc($query1)) { 
            $productimage = $row3['image'];
            $productimage_src = "upload/service/".$productimage; ?>

          <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
            <div class="service-block mb60 outline">
              <div class="service-caption pinside40">
                <h1 class="service-title"><a class="title" style="font-size: 35px"><?php echo $row3['title']; ?></a></h1>
                <h2 class="mb40"><?php echo $row3['headline']; ?></h2>
                <p class="mb40"><?php echo $row3['description']; ?></p></div>
                <p style="color: red; font-weight: bold; font-size: 30px; padding: 1%">Rs. <?php echo $row3['price']; ?></p> 
                <p style="margin-left: 1%;"><?php echo $row3['hour']; ?> Hour</p>
              <div class="service-img"> <img  src="<?php echo $productimage_src; ?>" class="img-responsive" alt=""> </div>
            </div>
          </div>
          <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
            <form action="" method="POST" class="search-property-1">
                <div class="row no-gutters">
                  <div class="col-md d-flex">
                    <div class="form-group p-4">
                      <label for="#">Check-in date</label>
                      <div class="form-field">
                        <div class="icon"></div>
                        <input type="date" name="checkindate" class="form-control" placeholder="Check In Date">
                      </div>
                    </div>
                  </div>
                  <div class="col-md d-flex">
                    <div class="form-group p-4">
                      <label for="#">Check-In Time</label>
                      <div class="form-field">
                        <div class="icon"><span class="fas fa-clock"></span></div>
                        <input type="time" name="checktime" class="form-control" placeholder="Check Out Date">
                      </div>
                    </div>
                  </div>
                  <div class="col-md-4 d-flex">
                    <div class="form-group d-flex w-100 border-0">
                      <div class="form-field w-100 align-items-center d-flex">
                        <input type="submit" name="submit" value="MAKE APPOINMENT" class="align-self-stretch form-control  btn btn-primary">
                      </div>
                    </div>
                  </div>
                </div>
              </form>
               <?php
                  if(isset($_POST['submit'])){

                    if(!isset($_SESSION['customer_id'])){
                      echo "<script type=\"text/javascript\">window.location= \"login.php\";</script>";
                    }

                    $checkindate = $_REQUEST['checkindate'];
                    $checktime = $_REQUEST['checktime'];
                    $service_id = $_REQUEST['service_id'];

                    $customer_id = $_SESSION['customer_id'];
                    $cdate = date("Y/m/d m:H:s");

                    $query3="SELECT * FROM about";
                    $sql3=mysqli_query($con,$query3);
                    $row3=mysqli_fetch_assoc($sql3);

                    $close = $row3['close_time'];
                    $open = $row3['open_time'];

                    $total = 0;

                    $time = date('H:i', strtotime($checktime.'+1 hour'));

                    $query1="SELECT * FROM service WHERE service_id='$service_id'";
                    $sql1=mysqli_query($con,$query1);
                    $row=mysqli_fetch_assoc($sql1);
                    $total = $row['price'];
                    if (!empty($checkindate)) {
                      if (!empty($checktime)) {
                              if (($open <= $checktime) && ($checktime <= $close)) {
                                if (new DateTime() <= new DateTime($checkindate)) {

                                       $query2="SELECT * FROM appinment WHERE service_id = '$service_id' AND eppinment_date = '$checkindate' AND NOT(eppinment_end_time < '$checktime' OR eppinment_time  > '$time') ";
                                       $sql2=mysqli_query($con,$query2);

                                        if(mysqli_num_rows($sql2) > 6)
                                        {
                                          echo "<script type=\"text/javascript\"> alert(\"This Day is Not Available\");</script>";
                                        }
                                        else
                                        {
                                          $q1="INSERT INTO appinment(eppinment_date,eppinment_time,eppinment_end_time,trn_date,service_id,customer_id,status,payment,amount) values('$checkindate','$checktime','$time','$cdate','$service_id','$customer_id','Pending','Pending','$total')";
                                                  $res1=mysqli_query($con,$q1);
                                            if ( $res1) {

                                                $query3="SELECT * FROM appinment WHERE service_id = '$service_id' AND eppinment_date = '$checkindate'";
                                                $sql3=mysqli_query($con,$query3);
                                                $row8=mysqli_fetch_assoc($sql3);
                                                $appoinment_id = $row8['appoinment_id'];

                                                 echo '<script>alert("Appinment Adding is Scussessfully. Please Make Payment"); window.location.href="payment.php?total='.$total.'&appoinment_id='.$appoinment_id.'"; </script>';
                                                
                                            }else{
                                              echo "<script>alert(\"Appinment is Not Scussess\");</script>";
                                            }

                                        }

                                }else{echo "<script type=\"text/javascript\"> alert(\"Start Date need to future day\");</script>";}
                              }else{echo "<script type=\"text/javascript\"> alert(\"Salon is closed in this time please take anoth time\");</script>";}
                      }else{echo "<script type=\"text/javascript\"> alert(\"Please enter Appinment Time\");</script>";}
                    }else{echo "<script type=\"text/javascript\"> alert(\"Please enter Appinment Date\");</script>";}

                } ?>
          </div>
          <?php   $count++; } ?>
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
