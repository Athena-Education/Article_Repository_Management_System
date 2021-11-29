<?php 
session_start();
$con = mysqli_connect('HOST', 'USERNAME', 'PASS', 'DB_NAME');
if (!$con){
    $_SESSION['connectiondb']="false";
}
else {
     $_SESSION['connectiondb']="true";
}
define('CONTACTFORM_RECAPTCHA_SITE_KEY', 'ADD_OWN');
define('CONTACTFORM_RECAPTCHA_SECRET_KEY', 'ADD_OWN');

?>
