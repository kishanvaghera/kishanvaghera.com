<?php

$jsonFile = './data/1.json';

$jsonData = file_get_contents($jsonFile);
$dataObject = json_decode($jsonData,true);
    
function truncateString($string, $limit, $suffix = '...') {
    if (strlen($string) > $limit) {
        return substr($string, 0, $limit) . $suffix;
    } else {
        return $string;
    }
}

?>
<!DOCTYPE html>
<html class="no-js" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
   <meta http-equiv="x-ua-compatible" content="ie=edge" />
   <meta name="viewport" content="width=device-width, initial-scale=1" />
   <!-- Site Title -->
   <title>Full Stack Developer - Kishan Vaghera</title>
   <!-- Place favicon.ico in the root directory -->
   <link rel="apple-touch-icon" href="./favicon.png" />
   <link rel="shortcut icon" type="image/png" href="./favicon.png" />
   <link rel="icon" type="image/x-icon" href="./favicon.png">
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
   <meta name="google-site-verification" content="yCSDjHl4W8O0M0cYo9jBjtCW9hAf3naOH0wkVqUBXd8" />
   <meta name="description" content="Experienced Full Stack Developer proficient in PHP, WordPress, Node.js, React, React Native, JavaScript, MySQL, Electron.js, Express.js, and Socket.io. Offering high-quality web and mobile app development services.">
    <meta name="keywords" content="Kishan Vaghera, Kishan Vaghera Full Stack Developer, Full Stack Developer, PHP, WordPress, Node.js, React, React Native, JavaScript, MySQL, Electron.js, Express.js, Socket.io, Web Development, Mobile App Development">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
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
   <header class="tj-header-area header-absolute">
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
                        <li><a href="#services-section">Services</a></li>
                        <li><a href="#works-section">Works</a></li>
                        <li><a href="#resume-section">Resume</a></li>
                        <li><a href="#skills-section">Skills</a></li>
                        <!-- <li><a href="#testimonials-section">Testimonials</a></li> -->
                        <li><a href="#contact-section">Contact</a></li>
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
                        <li><a href="#services-section">Services</a></li>
                        <li><a href="#works-section">Works</a></li>
                        <li><a href="#resume-section">Resume</a></li>
                        <li><a href="#skills-section">Skills</a></li>
                        <!-- <li><a href="#testimonials-section">Testimonials</a></li> -->
                        <li><a href="#contact-section">Contact</a></li>
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
   <main class="site-content" id="content">
      <!-- HERO SECTION START -->
      <section class="hero-section d-flex align-items-center" id="intro">
         <div class="intro_text">
            <svg viewBox="0 0 1320 300">
               <text x="50%" Y="50%" text-anchor="middle">HI</text>
            </svg>
         </div>
         <div class="container">
            <div class="row align-items-center">
               <div class="col-md-6">
                  <div class="hero-content-box">
                     <span class="hero-sub-title">I am Kishan</span>
                     <h1 class="hero-title">Fullstack Developer</h1>
                     <div class="hero-image-box d-md-none text-center">
                        <img src="assets/img/hero/me.jpg" alt="" />
                     </div>
                     <p class="lead">
                        Welcome to my portfolio! I am a passionate and experienced Fullstack Developer with a strong foundation. I specialize in creating dynamic, responsive, and scalable web applications.
                     </p>
                     <div class="button-box d-flex flex-wrap align-items-center">
                        <a href="/" class="btn tj-btn-secondary">Download CV <i class="flaticon-download"></i></a>
                        <ul class="ul-reset social-icons">
                           <li>
                              <a href="https://www.instagram.com/kishanvaghera_8219/" target="_blank"><i class="fa-brands fa-instagram"></i></a>
                           </li>
                           <li>
                              <a href="https://in.linkedin.com/in/kishan-vaghera-87a019220" target="_blank"><i class="fa-brands fa-linkedin-in"></i></a>
                           </li>
                           <li>
                              <a href="https://github.com/VagheraKishan" target="_blank"><i class="fa-brands fa-github"></i></a>
                           </li>
                        </ul>
                     </div>
                  </div>
               </div>
               <div class="col-md-6 d-none d-md-block">
                  <div class="hero-image-box text-center">
                     <img src="assets/img/hero/me.jpg" alt="" />
                  </div>
               </div>
            </div>
            <div class="funfact-area">
               <div class="row">
                  <div class="col-6 col-lg-4">
                     <div class="funfact-item d-flex flex-column flex-sm-row flex-wrap align-items-center">
                        <div class="number"><span class="odometer" data-count="5">0</span></div>
                        <div class="text">Years of <br />Experience</div>
                     </div>
                  </div>
                  <div class="col-6 col-lg-4">
                     <div class="funfact-item d-flex flex-column flex-sm-row flex-wrap align-items-center">
                        <div class="number"><span class="odometer" data-count="15">0</span>+</div>
                        <div class="text">Project <br />Completed</div>
                     </div>
                  </div>
                  <div class="col-6 col-lg-4">
                     <div class="funfact-item d-flex flex-column flex-sm-row flex-wrap align-items-center">
                        <div class="number"><span class="odometer" data-count="50">0</span>+</div>
                        <div class="text">Happy <br />Clients</div>
                     </div>
                  </div>
                  <!-- <div class="col-6 col-lg-3">
                     <div class="funfact-item d-flex flex-column flex-sm-row flex-wrap align-items-center">
                        <div class="number"><span class="odometer" data-count="14">0</span></div>
                        <div class="text">Years of <br />Experience</div>
                     </div>
                  </div> -->
               </div>
            </div>
         </div>
      </section>
      <!-- HERO SECTION END -->
      <!-- SERVICES SECTION START -->
      <section class="services-section" id="services-section">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="section-header text-center">
                     <h2 class="section-title wow fadeInUp" data-wow-delay=".3s">My Quality Services</h2>
                     <p class="wow fadeInUp" data-wow-delay=".4s">
                       I transform your ideas and wishes into a unique web project that will inspire both you and your customers.
                     </p>
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-md-12">
                  <div class="services-widget position-relative">
                     <div class="service-item current d-flex flex-wrap align-items-center wow fadeInUp"
                        data-wow-delay=".5s">
                        <div class="left-box d-flex flex-wrap align-items-center">
                           <span class="number">01</span>
                           <h3 class="service-title">Basic & Dynamic Site</h3>
                        </div>
                        <div class="right-box">
                           <p>
                              I offer comprehensive website development services tailored to meet your unique needs, whether you're looking for a basic online presence or a dynamic, interactive platform.
                           </p>
                        </div>
                        <i class="flaticon-up-right-arrow"></i>
                        <button class="service-link"></button>
                     </div>
                     <div class="service-item current d-flex flex-wrap align-items-center wow fadeInUp"
                        data-wow-delay=".5s">
                        <div class="left-box d-flex flex-wrap align-items-center">
                           <span class="number">02</span>
                           <h3 class="service-title">Social Networking Site</h3>
                        </div>
                        <div class="right-box">
                           <p>
                              Created a social networking site with features such as user profiles, real-time chat, and activity feeds. Ensured high performance and scalability.
                           </p>
                        </div>
                        <i class="flaticon-up-right-arrow"></i>
                        <button class="service-link"></button>
                     </div>
                     <div class="service-item d-flex flex-wrap align-items-center wow fadeInUp" data-wow-delay=".8s">
                        <div class="left-box d-flex flex-wrap align-items-center">
                           <span class="number">03</span>
                           <h3 class="service-title">Task Management Tool</h3>
                        </div>
                        <div class="right-box">
                           <p>
                              Built a task management tool to help teams collaborate and manage projects efficiently. Implemented features like task assignments, deadlines, and progress tracking.
                           </p>
                        </div>
                        <i class="flaticon-up-right-arrow"></i>
                        <button class="service-link"></button>
                     </div>
                     <div class="service-item d-flex flex-wrap align-items-center wow fadeInUp" data-wow-delay=".8s">
                        <div class="left-box d-flex flex-wrap align-items-center">
                           <span class="number">04</span>
                           <h3 class="service-title">E-Commerce Site</h3>
                        </div>
                        <div class="right-box">
                           <p>
                              Developed a fully functional e-commerce platform with a modern, responsive design. Integrated payment gateways, user authentication, and real-time notifications.
                           </p>
                        </div>
                        <i class="flaticon-up-right-arrow"></i>
                        <button class="service-link"></button>
                     </div>
                     <div class="service-item current d-flex flex-wrap align-items-center wow fadeInUp"
                        data-wow-delay=".5s">
                        <div class="left-box d-flex flex-wrap align-items-center">
                           <span class="number">05</span>
                           <h3 class="service-title">Android & IOS App</h3>
                        </div>
                        <div class="right-box">
                           <p>
                              I specialize in creating high-quality Android and iOS applications that offer seamless performance, intuitive design, and innovative features. Whether you need a simple app or a complex, feature-rich solution.
                           </p>
                        </div>
                        <i class="flaticon-up-right-arrow"></i>
                        <button class="service-link"></button>
                     </div>
                     <div class="service-item d-flex flex-wrap align-items-center wow fadeInUp" data-wow-delay=".6s">
                        <div class="left-box d-flex flex-wrap align-items-center">
                           <span class="number">06</span>
                           <h3 class="service-title">ERP System</h3>
                        </div>
                        <div class="right-box">
                           <p>
                              My ERP (Enterprise Resource Planning) system development service provides businesses with comprehensive and customizable solutions to streamline their operations, improve efficiency, and enhance decision-making. I specialize in creating robust ERP systems tailored to meet the unique needs of your organization.
                           </p>
                        </div>
                        <i class="flaticon-up-right-arrow"></i>
                        <button class="service-link"></button>
                     </div>
                     <div class="service-item d-flex flex-wrap align-items-center wow fadeInUp" data-wow-delay=".7s">
                        <div class="left-box d-flex flex-wrap align-items-center">
                           <span class="number">07</span>
                           <h3 class="service-title">CRM System</h3>
                        </div>
                        <div class="right-box">
                           <p>
                              My CRM (Customer Relationship Management) system development service helps businesses effectively manage interactions with current and potential customers. I specialize in creating tailored CRM solutions to optimize customer relationships, improve sales processes, and drive business growth.
                           </p>
                        </div>
                        <i class="flaticon-up-right-arrow"></i>
                        <button class="service-link"></button>
                     </div>
                    
                     <div class="active-bg wow fadeInUp" data-wow-delay=".5s"></div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- SERVICES SECTION END -->
      <!-- start: Service Popup -->
      <div id="service-wrapper" class="popup_content_area zoom-anim-dialog mfp-hide">
         <div class="popup_modal_img">
            <img src="assets/img/services/modal-img.jpg" alt="" />
         </div>
         <div class="popup_modal_content">
            <div class="service_details">
               <div class="row">
                  <div class="col-lg-7 col-xl-8">
                     <div class="service_details_content">
                        <div class="service_info">
                           <h6 class="subtitle">SERVICES</h6>
                           <h2 class="title">UI/UX Design</h2>
                           <div class="desc">
                              <p>
                                 Elizabeth some dodgy chavs are you taking the piss faff about pardon amongst car boot a
                                 load of old tosh is
                                 cracking goal blow off telling brown.
                              </p>
                              <p>
                                 Brolly show off show off pick your nose and blow off well A bit of how’s your father
                                 tomfoolery blimey, me old
                                 mucker starkers Queen’s English dropped a clanger bite your arm spiffing good time
                                 burke Why chancer. Hotpot bum
                                 bag cracking goal young delinquent naff bugger cup of chars bender loo it’s all gone to
                                 pot the nancy cheeky.
                              </p>
                              <p>
                                 At public school cras bog some dodgy chav Richard Why argy bargy vagabon William bender
                                 matie boy, off his nut
                                 chancer Jeffrey up the kyver say mufty you mug ummm telling pear shaped Oxford owt to
                                 do with me do one so said
                                 are you taking his.
                              </p>
                           </div>
                           <h3 class="title">Services Process</h3>
                           <div class="desc">
                              <p>
                                 Elizabeth some dodgy chavs are you taking the piss faff about pardon amongst car boot a
                                 load of old tosh is
                                 cracking goal blow off telling brown.
                              </p>
                           </div>
                           <ul>
                              <li>Reinvent Your Business to Better</li>
                              <li>Pioneering the Internet's First</li>
                              <li>Pioneering the Design World's First</li>
                              <li>Pioneering the Design World's First</li>
                              <li>Pioneering the Design World's First</li>
                              <li>Pioneering the Design World's First</li>
                           </ul>
                        </div>
                     </div>
                  </div>
                  <div class="col-lg-5 col-xl-4">
                     <div class="tj_main_sidebar">
                        <div class="sidebar_widget services_list">
                           <div class="widget_title">
                              <h3 class="title">All Services</h3>
                           </div>
                           <ul>
                              <li class="active">
                                 <button>
                                    <i class="flaticon-design"></i>
                                    Branding Design
                                 </button>
                              </li>
                              <li>
                                 <button>
                                    <i class="flaticon-3d-movie"></i>
                                    3D Animation
                                 </button>
                              </li>
                              <li>
                                 <button>
                                    <i class="flaticon-ux-design"></i>
                                    UI/UX Design
                                 </button>
                              </li>
                              <li>
                                 <button>
                                    <i class="flaticon-web-design"></i>
                                    Web Design
                                 </button>
                              </li>
                              <li>
                                 <button>
                                    <i class="flaticon-ui-design"></i>
                                    App Design
                                 </button>
                              </li>
                           </ul>
                        </div>
                        <div class="sidebar_widget contact_form">
                           <div class="widget_title">
                              <h3 class="title">Get in Touch</h3>
                           </div>
                           <form>
                              <div class="form_group">
                                 <input type="text" name="name" id="name" placeholder="Name" autocomplete="off" />
                              </div>
                              <div class="form_group">
                                 <input type="email" name="semail" id="semail" placeholder="Email" autocomplete="off" />
                              </div>
                              <div class="form_group">
                                 <textarea name="smessage" id="smessage" placeholder="Your message"
                                    autocomplete="off"></textarea>
                              </div>
                              <div class="form_btn">
                                 <button class="btn tj-btn-primary" type="submit">Send Message</button>
                              </div>
                           </form>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- end: Service Popup -->
      <!-- PORTFOLIO SECTION START -->
      <section class="portfolio-section" id="works-section">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="section-header text-center">
                     <h2 class="section-title wow fadeInUp" data-wow-delay=".3s">My Recent Works</h2>
                     <p class="wow fadeInUp" data-wow-delay=".4s">
                        I put your ideas and thus your wishes in the form of a unique web project that inspires you and
                        you customers.
                     </p>
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-md-12">
                  <div class="portfolio-filter text-center wow fadeInUp" data-wow-delay=".5s">
                     <div class="button-group filter-button-group">
                        <button data-filter="*" class="active">All</button>
                        <button data-filter=".web">Websites</button>
                        <button data-filter=".apps">Apps</button>
                        <!--<button data-filter=".mobile-app">Apps</button>-->
                        <div class="active-bg"></div>
                     </div>
                  </div>
                  <div class="portfolio-box wow fadeInUp" data-wow-delay=".6s">
                     <div class="portfolio-sizer"></div>
                     <div class="gutter-sizer"></div>
                     
                    <?php
                        foreach($dataObject as $value){
                    ?>
                     <div class="portfolio-item <?=$value['blog-Category']=="Website"?"web":"apps"?>">
                        <div class="image-box">
                           <img src="<?=$value['blog-image']?>" alt="" />
                        </div>
                        <div class="content-box">
                           <h3 class="portfolio-title"><?=$value['name']?></h3>
                           <p><?=truncateString($value['blog-description'],100)?></p>
                           <i class="flaticon-up-right-arrow"></i>
                           <a href="/<?=$value['link-name']?>" class="portfolio-link"></a>
                        </div>
                     </div>
                    <?php
                        }
                     ?>
                     <!--<div class="portfolio-item web">-->
                     <!--   <div class="image-box">-->
                     <!--      <img src="assets/img/portfolio/1.jpg" alt="" />-->
                     <!--   </div>-->
                     <!--   <div class="content-box">-->
                     <!--      <h3 class="portfolio-title">New Age</h3>-->
                     <!--      <p>Project was about precision and information.</p>-->
                     <!--      <i class="flaticon-up-right-arrow"></i>-->
                     <!--      <button data-mfp-src="#portfolio-wrapper" class="portfolio-link modal-popup"></button>-->
                     <!--   </div>-->
                     <!--</div>-->
                     <!--<div class="portfolio-item mobile-app">-->
                     <!--   <div class="image-box">-->
                     <!--      <img src="assets/img/portfolio/3.jpg" alt="" />-->
                     <!--   </div>-->
                     <!--   <div class="content-box">-->
                     <!--      <h3 class="portfolio-title">Sebastian</h3>-->
                     <!--      <p>Project was about precision and information.</p>-->
                     <!--      <i class="flaticon-up-right-arrow"></i>-->
                     <!--      <button data-mfp-src="#portfolio-wrapper" class="portfolio-link modal-popup"></button>-->
                     <!--   </div>-->
                     <!--</div>-->
                     <!--<div class="portfolio-item apps">-->
                     <!--   <div class="image-box">-->
                     <!--      <img src="assets/img/portfolio/4.jpg" alt="" />-->
                     <!--   </div>-->
                     <!--   <div class="content-box">-->
                     <!--      <h3 class="portfolio-title">Mochnix</h3>-->
                     <!--      <p>Project was about precision and information.</p>-->
                     <!--      <i class="flaticon-up-right-arrow"></i>-->
                     <!--      <button data-mfp-src="#portfolio-wrapper" class="portfolio-link modal-popup"></button>-->
                     <!--   </div>-->
                     <!--</div>-->
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- PORTFOLIO SECTION END -->
      
      <!-- RESUME SECTION START -->
      <section class="resume-section" id="resume-section">
         <div class="container">
            <div class="row">
               <div class="col-md-6">
                  <div class="section-header wow fadeInUp" data-wow-delay=".3s">
                     <h2 class="section-title"><i class="flaticon-recommendation"></i> My Experience</h2>
                  </div>
                  <div class="resume-widget">
                     <div class="resume-item wow fadeInLeft" data-wow-delay=".4s">
                        <div class="time">2020 - Present</div>
                        <h3 class="resume-title">Full Stack Developer</h3>
                        <div class="institute">ENLIVEN DIGITAL CONTENT</div>
                     </div>
                     <div class="resume-item wow fadeInLeft" data-wow-delay=".5s">
                        <div class="time">2019 - 2020</div>
                        <h3 class="resume-title">Web Developer</h3>
                        <div class="institute">IBAIS Media</div>
                     </div>
                     <div class="resume-item wow fadeInLeft" data-wow-delay=".5s">
                        <div class="time">2019</div>
                        <h3 class="resume-title">Web Developer Training</h3>
                        <div class="institute">Sarvam Fx Institute</div>
                     </div>
                  </div>
               </div>
               <div class="col-md-6">
                  <div class="section-header wow fadeInUp" data-wow-delay=".4s">
                     <h2 class="section-title"><i class="flaticon-graduation-cap"></i> My Education</h2>
                  </div>
                  <div class="resume-widget">
                     <div class="resume-item wow fadeInRight" data-wow-delay=".5s">
                        <div class="time">2016  - 2019</div>
                        <h3 class="resume-title">BCA - Bachelor of Computer Applications</h3>
                        <div class="institute">Shree H.N.Shukla Group Of Colleges</div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- RESUME SECTION END -->
      <!-- SKILLS SECTION START -->
      <section class="skills-section" id="skills-section">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="section-header text-center">
                     <h2 class="section-title wow fadeInUp" data-wow-delay=".3s">My Skills</h2>
                     <p class="wow fadeInUp" data-wow-delay=".4s">
                        I put your ideas and thus your wishes in the form of a unique web project that inspires you and
                        you customers.
                     </p>
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-md-12">
                  <div class="skills-widget d-flex flex-wrap justify-content-center align-items-center">
                     <div class="skill-item wow fadeInUp" data-wow-delay=".3s">
                        <div class="skill-inner">
                           <div class="icon-box">
                              <img src="assets/img/icons/php.svg" alt="" />
                           </div>
                        </div>
                        <p>PHP</p>
                     </div>
                     <div class="skill-item wow fadeInUp" data-wow-delay=".8s">
                        <div class="skill-inner">
                           <div class="icon-box">
                              <img src="assets/img/icons/js.svg" alt="" />
                           </div>
                        </div>
                        <p>JavaScript</p>
                     </div>
                     <div class="skill-item wow fadeInUp" data-wow-delay=".5s">
                        <div class="skill-inner">
                           <div class="icon-box">
                              <img src="assets/img/icons/mysql.svg" alt="" />
                           </div>
                        </div>
                        <p>MySql</p>
                     </div>
                     <div class="skill-item wow fadeInUp" data-wow-delay=".6s">
                        <div class="skill-inner">
                           <div class="icon-box">
                              <img src="assets/img/icons/wp.svg" alt="" />
                           </div>
                        </div>
                        <p>WordPess</p>
                     </div>
                     <div class="skill-item wow fadeInUp" data-wow-delay=".7s">
                        <div class="skill-inner">
                           <div class="icon-box">
                              <img src="assets/img/icons/react.svg" alt="" />
                           </div>
                        </div>
                        <p>React</p>
                     </div>
                     <div class="skill-item wow fadeInUp" data-wow-delay=".7s">
                        <div class="skill-inner">
                           <div class="icon-box">
                              <img src="assets/img/icons/react.svg" alt="" />
                           </div>
                        </div>
                        <p>React Native</p>
                     </div>
                     <div class="skill-item wow fadeInUp" data-wow-delay=".4s">
                        <div class="skill-inner">
                           <div class="icon-box">
                              <img src="assets/img/icons/nodejs.svg" alt="" />
                           </div>
                        </div>
                        <p>Node.js</p>
                     </div>
                     <div class="skill-item wow fadeInUp" data-wow-delay=".5s">
                        <div class="skill-inner">
                           <div class="icon-box">
                              <img src="assets/img/icons/electron.svg" alt="" />
                           </div>
                        </div>
                        <p>Electron.js</p>
                     </div>
                     <div class="skill-item wow fadeInUp" data-wow-delay=".5s">
                        <div class="skill-inner">
                           <div class="icon-box">
                              <img src="assets/img/icons/express-js.svg" alt="" />
                           </div>
                        </div>
                        <p>Express.js</p>
                     </div>
                     <div class="skill-item wow fadeInUp" data-wow-delay=".5s">
                        <div class="skill-inner">
                           <div class="icon-box">
                              <img src="assets/img/icons/socket.svg" alt="" />
                           </div>
                        </div>
                        <p>Socket.IO</p>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- SKILLS SECTION END -->
      <!-- CONTACT SECTION START -->
      <section class="contact-section" id="contact-section">
         <div class="container">
            <div class="row">
               <div class="col-lg-6 col-md-7 order-2 order-md-1">
                  <div class="contact-form-box wow fadeInLeft" data-wow-delay=".3s">
                     <div class="section-header">
                        <h2 class="section-title">Let’s work together!</h2>
                        <p>I design and code beautifully simple things and i love what i do. Just simple like that!</p>
                     </div>
                     <div class="tj-contact-form">
                        <form id="contact-form">
                           <div class="row gx-3">
                              <div class="col-sm-6">
                                 <div class="form_group">
                                    <input type="text" name="conName" id="conName" placeholder="First name"
                                       autocomplete="off" />
                                 </div>
                              </div>
                              <div class="col-sm-6">
                                 <div class="form_group">
                                    <input type="text" name="conLName" id="conLName" placeholder="Last name"
                                       autocomplete="off" />
                                 </div>
                              </div>
                              <div class="col-sm-6">
                                 <div class="form_group">
                                    <input type="email" name="conEmail" id="conEmail" placeholder="Email address"
                                       autocomplete="off" />
                                 </div>
                              </div>
                              <div class="col-sm-6">
                                 <div class="form_group">
                                    <input type="tel" name="conPhone" id="conPhone" placeholder="Phone number"
                                       autocomplete="off" />
                                 </div>
                              </div>
                              <div class="col-12">
                                 <div class="form_group">
                                    <select name="conService" id="conService" class="tj-nice-select">
                                       <option value="" selected disabled>Choose Service</option>
                                       <option value="App">Application</option>
                                       <option value="Software">Software</option>
                                       <option value="Website">Website</option>
                                       <option value="Erp">ERP</option>
                                       <option value="Crm">CRM</option>
                                    </select>
                                 </div>
                              </div>
                              <div class="col-12">
                                 <div class="form_group">
                                    <textarea name="conMessage" id="conMessage" placeholder="Message"></textarea>
                                 </div>
                              </div>
                              <div class="col-12">
                                 <div class="form_btn">
                                    <button type="button" id="submit" class="btn tj-btn-primary">Send Message</button>
                                 </div>
                              </div>
                              
                              <span id="suc-msg" class="d-none">Your mail has been sent successfully.</span>
                           </div>
                        </form>
                     </div>
                  </div>
               </div>
               <div class="col-lg-5 offset-lg-1 col-md-5 d-flex flex-wrap align-items-center order-1 order-md-2">
                  <div class="contact-info-list">
                     <ul class="ul-reset">
                        <li class="d-flex flex-wrap align-items-center position-relative wow fadeInRight"
                           data-wow-delay=".4s">
                           <div class="icon-box">
                              <i class="flaticon-phone-call"></i>
                           </div>
                           <div class="text-box">
                              <p>Phone</p>
                              <a href="/">+91 7698686953</a>
                           </div>
                        </li>
                        <li class="d-flex flex-wrap align-items-center position-relative wow fadeInRight"
                           data-wow-delay=".5s">
                           <div class="icon-box">
                              <i class="flaticon-mail-inbox-app"></i>
                           </div>
                           <div class="text-box">
                              <p>Email</p>
                              <a href="mailto:kishanvaghera8219@gmail.com">kishanvaghera8219@gmail.com</a>
                           </div>
                        </li>
                        <li class="d-flex flex-wrap align-items-center position-relative wow fadeInRight"
                           data-wow-delay=".6s">
                           <div class="icon-box">
                              <i class="flaticon-location"></i>
                           </div>
                           <div class="text-box">
                              <p>Address</p>
                              <a href="/">Kothariya Main Road, <br />JK Park Street No-5, Near Swati Society, <br/> Rajkot - 360 022, India (Gujarat).</a>
                           </div>
                        </li>
                     </ul>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- CONTACT SECTION END -->
      <!-- BEGIN: Contact Form Success Modal Message -->
      <div class="modal contact_modal" id="message_sent" tabindex="-1">
         <div class="modal-dialog">
            <div class="modal-content">
               <div class="modal-header">
                  <span class="modal-title"><strong>Message Sent Successfully</strong></span>
                  <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close"><i
                        class="fas fa-times"></i></button>
               </div>
               <div class="modal-body">
                  <p>Thank you for contacting us. I will get back to you shortly.<br />Have a great day!</p>
               </div>
               <div class="modal-footer">
                  <button type="button" class="btn" data-bs-dismiss="modal">Close</button>
               </div>
            </div>
         </div>
      </div>
      <!-- END: Contact Form Success Modal Message -->
      <!-- BEGIN: Contact Form Fail Modal Message -->
      <div class="modal contact_modal failed" id="message_fail" tabindex="-1">
         <div class="modal-dialog">
            <div class="modal-content">
               <div class="modal-header">
                  <span class="modal-title"><strong>Error</strong></span>
                  <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close"><i
                        class="fas fa-times"></i></button>
               </div>
               <div class="modal-body">
                  <p>Oops! Something went wrong, please try again.</p>
               </div>
               <div class="modal-footer">
                  <button type="button" class="btn" data-bs-dismiss="modal">Close</button>
               </div>
            </div>
         </div>
      </div>
      <!-- END: Contact Form Fail Modal Message End -->
      
      
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
           $(document).on("click","#submit",()=>{
                const conName=$("#conName").val();
                const conLName=$("#conLName").val();
                const conEmail=$("#conEmail").val();
                const conPhone=$("#conPhone").val();
                const conService=$("#conService").val();
                const conMessage=$("#conMessage").val();
                
                var request = $.ajax({
                  url: "mail.php",
                  type: "POST",
                  data: {first_name:conName,last_name:conLName,email:conEmail,phone:conPhone,service:conService,message:conMessage},
                  dataType: "json"
                });
                
                request.done(function(msg) {
                    $("#suc-msg").removeClass("d-none");
                });
           })
       })
   </script>
</body>
</html>