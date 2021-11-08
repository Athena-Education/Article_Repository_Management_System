<?php 
session_start();
$con = mysqli_connect('SERVER', 'USERNAME', 'PASSWORD', 'DBNAME');
if (!$con){
    $_SESSION['connectiondb']="false";
}
else {
     $_SESSION['connectiondb']="true";
}

define('CONTACTFORM_RECAPTCHA_SITE_KEY', 'Enter-yours');
define('CONTACTFORM_RECAPTCHA_SECRET_KEY', 'Enter-yours');
?>
