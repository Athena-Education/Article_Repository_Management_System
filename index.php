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
    <link
      rel="preload"
      href="assets/js/vendorb222.js?v=214a6e5c0e"
      as="script"
    />
    <link rel="preload" href="assets/js/appb222.js?v=214a6e5c0e" as="script" />
    <link rel="preconnect" href="https://polyfill.io/" />
    <link rel="dns-prefetch" href="https://polyfill.io/" />
    <link
      rel="preload"
      href="assets/css/homeb222.css?v=214a6e5c0e"
      as="style"
    />
    <link
      rel="preload"
      href="assets/css/listingb222.css?v=214a6e5c0e"
      as="style"
    />
    <link rel="preload" href="assets/js/homeb222.js?v=214a6e5c0e" as="script" />
    <style>
      @font-face {
        font-family: "Source Sans Pro";
        font-style: normal;
        font-weight: 400;
        font-display: swap;
        src: local("Source Sans Pro Regular"), local("SourceSansPro-Regular"),
          url("assets/fonts/source-sans-pro/latin/source-sans-pro-regularb222.woff2?v=214a6e5c0e")
            format("woff2"),
          url("assets/fonts/source-sans-pro/latin/source-sans-pro-regularb222.woff?v=214a6e5c0e")
            format("woff");
      }

      /* source-sans-pro-600 */
      @font-face {
        font-family: "Source Sans Pro";
        font-style: normal;
        font-weight: 600;
        font-display: swap;
        src: local("Source Sans Pro SemiBold"), local("SourceSansPro-SemiBold"),
          url("assets/fonts/source-sans-pro/latin/source-sans-pro-600b222.woff2?v=214a6e5c0e")
            format("woff2"),
          url("assets/fonts/source-sans-pro/latin/source-sans-pro-600b222.woff?v=214a6e5c0e")
            format("woff");
      }

      /* source-sans-pro-700 */
      @font-face {
        font-family: "Source Sans Pro";
        font-style: normal;
        font-weight: 700;
        font-display: swap;
        src: local("Source Sans Pro Bold"), local("SourceSansPro-Bold"),
          url("assets/fonts/source-sans-pro/latin/source-sans-pro-700b222.woff2?v=214a6e5c0e")
            format("woff2"),
          url("assets/fonts/source-sans-pro/latin/source-sans-pro-700b222.woff?v=214a6e5c0e")
            format("woff");
      }

      /* iconmoon */
      @font-face {
        font-family: "icomoon";
        font-weight: normal;
        font-style: normal;
        font-display: swap;
        src: url("assets/fonts/icomoon/icomoon7f84.eot?101fc3?v=214a6e5c0e");
        src: url("assets/fonts/icomoon/icomoon2c17.eot?101fc3#iefix?v=214a6e5c0e")
            format("embedded-opentype"),
          url("assets/fonts/icomoon/icomoon7f84.ttf?101fc3?v=214a6e5c0e")
            format("truetype"),
          url("assets/fonts/icomoon/icomoon7f84.woff?101fc3?v=214a6e5c0e")
            format("woff"),
          url("assets/fonts/icomoon/icomoon2c17.svg?101fc3#icomoon?v=214a6e5c0e")
            format("svg");
      }
    </style>
