<!DOCTYPE html>
<html lang="en">
  <meta http-equiv="content-type" content="text/html;charset=utf-8" />
  <?php
            include ('connection.php');
          include ('function.php'); 
     $url_visit = $_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
     addVisit($con, $_SERVER['SERVER_ADDR'], $_SERVER['HTTP_USER_AGENT'], $url_visit); 
          $posts = getFinalPost($con);
          $count=1;
            
          ?>
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>Blog | Athena</title>
    <meta name="HandheldFriendly" content="True" />
    <link rel="icon" type="image/jpg" href="https://arms-cse3001.42web.io/account/img/logo.ico" />
    <meta name="viewport" content="width=device-width, initial-scale=0.7" />
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/typed.js/2.0.11/typed.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="preload" href="assets/css/appb222.css?v=214a6e5c0e" as="style" />
    <meta http-equiv="Cache-Control" content="no-cache, no-store, must-revalidate"/>
    <meta http-equiv="Pragma" content="no-cache"/>
    <meta http-equiv="Expires" content="0"/>
    <link
      rel="preload"
      href="assets/js/manifestb222.js?v=214a6e5c0e"
      as="script"
    />
    <link
      rel="preload"
      href="assets/js/vendor/content-api.minb222.js?v=214a6e5c0e"
      as="script"
    />
