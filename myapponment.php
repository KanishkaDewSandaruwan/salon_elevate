<?php 
require_once 'connection.php';
require_once 'user.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<link rel="icon" type="image/png" href="img/logo.jpeg" sizes="300x300" />
<meta name="viewport" content="width=device-width, initial-scale=1">
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
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
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
         <div class="col-lg-12 mb-5 mb-lg-0">
                      <h1 class="text-danger text-uppercase">My Appinment Details</h1><br><br>
                      <table class="table v-middle" style="text-align: center; font-size: 20px">
                                    <thead>
                                        <tr class="bg-dark">
                                            <th class="border-top-0 text-white">Service</th>
                                            <th class="border-top-0 text-white">Appoinment Date </th>
                                            <th class="border-top-0 text-white">Chech In Date</th>
                                            <th class="border-top-0 text-white">Check Out Date</th>
                                            <th class="border-top-0 text-white">Amount</th>

                                            <th class="border-top-0 text-white">Payment</th>
                                            <th class="border-top-0 text-white">Progress</th>
                                            <th class="border-top-0 text-white">Action</th>
                                        </tr>
                                    </thead>
                                        <tbody>
                                    <?php 
                                      $count=1;
                                      $id = $_SESSION['customer_id'];
                                        $viewquery = " SELECT * FROM appinment where customer_id = '$id' order by trn_date desc";
                                        $viewresult = mysqli_query($con,$viewquery);?>
                                          <?php while($row = mysqli_fetch_assoc($viewresult)) { 
                                                $service_id = $row['service_id'];

                                                $viewquery1 = " SELECT * FROM service where service_id='".$row['service_id']."'";
                                                $viewresult1 = mysqli_query($con,$viewquery1);
                                                $row1 = mysqli_fetch_assoc($viewresult1); 

                                                 $image = $row1['image'];
                                                $image_src = "upload/service/".$image;?>
                                                <tr>
                                                    <td><?php echo $row1['title']; ?><br><?php echo $row1['hour']; ?><br><img style="width: 150px" src='<?php echo $image_src; ?>'></td>
                                                    <td><?php echo $row['eppinment_date']; ?></td>
                                                    <td><?php echo $row['eppinment_time']; ?></td>
                                                    <td><?php echo $row['eppinment_end_time']; ?></td>
                                                    <td><?php echo $row['amount']; ?></td>
                                                    <td><?php echo $row['payment']; ?></td>
                                                    <td><?php echo $row['status']; ?></td>
                                                    <td>
                                                        <?php if($row['status'] != 'Canceled'){ ?>
                                                         <div class="dropdown show" >
                                                            <a style="font-size: 20px" class="btn btn-info dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                              Action
                                                            </a>

                                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                                              <a style="font-size: 20px" class="dropdown-item" href="manage.php?cancel=<?php echo $row['appoinment_id']; ?>"><i class="fas fa-trash-alt"> Cancel</i></a>
                                                              <?php if($row['payment'] != 'Paid'){ ?>
                                                              <a style="font-size: 20px" class="dropdown-item" href="payment.php?appoinment_id=<?php echo $row['appoinment_id']; ?>&total=<?php echo $row['amount']; ?>"><i class="fas fa-money-check-alt"> Pay</i></a>
                                                            <?php } ?>
                                                            </div>
                                                          </div>
                                                        <?php } ?>
                                                    </td>
                                                </tr>
                                            <?php   $count++;   }?>
                                    </tbody>
                                </table>
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
