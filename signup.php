<html>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=0.7" />
	  <link rel="icon" type="image/jpg" href="img/logo.ico" />
    <script
      src="https://kit.fontawesome.com/64d58efce2.js"
      crossorigin="anonymous"
    ></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
	  <script src="https://arms-cse3001.42web.io/account/js/sweetalert2.all.min.js"> </script>
	  <script src="https://arms-cse3001.42web.io/account/js/jquery-3.4.1.min.js"></script> 
	  <link rel="stylesheet" href="https://arms-cse3001.42web.io/account/css/sweetalert2.min.css" />
	  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
    <link rel="stylesheet" href="css/style.css" />
	  <script>
		  $(document).bind("contextmenu",function(e) {
 e.preventDefault();
});
		  $(document).keydown(function(e){
    if(e.which === 123){
       return false;
    }
});
	  </script>
		  <script language="text/javascript">
              document.onmousedown=disableclick;
		  status="Right Click Disabled";
		  function disableclick(event){ 
			  if(event.button==2) { 
				  alert(status); 
				  return false; }
		  }
.</script>
<script>
		  document.addEventListener('contextmenu', event=> event.preventDefault());
document.onkeydown = function(e) {
if(event.keyCode == 123) {
return false;
}
if(e.ctrlKey && e.shiftKey && e.keyCode == 'I'.charCodeAt(0)){
return false;
}
if(e.ctrlKey && e.shiftKey && e.keyCode == 'J'.charCodeAt(0)){
return false;
}
if(e.ctrlKey && e.keyCode == 'U'.charCodeAt(0)){
return false;
}
}
	  </script>
	  
    <title>HARIKET SHETH</title>
  </head>
  
<body oncontextmenu="return false;" bgcolor="#6a6a6e">
<?php
require_once  ('connection.php');
require 'PHPMailer/PHPMailerAutoload.php';
require 'PHPMailer/class.smtp.php';
require_once 'PHPMailer/class.phpmailer.php';
if(isset($_POST['submit1']))

{

$name=$_POST['name1'];
$fname = $_POST['name2'];
$email=$_POST['email1'];
$email_c = $_POST['email1'];
$email = filter_var($email, FILTER_SANITIZE_EMAIL);
if (filter_var($email, FILTER_VALIDATE_EMAIL)) {

$phone = preg_replace('/[^0-9]/', '', $_POST['phone1']);
if(strlen($phone) === 10) {
    $phone = '+91-'.$phone; 
$count1 = 0;
$qqq2 = "SELECT COUNT(*) AS count1 FROM users WHERE phone = '$phone'";
$result = mysqli_query($con,$qqq2);
$row = mysqli_fetch_assoc($result);
$count1 = $row['count1'];
$password=rand(10000000, 99999999);
$role = 'active';

$a1 = explode("@", $email);
    $ema = $a1[0];
    $dom = '@'.$a1[1];
    $mailto = '"mailto:'.$email.'"';
    $verify1 = strtolower(preg_replace("/\s+/", "", $name)).rand(100,999);
    $name = ucwords(preg_replace("/\s+/", "", $name));
    $fname = ucwords($fname);
    $qqq3 = "SELECT COUNT(*) AS count2 FROM users WHERE username = '$verify1'";
    $result = mysqli_query($con,$qqq3);
    $row = mysqli_fetch_assoc($result);
    $count2 = $row['count2'];
    while($count2 != 0) {
        $verify1 = strtolower(preg_replace("/\s+/", "", $name)).rand(100,999);
        $qqq3 = "SELECT COUNT(*) AS count2 FROM users WHERE username = '$verify1'";
        $result = mysqli_query($con,$qqq3);
        $row = mysqli_fetch_assoc($result);
        $count2 = $row['count2'];
    }
$status=0;

$b1 ="inactive";

$count = 0;
$qqq1 = "SELECT COUNT(*) AS count FROM users WHERE mailto = '$mailto'";

if (empty($_POST['g-recaptcha-response'])) {
		  echo "<script>
Swal.fire('RECAPTCHA ERROR !!',
'Sorry, Without Recaptcha - we could not verify your identity as a Human. Continous Signup requests without Recaptcha would lead to IP Address Ban.<br><br><b>Do not repeat. Complete ReCaptcha and then submit !</b>',
'error'

).then((value) => {
	 location.href='index.php'
	 });</script>";
}
else{
		$secretKey = '6LcGWx0dAAAAABj1qCxpfVdaY_GB9U7ysgeu2qGn'; 
             
            // Verify the reCAPTCHA response 
            $verifyResponse = file_get_contents('https://www.google.com/recaptcha/api/siteverify?secret='.$secretKey.'&response='.$_POST['g-recaptcha-response']); 
             
            // Decode json data 
            $responseData = json_decode($verifyResponse); 
             
            if(!$responseData->success){ 

			     echo "<script>
Swal.fire('RECAPTCHA ERROR !!',
'Unexpected error occured with ReCaptcha. It is possible that the ReCaptcha filled by you has expired/ there was a problem with ReCaptcha. Please re-submit. <br><br><b>If this issue was from our servers, We are really sorry for the inconvinience.</b>',
'info'

).then((value) => {
	 location.href='index.php'
	 });</script>";			
		  }
          if($responseData->success){



$result = mysqli_query($con,$qqq1);
$row = mysqli_fetch_assoc($result);
$count = $row['count'];
$activationcode=md5($email.time());
$roles = "Contributor";
$gib1 = '"enabled"';
$validity = $_POST['name1'];
$gender = $_POST['gender'];
if($gender == "male"){
    $profilepic = "https://bit.ly/3xgJuiM";
}
