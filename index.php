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
    
    <link
      rel="stylesheet"
      type="text/css"
      href="assets/css/appb222.css?v=214a6e5c0e"
      media="screen"
    />

    <link
      rel="stylesheet"
      type="text/css"
      href="assets/css/homeb222.css?v=214a6e5c0e"
      media="screen"
    />
    <link
      rel="stylesheet"
      type="text/css"
      href="assets/css/listingb222.css?v=214a6e5c0e"
      media="screen"
    />
  </head>
  <body class="home-template">
    <header class="m-header js-header">
      <div class="m-mobile-topbar" data-aos="fade-down">
        <button
          class="m-icon-button in-mobile-topbar js-open-menu"
          aria-label="Open menu"
        >
          <span class="icon-menu" aria-hidden="true"></span>
        </button>
        <a href="index.php" class="m-site-name in-mobile-topbar">
          Athena
        </a>
      </div>

      <div class="m-menu js-menu">
        <button
          class="m-icon-button outlined as-close-menu js-close-menu"
          aria-label="Close menu"
        >
          <span class="icon-close"></span>
        </button>
        <div class="m-menu__main" data-aos="fade-down">
          <div class="l-wrapper">
            <div class="m-nav js-main-nav">
              <nav
                class="m-nav__left js-main-nav-left"
                role="navigation"
                aria-label="Main menu"
              >
                <ul>
                  <li class="only-desktop">
                    <a href="index.php" class="m-site-name in-desktop-menu">
                      Athena
                    </a>
                  </li>

                  <li class="nav-home nav-current">
                    <a href="index.php">Blog</a>
                  </li>
                  <li class="nav-about">
                    <a href="about/index.php">Know Us !</a>
                  </li>

                  <li class="more">
                    <span>
                      <a
                        href="javascript:void(0);"
                        class="js-open-secondary-menu"
                      >
                        Dive more
                        <span
                          class="icon-chevron-down"
                          aria-hidden="true"
                        ></span>
                      </a>
                    </span>
                  </li>
                  <li class="submenu-option js-submenu-option">
                    <button
                      class="m-icon-button in-menu-main more js-toggle-submenu"
                      aria-label="Open submenu"
                    >
                      <span class="icon-more" aria-hidden="true"></span>
                    </button>
                    <div class="m-submenu js-submenu">
                      <div class="l-wrapper in-submenu">
                        <section class="m-recent-articles">
                          <h3 class="m-submenu-title in-recent-articles">
                            Recent Blogs
                          </h3>
                          <div class="glide js-recent-slider">
                            <div class="glide__track" data-glide-el="track">
                              <div class="glide__slides">
                            <?php foreach(array_slice($posts, 0, 3) as $recent ){ ?>
                                <div class="glide__slide">
                                  <a
                                    href="post.php?post_link=<?=$recent['id']?>"
                                    class="m-recent-article"
                                  >
                                    <div class="m-recent-article__picture">
                                      <img
                                        src="<?=$recent['header']?>"
                                        loading="lazy"
                                        alt=""
                                        onerror=this.src="../account/img/default.png"
                                      />
                                    </div>
                                    <h3
                                      class="
                                        m-recent-article__title
                                        js-recent-article-title
                                      "
                                      title="<?=$recent['title']?>"
                                    >
                                      <?=$recent['title']?>
                                    </h3>
                                    <span class="m-recent-article__date"
                                      ><?=TimePost($recent['created_at'])?></span
                                    >
                                  </a>
                                </div>
                                <?php } ?>
                               
                              </div>
                            </div>
                          </div>
                        </section>
                        <section class="m-tags">
                          <h3 class="m-submenu-title">Tags</h3>
                          <ul>
                          <?php $categories = getAllCategory($con); 
                          foreach($categories as $category){
                          ?>
                            <li>
                              <a href="tag/posts.php?category_id=<?=$category['id']?>"><?=$category['name']?></a>
                            </li>
                          <?php } ?>
                          </ul>
                        </section>
                      </div>
                    </div>
                  </li>
                </ul>
              </nav>
              <!--
  <div class="form-outline">
    <input type="search" id="form1" class="form-control" placeholder="Search" />
  </div>
  <button type="button" class="btn btn-primary" style="background: #FF0000; color: #fff; border: none; margin: 10px;">
    <i class="fa fa-search"></i>
  </button>-->
  
                <div
                  class="m-toggle-darkmode js-tooltip"
                  data-tippy-content="Toggle mode"
                  tabindex="0"
                >
                  <label for="toggle-darkmode" class="sr-only">
                    Toggle mode
                  </label>
                  <input
                    id="toggle-darkmode"
                    type="checkbox"
                    class="js-toggle-darkmode"
                  />
                  <div>
                    <span class="icon-moon moon" aria-hidden="true"></span>
                    <span class="icon-sunny sun" aria-hidden="true"></span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    
