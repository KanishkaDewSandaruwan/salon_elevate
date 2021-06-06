<?php
//
// *** To Email ***
$to = $_REQUEST['email'];
//
// *** Subject Email ***
$subject = $_REQUEST['subject'];
//
// *** Content Email ***
$content = $_REQUEST['content'];
//
//*** Head Email ***
$headers = "From: salonelevateweb@gmail.com";
//
//*** Show the result... ***
if (mail($to, $subject, $content, $headers))
{
	echo '<script>alert("Mail Send Scussessfully."); window.location.href="appoinment.php";</script>';
} 
else 
{
   	echo '<script>alert("Mail Send Fail."); window.location.href="appoinment.php";</script>';
}