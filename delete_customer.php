<?php 
  require_once 'connection.php'; //insert connection to page
  require_once 'user.php'; //insert connection to page

if(isset($_REQUEST['customer_id']))
{
          $id = $_REQUEST['customer_id'];

          $querygetcode="SELECT * FROM customer where customer_id='".$id."'";
          $catresult=mysqli_query($con,$querygetcode);
          $result_row=mysqli_fetch_assoc($catresult);
          $a=$result_row['customer_id'];

           $query2="DELETE FROM appinment WHERE customer_id='$a '";
          mysqli_query($con,$query2);


          $query1="DELETE FROM customer WHERE customer_id='$a '";
                  mysqli_query($con,$query1);

                  header('location:logout.php');
                
              
}
else{
  header('location:profile.php'); 
} ?>