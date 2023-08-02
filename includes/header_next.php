<?php
include "../includes/connection.php";
include "assets/php/form-process.php";
?>
<!DOCTYPE html>
<html lang="en">
  <head>

 <!-- Google tag (gtag.js) -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=UA-248327497-1"></script>
  <script>
    window.onload = function() {
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());
      gtag('config', 'UA-248327497-1');
      
      (function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
      new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
      j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
      'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
      })(window,document,'script','dataLayer','GTM-PQF7RQB');
    };
  </script>
<!-- End Google Tag Manager -->

      
      
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- title -->
    <meta name="keywords" content="<?php echo $meta_keywords; ?>">
    <title><?php echo $websitetitle; ?></title>
    <meta name="description" content="<?php echo $meta_description; ?>"/>
  

    
     <!--whats app widget end-->
    <!-- bootstrap CSS -->
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css" />
    <!-- fontawesome CSS -->
    <!--<link rel="stylesheet" href="../assets/css/fontawesome.min.css" />-->
    <!-- envy icon CSS -->
    <link rel="stylesheet" href="../assets/css/envyicon.min.css" />
    <!-- animate CSS -->
    <link rel="stylesheet" href="../assets/css/animate.min.css" />
    <!-- magnific popup CSS -->
    <link rel="stylesheet" href="../assets/css/magnific-popup.min.css" />
    <!-- owl-carousel CSS -->
    <link rel="stylesheet" href="../assets/css/owl.carousel.min.css" />
    <!-- meanmenu CSS -->
    <link rel="stylesheet" href="../assets/css/meanmenu.min.css" />
    <!-- main style CSS -->
    <link rel="stylesheet" href="../assets/css/style.css" />
      <!--font circular stds-->
    <link rel="stylesheet" href="../assets/css/circularStd.css" />
    <!-- responsive CSS -->
    <link rel="stylesheet" href="../assets/css/responsive.css" />
    <!--custom css file-->
    <link rel="stylesheet" href="../assets/css/custom.css"/>
    <link rel="stylesheet" href="../assets/css/gallery.css" />

    <!-- jquery link -->

    <!-- favicon -->
    <link
      rel="icon"
      href="../assets/img/logos/favicon.png"
      type="image/png"
      sizes="16x16"
    />
    
    <meta property="og:url" content="https://www.uidesignz.com/" />
    <meta property="og:locale"             content="en_US" />
    <meta property="og:type"               content="article" />
    <meta property="og:title"              content="<?php echo $meta_title; ?>" />
    <meta property="og:description"        content="<?php echo $meta_description; ?>" />
    <meta property="og:image" content="https://www.uidesignz.com/assets/img/logos/logo.svg" />
    <meta property="og:site_name" content="UiDesignz" />

    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:site" content="UiDesignz">
    <meta name="twitter:title" content="<?php echo $meta_title; ?>">
    <meta name="twitter:description" content="<?php echo $meta_description; ?>">
    <meta name="twitter:image" content="https://www.uidesignz.com/assets/img/logos/logo.svg">
    
  </head>

  <body>
      
      <!-- Google Tag Manager (noscript) -->
<noscript>
  <iframe src="https://www.googletagmanager.com/ns.html?id=GTM-PQF7RQB"
  height="0" width="0" style="display:none;visibility:hidden"></iframe>
</noscript>

<!-- End Google Tag Manager (noscript) -->

       <header class="header">
  <div class="container">
    <div class="row">
      <nav class="navBar pt-lg-3" style="position:relative;z-index:999;">

        <div class="navbar-brand brand">
          <a href="https://www.uidesignz.com/"><img src="https://www.uidesignz.com/assets/img/logos/logo.svg" alt="logo"></a>
                 <img class="d-lg-none opn" id="menuBar" src="../assets/img/logos/Menu-bar.svg" alt="menu bar">
        </div>
        <div class="links">
          <ul>
            <li class=""><a href="/index.php" class="">Home</a></li>
            <li class=""><a href="/about-us" class="">About us</a></li>
   
              <li class="categories"><span class="iconService active">Services
              <img class=" d-none d-lg-inline-block arrow-w-12" src="/assets/img/icons/down-white-arrow.svg" alt="down-white-arrow">
              <img class="ps-lg-2 d-inline-block d-lg-none  arrow-w-16 imgScnd" src="/assets/img/icons/arrow-down.svg" alt="down-black-arrow"></span>
                <div class="maga-menu">
                  <!-- maga-menu -->
            <ul>
                <li><a href="/services" class="">All Services</a></li>
                <li><a href="/web-design-service" class="">Web Design</a></li>
                <li><a href="/dashboard-design-service" class="">Dashboard Design</a></li>
                <li><a href="/mobile-app-design-service" class="">Mobile App Design</a></li>
                <li><a href="/frontend-dev-service" class="">Front-End Development</a></li>
                <li class="Noborder"><a href="/design-system-service" class="">Design System</a></li>
            </ul>
        </div>
            </li>
        
            <li class=""><a href="/portfolio" class="">Portfolio</a></li>
            
            <li class=""><a href="/design-system" class="">Design System</a></li>
            <li class=""><a href="/blog" class="">Blogs</a></li>
            
            <div class="cta-btn d-none d-xxl-block">
              <a href="https://calendly.com/uidesign0005/30min" class="btn rounded-pill">Schedule a Meeting</a>
            </div>
            
             <div class="cta-btn ps-3 pe-5 mt-4 d-block d-xxl-none">
                <a href="https://calendly.com/uidesign0005/30min" class="btn py-3 py-lg-0 rounded-pill">
                  Schedule a Meeting
                </a>
              </div>
          </ul>
          
        </div>

      </nav>
    </div>
  </div>
</header>

     <div class="whatsApp">
     <a target="_blank" href="https://api.whatsapp.com/send?phone=13235225370"style="position:fixed;bottom:25px; right:20px;  z-index:2;">  <img style="width:60px; height: 60px;"src="https://www.uidesignz.com/assets/img//whatsApp.svg" alt="whatsapp icon desktop"></a></div>
    <!-- end header area -->