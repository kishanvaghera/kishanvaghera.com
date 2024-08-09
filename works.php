<?php
$name="";
$linkName="";
$blogIimage="";
$blogDescription="";
$blogLink="";
$blogCategory="";
$blogContent="";
$blogStartDate="";
$sliderDataArr=array();
$blogLongDesc="";
$FeaturesArr=array();

$id=$_GET['id'];
if($id!=""){
    $jsonFile = './data/1.json';

    $jsonData = file_get_contents($jsonFile);
    $dataObject = json_decode($jsonData,true);
    
    foreach($dataObject as $value){
        if($value['link-name']==$id){
            $name=$value['name'];
            $blogIimage=$value['blog-image'];
            $blogDescription=$value['blog-description'];
            $blogLink=$value['blog-link'];
            $blogCategory=$value['blog-Category'];
            $blogContent=$value['blog-content'];
            $blogStartDate=$value['blog-start-date'];
            $sliderDataArr=$value['slider-data'];
            $blogLongDesc=$value['blog-long-desc'];
            $FeaturesArr=$value['Features'];
            $linkName=$value['link-name'];
        }
    }
}

?>
<!DOCTYPE html>
<html class="no-js" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="description" content="Experienced Full Stack Developer proficient in PHP, WordPress, Node.js, React, React Native, JavaScript, MySQL, Electron.js, Express.js, and Socket.io. Offering high-quality web and mobile app development services.">
    <meta name="keywords" content="Kishan Vaghera, Kishan Vaghera Full Stack Developer, Full Stack Developer, PHP, WordPress, Node.js, React, React Native, JavaScript, MySQL, Electron.js, Express.js, Socket.io, Web Development, Mobile App Development">
   <!-- Site Title -->
   <title>Full Stack Developer - Kishan Vaghera</title>
   <!-- Place favicon.ico in the root directory -->
   <link rel="apple-touch-icon" href="assets/img/favicon.png" />
   <link rel="shortcut icon" type="image/png" href="assets/img/favicon.png" />
   <!-- CSS here -->
   <link rel="stylesheet" href="assets/css/animate.min.css" />
   <link rel="stylesheet" href="assets/css/bootstrap.min.css" />
   <link rel="stylesheet" href="assets/css/font-awesome-pro.min.css" />
   <link rel="stylesheet" href="assets/css/flaticon_gerold.css" />
   <link rel="stylesheet" href="assets/css/nice-select.css" />
   <link rel="stylesheet" href="assets/css/backToTop.css" />
   <link rel="stylesheet" href="assets/css/owl.carousel.min.css" />
   <link rel="stylesheet" href="assets/css/swiper.min.css" />
   <link rel="stylesheet" href="assets/css/odometer-theme-default.css" />
   <link rel="stylesheet" href="assets/css/magnific-popup.css" />
   <link rel="stylesheet" href="assets/css/main.css" />
   <link rel="stylesheet" href="assets/css/light-mode.css" />
   <link rel="stylesheet" href="assets/css/responsive.css" />
</head>
<body>
   <!-- Preloader Area Start -->
   <div class="preloader">
      <svg viewBox="0 0 1000 1000" preserveAspectRatio="none">
         <path id="preloaderSvg" d="M0,1005S175,995,500,995s500,5,500,5V0H0Z"></path>
      </svg>
      <div class="preloader-heading">
         <div class="load-text">
            <span>L</span>
            <span>o</span>
            <span>a</span>
            <span>d</span>
            <span>i</span>
            <span>n</span>
            <span>g</span>
         </div>
      </div>
   </div>
   <!-- Preloader Area End -->
   <!-- start: Back To Top -->
   <div class="progress-wrap" id="scrollUp">
      <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
         <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
      </svg>
   </div>
   <!-- end: Back To Top -->
   <!-- HEADER START -->
   <header class="tj-header-area header-absolute works-page">
      <div class="container">
         <div class="row">
            <div class="col-12 d-flex flex-wrap align-items-center">
               <div class="logo-box">
                  <a href="/">
                     <img src="assets/img/logo/logo.png" alt="" />
                  </a>
               </div>
               <div class="header-info-list d-none d-md-inline-block">
                  <ul class="ul-reset">
                     <li><a href="javascript:void(0)">Kishan Vaghera</a></li>
                  </ul>
               </div>
               <div class="header-menu">
                  <nav>
                     <ul>
                        <li><a href="/">Services</a></li>
                        <li><a href="/" class="current-menu-ancestor">Works</a></li>
                        <li><a href="/">Resume</a></li>
                        <li><a href="/">Skills</a></li>
                        <!-- <li><a href="#testimonials-section">Testimonials</a></li> -->
                        <li><a href="/">Contact</a></li>
                     </ul>
                  </nav>
               </div>
               <div class="header-button">
                  <a href="/" class="btn tj-btn-primary">Hire me!</a>
               </div>
               <div class="menu-bar d-lg-none">
                  <button>
                     <span></span>
                     <span></span>
                     <span></span>
                     <span></span>
                  </button>
               </div>
            </div>
         </div>
      </div>
   </header>
   <header class="tj-header-area header-2 header-sticky sticky-out">
      <div class="container">
         <div class="row">
            <div class="col-12 d-flex flex-wrap align-items-center">
               <div class="logo-box">
                  <a href="/">
                     <img src="assets/img/logo/logo.png" alt="" />
                  </a>
               </div>
               <div class="header-info-list d-none d-md-inline-block">
                  <ul class="ul-reset">
                     <li><a href="javascript:void(0)">Kishan Vaghera</a></li>
                  </ul>
               </div>
               <div class="header-menu">
                  <nav>
                     <ul>
                        <li><a href="/">Services</a></li>
                        <li><a href="/" class="current-menu-ancestor">Works</a></li>
                        <li><a href="/">Resume</a></li>
                        <li><a href="/">Skills</a></li>
                        <!-- <li><a href="#testimonials-section">Testimonials</a></li> -->
                        <li><a href="/">Contact</a></li>
                     </ul>
                  </nav>
               </div>
               <div class="header-button">
                  <a href="/" class="btn tj-btn-primary">Hire me!</a>
               </div>
               <div class="menu-bar d-lg-none">
                  <button>
                     <span></span>
                     <span></span>
                     <span></span>
                     <span></span>
                  </button>
               </div>
            </div>
         </div>
      </div>
   </header>
   <!-- HEADER END -->
   <main class="site-content works-content" id="content">
       <!-- start: Portfolio Popup -->
      <div id="portfolio-wrapper" class="">
         <div class="popup_modal_img">
            <img src="<?=$blogIimage?>" alt="" />
         </div>
         <div class="popup_modal_content">
            <div class="portfolio_info">
               <div class="portfolio_info_text">
                  <h2 class="title"><?=$name?></h2>
                  <div class="desc">
                     <p>
                        <?=$blogDescription?>
                     </p>
                  </div>
                  <a href="<?=$blogLink?>" target="_blank" class="btn tj-btn-primary">live preview <i class="fal fa-arrow-right"></i></a>
               </div>
               <div class="portfolio_info_items">
                  <div class="info_item">
                     <div class="key">Category</div>
                     <div class="value"><?=$blogCategory?></div>
                  </div>
                  <div class="info_item">
                     <div class="key">Client</div>
                     <div class="value"><?=$blogCategory?></div>
                  </div>
                  <div class="info_item">
                     <div class="key">Start Date</div>
                     <div class="value"><?=$blogStartDate?></div>
                  </div>
               </div>
            </div>
            
            <?php
                if(!empty($sliderDataArr)){
            ?>
            <div class="swiper-container portfolio_gallery_swiper" style="margin-top:40px;">
              <div class="swiper-wrapper">
                 <?php
                    
                    foreach($sliderDataArr as $value){
                ?>
                <div class="swiper-slide">
                    <div class="gallery_item">
                      <img class="gallery_item_img" src="<?=$value?>" alt="" />
                   </div>
                </div>
                <?php
                    }
                 ?>
              </div>
            </div>
            <?php
                }
            ?>
            
            <div class="portfolio_description">
               <h2 class="title">Project Description</h2>
               <div class="desc">
                  <p>
                     <?=$blogLongDesc?>
                  </p>
               </div>
            </div>
            
            <?php
                if(!empty($FeaturesArr)){
            ?>
            <div class="portfolio_story_approach">
               <div class="portfolio_story">
                  <div class="story_title">
                     <h4 class="title">Product Features</h4>
                  </div>
                  <div class="story_content">
                    <?php
                        foreach($FeaturesArr as $value){
                    ?>
                     <p>
                        <?=$value?>
                     </p>
                    <?php
                        }
                    ?>
                  </div>
               </div>
            </div>
            <?php
                }
            ?>
         </div>
      </div>
      <!-- end: Portfolio Popup -->
      
      
   </main>
   <!-- FOOTER AREA START -->
   <footer class="tj-footer-area">
      <div class="container">
         <div class="row">
            <div class="col-md-12 text-center">
               <div class="footer-logo-box">
                  <a href="/"><img src="assets/img/logo/logo.png" alt="" /></a>
               </div>
               <div class="footer-menu">
                  <nav>
                     <ul>
                        <li><a href="#services-section">Services</a></li>
                        <li><a href="#works-section">Works</a></li>
                        <li><a href="#resume-section">Resume</a></li>
                        <li><a href="#skills-section">Skills</a></li>
                        <li><a href="#testimonials-section">Testimonials</a></li>
                        <li><a href="#contact-section">Contact</a></li>
                     </ul>
                  </nav>
               </div>
               <div class="copy-text">
                  <p>&copy; 2024 All rights reserved by <a href="/" target="_blank">Kishan Vaghera</a></p>
               </div>
            </div>
         </div>
      </div>
   </footer>
   <!-- FOOTER AREA END -->
   <!-- CSS here -->
   <script src="assets/js/jquery.min.js"></script>
   <script src="assets/js/bootstrap.bundle.min.js"></script>
   <script src="assets/js/nice-select.min.js"></script>
   <script src="assets/js/backToTop.js"></script>
   <script src="assets/js/smooth-scroll.js"></script>
   <script src="assets/js/appear.min.js"></script>
   <script src="assets/js/wow.min.js"></script>
   <script src="assets/js/gsap.min.js"></script>
   <script src="assets/js/one-page-nav.js"></script>
   <script src="assets/js/lightcase.js"></script>
   <script src="assets/js/owl.carousel.min.js"></script>
   <script src="assets/js/swiper.min.js"></script>
   <script src="assets/js/imagesloaded-pkgd.js"></script>
   <script src="assets/js/isotope.pkgd.min.js"></script>
   <script src="assets/js/odometer.min.js"></script>
   <script src="assets/js/magnific-popup.js"></script>
   <script src="assets/js/validate.min.js"></script>
   <script src="assets/js/main.js"></script>
   <script>
       $(document).ready(()=>{
           const domainName=window.location.host;
           const linkName=encodeURIComponent("<?=$linkName?>");
        //   window.location.replace("/"+linkName);
        window.history.pushState('page2', 'Title', linkName);
       })
   </script>
</body>
</html>