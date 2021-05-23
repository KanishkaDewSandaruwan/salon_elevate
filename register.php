<?php 
require_once 'connection.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="icon" type="image/png" href="img/logo.jpeg" sizes="300x300" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SALON ELEVATE - Register</title>

    <!-- Custom fonts for this template-->
    <link href="Dashboard/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="Dashboard/css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body class="bg-gradient-primary">

    <div class="container">

        <div class="card o-hidden border-0 shadow-lg my-5">
            <div class="card-body p-0">
                <!-- Nested Row within Card Body -->
                <div class="row">
                    <div class="col-lg-5 d-none d-lg-block bg-register-image"></div>
                    <div class="col-lg-7">
                        <div class="p-5">
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4">Create an Account! SALON ELEVATE</h1>
                            </div>
                            <form class="user" method="POST">
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="text" name="name" class="form-control form-control-user" id="exampleFirstName"
                                            placeholder="Your Name">
                                    </div>
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="text" name="phone" class="form-control form-control-user" id="exampleFirstName"
                                            placeholder="Phone Number">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <input type="text" name="address" class="form-control form-control-user" id="exampleFirstName"
                                        placeholder="Your Address">
                                </div>
                                <div class="form-group">
                                    <input type="text" name="nic" class="form-control form-control-user" id="exampleFirstName"
                                        placeholder="NIC Number">
                                </div>
                                <div class="form-group">
                                    <input type="email" name="email" class="form-control form-control-user" id="exampleInputEmail"
                                        placeholder="Email Address">
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="password" name="pass" class="form-control form-control-user"
                                            id="exampleInputPassword" placeholder="Password">
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="password" name="confpass" class="form-control form-control-user"
                                            id="exampleRepeatPassword" placeholder="Repeat Password">
                                    </div>
                                </div>
                                <button type="submit" name="submit" class="btn btn-primary btn-user btn-block">
                                    Register Account
                                </button>
                                <hr>
                            </form>
                            <?php 

                                            if (isset($_POST['submit'])) {

                                                $name = $_REQUEST['name'];
                                                $email = $_REQUEST['email'];
                                                $address = $_REQUEST['address'];
                                                $phone = $_REQUEST['phone'];
                                                $nic = $_REQUEST['nic'];
                                                $psaaword = $_REQUEST['pass'];
                                                $conpw = $_REQUEST['confpass'];

                                                $query2="SELECT * FROM customer WHERE email='$email'";
                                                $sql2=mysqli_query($con,$query2);

                                                $query3="SELECT * FROM customer WHERE phone='$phone'";
                                                $sql3=mysqli_query($con,$query3);

                                                $query4="SELECT * FROM customer WHERE nic='$nic'";
                                                $sql4=mysqli_query($con,$query4);

                                                if (empty($name)) {

                                                    echo "<script>alert(\"Plese Enter Your Name.\");window.location.href=\"register.php\";</script>";
                                                    
                                                }
                                                elseif (empty($email)) {
                                                    
                                                    echo "<script>alert(\"Plese Enter Your Email.\");window.location.href=\"register.php\";</script>";
                                                    
                                                }
                                                elseif (empty($address)) {
                                                    
                                                    echo "<script>alert(\"Plese Enter Your address.\");window.location.href=\"register.php\";</script>";
                                                    
                                                }
                                                elseif (empty($phone)) {
                                                    
                                                    echo "<script>alert(\"Plese Enter Your Phone Number.\");window.location.href=\"register.php\";</script>";
                                                    
                                                }
                                                elseif (empty($nic)) {
                                                    
                                                    echo "<script>alert(\"Plese Enter Your NIC Number.\");window.location.href=\"register.php\";</script>";
                                                    
                                                }
                                                elseif (empty($psaaword)) {
                                                    
                                                    echo "<script>alert(\"Plese Enter New Password.\");window.location.href=\"register.php\";</script>";
                                                    
                                                }
                                                elseif (empty($conpw)) {
                                                    
                                                    echo "<script>alert(\"Plese confirm Your Password.\");window.location.href=\"register.php\";</script>";
                                                
                                                }
                                                elseif (!preg_match("/^([0]([0-9])([0-9])([0-9])([0-9])([0-9])([0-9])([0-9])([0-9])([0-9]))$/", $phone)) {

                                                    echo "<script>alert(\"Plese Enter Valid Phone Number.\");window.location.href=\"register.php\";</script>";
                                                    
                                                }
                                                elseif ($psaaword!=$conpw) {
                                                    
                                                    echo "<script>alert(\"Password is Not Match.\");window.location.href=\"register.php\";</script>";
                                                    
                                                }
                                                elseif (mysqli_num_rows($sql2)>0) {
                                                
                                                    echo "<script>alert(\"Email already Exsisted.\");window.location.href=\"register.php\";</script>";
                                                    
                                                }
                                                elseif (mysqli_num_rows($sql3)>0) {
                                                    
                                                    echo "<script>alert(\"Phone Number already Exsisted.\");window.location.href=\"register.php\";</script>";
                                                }
                                                elseif (mysqli_num_rows($sql4)>0) {
                                                
                                                    echo "<script>alert(\"NIC Number already Exsisted.\");window.location.href=\"register.php\";</script>";
                                                    
                                                }
                                                else {

                                                    $q1="INSERT INTO customer(name,phone,email,address,password,nic) values('$name','$phone','$email','$address','".md5($psaaword)."','$nic')";
                                                    $res1=mysqli_query($con,$q1);

                                                    if ($res1){
                                                        echo "<script>alert(\"congratulations! your registration was successful.\");window.location.href=\"login.php\";</script>";
                                                    }
                                                    else{
                                                        echo "<script>alert(\"Ohh Snap! your registration Fail. Plese Try Again!.\");window.location.href=\"register.php\";</script>";
                                                    }
                                                }
                                            }

                                             ?>
                            <hr>
                            <div class="text-center">
                                <a class="small" href="login.php">Already have an account? Login!</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

</body>

</html>