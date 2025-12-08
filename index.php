<?php include "header.php"; ?>

<!doctype html>

<html class="no-js" lang="en">

<head>

    <meta http-equiv="content-type" content="text/html; charset=utf-8"/>

    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>

    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"/>

    <!-- The above 3 meta tags *must* come first in the head -->



    <!-- SITE TITLE -->

    <title>APEI-2026</title>
    
    
    <link rel="icon" href="\assets\img25\favicon.png" type="image/png" />

    <!-- BOOTSTRAP CSS -->

    <link rel="stylesheet" href="assets/libs/bootstrap/css/bootstrap.min.css" media="all"/>



    <!-- FONT AWESOME -->

    <link rel="stylesheet" href="assets/libs/fontawesome/css/font-awesome.min.css" media="all"/>



    <!-- FONT AWESOME -->

    <link rel="stylesheet" href="assets/libs/maginificpopup/magnific-popup.css" media="all"/>



    <!-- Time Circle -->

    <link rel="stylesheet" href="assets/libs/timer/TimeCircles.css" media="all"/>



    <!-- OWL CAROUSEL CSS -->

    <link rel="stylesheet" href="assets/libs/owlcarousel/owl.carousel.min.css" media="all" />

    <link rel="stylesheet" href="assets/libs/owlcarousel/owl.theme.default.min.css" media="all" />



    <!-- GOOGLE FONT -->

    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Oswald:400,700%7cRaleway:300,400,400i,500,600,700,900"/>



    <!-- MASTER  STYLESHEET  -->

    <link id="lgx-master-style" rel="stylesheet" href="assets/css/style-default.min.css" media="all"/>



    <!-- MODERNIZER CSS  -->

    <script src="assets/js/vendor/modernizr-2.8.3.min.js"></script>

    <style>



        @import url('https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap');

        

        @import url('https://fonts.googleapis.com/css2?family=Roboto+Condensed&display=swap');



        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300&family=Roboto+Condensed&display=swap');



        @import url('https://fonts.googleapis.com/css2?family=Montserrat:wght@500&family=Poppins:wght@300&family=Roboto+Condensed&display=swap');



        table, td {

            border: 1px solid red;

            border-collapse: collapse;

        }

        /* Center all images */
        img {
            display: block;
            margin: 0 auto;
        }

        /* Ensure image containers are centered */
        .lgx-about-img {
            text-align: center;
            display: flex;
            justify-content: center;
        }

        .lgx-about-img img {
            margin: 0 auto;
        }

        </style>
		
		      <style>



::-webkit-scrollbar {
  width: 8px;              
  height: 6px;             
}

::-webkit-scrollbar-track {
  background: #eeeeee;     
  border-radius: 10px;
}

::-webkit-scrollbar-thumb {
  background: #b3b3b3;     
  border-radius: 10px;
  transition: background 0.3s ease;
}

::-webkit-scrollbar-thumb:hover {
  background: #888888;     
}




            .marquee {
                height: 30px;
                overflow: hidden;
                position: relative;
                background: #fefefe;
                color: #333;
                border: 1px solid #4a4a4a;
				border-radius:2px;
				white-space:nowrap;
            }
            
            .marquee p {
                position: absolute;
                width: 100%;
                height: 100%;
                margin: 0;
                line-height: 30px;
                text-align: center;
                -moz-transform: translateX(100%);
                -webkit-transform: translateX(100%);
                transform: translateX(100%);
                -moz-animation: scroll-left 2s linear infinite;
                -webkit-animation: scroll-left 2s linear infinite;
                animation: scroll-left 20s linear infinite;
			    white-space:nowrap;

            }
            
            @-moz-keyframes scroll-left {
                0% {
                    -moz-transform: translateX(100%);
                }
                100% {
                    -moz-transform: translateX(-100%);
                }
            }
            
            @-webkit-keyframes scroll-left {
                0% {
                    -webkit-transform: translateX(100%);
                }
                100% {
                    -webkit-transform: translateX(-100%);
                }
            }
            
            @keyframes scroll-left {
                0% {
                    -moz-transform: translateX(100%);
                    -webkit-transform: translateX(100%);
                    transform: translateX(100%);
                }
                100% {
                    -moz-transform: translateX(-100%);
                    -webkit-transform: translateX(-100%);
                    transform: translateX(-100%);
                }
            }
  .marquee-container {
    width: 100%;
    overflow: hidden;
    border: 1px solid #ccc;
    background: linear-gradient(to right, rgba(139, 0, 0, 0.6), rgba(25, 25, 112, 0.6)); /* Darker red to darker blue */
    color: white; /* Text color for contrast */
    padding: 15px;
    box-sizing: border-box;
    border-radius: 8px; /* Rounded corners */
  }

  .marquee-container a {
    color: yellow; /* Yellow color for the link */
    text-decoration: none;
    font-weight: bold; /* Make the link text bold */
    font-size: 18px; /* Increase the font size of the link */
    word-wrap: break-word; /* Ensures the link doesn't overflow */
  }

  .marquee-container a {
  margin: 0 15px; /* Adjust spacing */
}

  .marquee-container a:hover {
    text-decoration: underline;
    color: #ffcc00; /* Slightly lighter yellow when hovered */
  }

  /* Make the marquee text more visible, bold, and increase letter-spacing */
  marquee {
    font-weight: bold; /* Make the scrolling text bold */
    font-size: 20px; /* Increase font size for better visibility */
    letter-spacing: 2px; /* Increase letter spacing */
  }

  /* Notice styles */
 .notice {
  font-size: 14px; /* Reduced text size */
  font-weight: bold;
  color: #333;
  letter-spacing: 0.5px;
  text-align: center;
}

.notice::before {
  content: "\26A0"; /* Unicode for the warning symbol */
  margin-right: 10px; /* Space between symbol and text */
  font-size: 18px; /* Adjusted size for the symbol */
  font-family: 'Segoe UI Emoji', 'Apple Color Emoji', 'NotoColorEmoji', sans-serif;
}

.notice-container {
  padding: 10px;
  font-size: 14px;
  color: #000;
  text-align: center;
  margin-top: 20px;
}
  /* Media queries for responsiveness */
  @media (max-width: 600px) {
    body {
      margin: 10px;
    }

    .marquee-container {
      font-size: 14px; /* Smaller font size for smaller screens */
      padding: 8px;
    }

    marquee {
      font-size: 14px; /* Slightly smaller font size on mobile */
      letter-spacing: 1px; /* Slightly reduced letter spacing on mobile */
    }

    .notice {
      font-size: 14px; /* Slightly smaller font size for notice */
      letter-spacing: 0.5px; /* Reduced letter spacing on mobile */
    }
  } 
  </style>

<!-- Add this style section to your head or stylesheet -->
<style>
    /* Auto-scrolling background styles */
    #background-banner {
        background-image: linear-gradient(to bottom, rgba(0,0,0,0.5), rgba(0,0,0,0)), url(assets/img25/1.jpg);
        background-size: cover;
        background-position: center;
        transition: background-image 1.5s ease-in-out;
        position: relative;
    }
    
    /* Banner navigation dots */
    .banner-nav-dots {
        position: absolute;
        bottom: 20px;
        left: 50%;
        transform: translateX(-50%);
        display: flex;
        gap: 10px;
    }
    
    .banner-dot {
        width: 12px;
        height: 12px;
        border-radius: 50%;
        background-color: rgba(255, 255, 255, 0.5);
        cursor: pointer;
        transition: background-color 0.3s;
    }
    
    .banner-dot.active {
        background-color: white;
    }
</style>
<!-- Modern Banner Section Styles -->
<style>
.lgx-banner-style {
    position: relative;
    min-height: 320px;
    display: flex;
    align-items: center;
    justify-content: center;
    border-radius: 0 0 32px 32px;
    overflow: hidden;
}
.lgx-banner-style::before {
    content: "";
    position: absolute;
    top: 0; left: 0; right: 0; bottom: 0;
    background: linear-gradient(120deg, rgba(0,0,0,0.55) 60%, rgba(56,239,125,0.18) 100%);
    z-index: 1;
    border-radius: 0 0 32px 32px;
}
.lgx-banner-info-area, .lgx-banner-info {
    position: relative;
    z-index: 2;
}

.lgx-banner-info .highlight {
    font-size: 1.6rem;
    background: linear-gradient(to right, #38ef7d, #52c234);
    color: #fff;
    border-radius: 22px;
    
    
    box-shadow: 0 2px 8px rgba(0,0,0,0.10);
    text-align: center;
    font-weight: 600;
    letter-spacing: 1px;
}
.lgx-banner-info .title {
    font-size: 2.7rem;
    color: #fff;
    font-weight: 900;
    margin-bottom: 12px;
    text-shadow: 2px 2px 8px #333;
    text-align: center;
    letter-spacing: 2px;
}
.lgx-banner-info .location {
    font-size: 1.25rem;
    color: #fff;
    background: rgba(0,0,0,0.25);
    border-radius: 12px;
    padding: 12px 24px;
    margin-top: 12px;
    text-align: center;
    font-family: 'Poppins', sans-serif;
}

/* Logo container styling */
.university-logo-container {
    display: flex;
    align-items: center;
    justify-content: center;
    gap: 20px;
    flex-wrap: wrap;
    margin: 10px 0;
}

.university-logo {
    height: 150px;
    width: auto;
    border-radius: 50%;
    object-fit: contain;
    
    filter: drop-shadow(3px 3px 6px rgba(0,0,0,0.7));
    transition: transform 0.3s ease;
}

.university-logo:hover {
    transform: scale(1.08);
}

.university-text {
    font-family:'Poppins', sans-serif;
    font-size: 5.5rem;
    color: #38ef7d !important;
    font-weight: 700;
    text-shadow: 4px 4px 10px rgba(0,0,0,1);
    position: relative;
    z-index: 11;
    text-align: center;
}

.lgx-countdown-area {
    margin: 22px auto;
    text-align: center;
}
.banner-nav-dots {
    position: absolute;
    bottom: 24px;
    left: 50%;
    transform: translateX(-50%);
    z-index: 3;
}
.banner-dot {
    display: inline-block;
    width: 14px; height: 14px;
    background: #fff;
    border-radius: 50%;
    margin: 0 7px;
    opacity: 0.5;
    transition: opacity 0.2s, background 0.2s;
    box-shadow: 0 2px 6px rgba(0,0,0,0.12);
}
.banner-dot.active {
    opacity: 1;
    background: #38ef7d;
    box-shadow: 0 2px 8px rgba(56,239,125,0.25);
}
@media (max-width: 768px) {
    .lgx-banner-style {
        min-height: 320px;
        border-radius: 0 0 18px 18px;
    }
    .lgx-banner-info-date .date {
        font-size: 2.1rem;
        padding: 8px 18px;
    }
    .lgx-banner-info .highlight {
        font-size: 1.1rem;
        padding: 12px 10px;
    }
    .lgx-banner-info .title {
        font-size: 1.5rem;
    }
    .lgx-banner-info .location {
        font-size: 1rem;
        padding: 8px 10px;
    }
    #lgx-countdown .time_circles > div {
        font-size: 2.5rem !important;
    }
    #lgx-countdown .time_circles > div > h4 {
        font-size: 1.8rem !important;
    }
    #lgx-countdown .time_circles > div > span {
        font-size: 1.2rem !important;
    }
    /* Mobile styling for National Conference section */
    .lgx-banner-info h3 {
        font-size: 2.3rem !important;
        padding: 8px 15px !important;
    }
    .lgx-banner-info h3 > div {
        font-size: 3.3rem !important;
        margin-top: 8px !important;
    }
    
    /* Mobile logo adjustments */
    .university-logo-container {
        gap: 5px;
        margin: 15px 0;
    }
    
    .university-logo {
        height: 60px;
    }
    
    .university-text {
        font-size: 3rem !important;
    }
}

@media (max-width: 480px) {
    .university-logo {
        height: 60px;
    }
    
    .university-text {
        font-size: 1.5rem !important;
    }
    
    .university-logo-container {
        gap: 5px;
    }
}
</style>
</head>



<body class="home">

<div class="lgx-container ">

<!-- ***  ADD YOUR SITE CONTENT HERE *** -->

<!--BANNER-->
<section>
    <div class="lgx-banner lgx-banner3" id="background-banner">
        <div class="lgx-banner-style">
            <div class="lgx-inner lgx-inner-fixed">
                <div >
                    <div class="row">
                        <div class="col-xs-12">
                            
                            <div style="text-align: center; padding: 8px 20px;  border-radius: 20px; position: relative; z-index: 10;">
                                    <!-- Logo above the date -->
                                    <div style="text-align: center; margin-bottom: 15px;">
                                        <img src="./assets/img25/UOH_index.png" alt="Logo 3" class="university-logo" style="height: 140px; filter: drop-shadow(4px 4px 8px rgba(0,0,0,0.8));">
                                    </div>
                                    
                                    <h3 style="color: #ffffff !important; font-size: 2.5rem; font-family: sans-serif; font-weight: 700; margin-bottom: 5px; text-shadow: 4px 4px 10px rgba(0,0,0,1); position: relative; z-index: 11;"> 
                                        <b style="font-size: 3.5rem; color: #FFD700 !important; letter-spacing: 3px; text-shadow: 4px 4px 10px rgba(0,0,0,1); position: relative; z-index: 11;">25<sup>th</sup>-27<sup>th</sup></b> 
                                        <span style="font-size: 2.8rem; color: #ffffff !important; margin-left: 15px; text-shadow: 4px 4px 10px rgba(0,0,0,1); position: relative; z-index: 11;">February, 2026</span>
                                    </h3>
                                    <div class="university-logo-container">
                                    <img src="./assets/img25/IOE_index.png" alt="Logo 1" class="university-logo">
                                        <h2 class="university-text">University of Hyderabad</h2>
                                        <img src="./assets/img25/dept_logo.png" alt="Logo 2" class="university-logo">
                                    </div>
                            </div>
                            <div class="lgx-banner-info-area" style="position: relative; z-index: 10;">
                                <div class="lgx-banner-info lgx-banner-info-xscenter">
                                    <div class="lgx-countdown-area" style="margin-bottom: 15px; position: relative; z-index: 10;">
                                        <div id="lgx-countdown" data-date="2026/2/25"></div>
                                    </div>
                                    <div style="text-align: center; display: flex; flex-direction: column; align-items: center; justify-content: center; position: relative; z-index: 10;">
                                        <h3  
                                        style="font-size: 3rem; 
                                        color:white; border-radius: 25px; text-transform: uppercase; font-family: sans-serif; 
                                        letter-spacing: 2px; font-weight: bold; padding: 10px 25px; line-height: 1.0; text-align: center; 
                                        box-shadow: 0 6px 20px rgba(0,0,0,0.3); display: block; position: relative; z-index: 10;">
                                        National Conference on
                                        <div style='color:#ffffff; margin-top: 12px; font-size: 5.5rem; font-weight: 700; text-shadow: 4px 4px 10px rgba(0,0,0,0.8);'>
                                        Advances in Plant and Environmental Interactions
                                        </div>
                                        </h3>
                                        <h2 class="title" style="font-family:'Roboto Condensed',sans-serif;font-weight:800;text-shadow: 4px 4px 12px rgb(0, 0, 0); font-size:6rem; margin: 10px 0; text-align: center; position: relative; z-index: 10;">APEI<span>-<b>2</b><b>0</b><b>2</b><b>6</b></span></h2>
                                        <h3 class="location" style='font-size:3rem;font-weight:bold;font-family: "Poppins", sans-serif; text-align: center; margin-top: 5px; position: relative; z-index: 10; text-shadow: 3px 3px 8px rgba(0,0,0,0.8);'><i class="fa fa-map-marker"></i> <a href="https://www.google.com/maps/search/?api=1&query=Department+of+Plant+Sciences,+School+of+Life+Sciences,+University+of+Hyderabad,+Hyderabad,+India" target="_blank" style="color: inherit; text-decoration: none; cursor: pointer;">Dept. of Plant Sciences, School of Life Sciences, UoH, Hyderabad, India</a></h3>
                                    </div>
                                </div>
                            </div>  
                        </div>
                    </div>
                    <div class="row">
                    </div>
                    <!--//.ROW-->
                </div>
                <!-- //.CONTAINER -->
            </div>
            <!-- //.INNER -->
        </div>
        
        <!-- Banner navigation dots -->
        <div class="banner-nav-dots">
            <span class="banner-dot active"></span>
            <span class="banner-dot"></span>
            <span class="banner-dot"></span>
            <span class="banner-dot"></span>
        </div>
    </div>
</section>



<!-- Add this script to your footer or before closing body tag -->
<script>
    document.addEventListener("DOMContentLoaded", function() {
        // Array of background images
        const backgroundImages = [
            'assets/img25/1.jpg',
            'assets/img25/2.jpg', // Replace with your actual image paths
            'assets/img25/3.jpg',
            'assets/img25/4.jpg'
        ];
        
        const banner = document.getElementById('background-banner');
        const dots = document.querySelectorAll('.banner-dot');
        let currentImageIndex = 0;
        
        // Function to update background image with fade effect
        function updateBackgroundImage() {
            // Update active dot
            dots.forEach((dot, index) => {
                dot.classList.toggle('active', index === currentImageIndex);
            });
            
            // Update background image with gradient overlay
            banner.style.backgroundImage = `linear-gradient(to bottom, rgba(0,0,0,0.5), rgba(0,0,0,0)), url(${backgroundImages[currentImageIndex]})`;
            
            // Move to next image
            currentImageIndex = (currentImageIndex + 1) % backgroundImages.length;
        }
        
        // Set up click handlers for dots
        dots.forEach((dot, index) => {
            dot.addEventListener('click', () => {
                currentImageIndex = index;
                updateBackgroundImage();
                
                // Reset the interval
                clearInterval(backgroundInterval);
                backgroundInterval = setInterval(updateBackgroundImage, 5000);
            });
        });
        
        // Initial call to set first image
        updateBackgroundImage();
        
        // Set interval for auto-scrolling
        let backgroundInterval = setInterval(updateBackgroundImage, 2000);
    });
</script>
<!--BANNER END-->

<section>

    <div class="lgx-countdown">

        <div class="lgx-inner-countdown" style="background:linear-gradient(to right, #0B0B45, #0B0B45);">

            <div class="countdown-left-info" style="background:linear-gradient(to right, #FF007f,#FF007f );">

				<h1 class="date" style="color:white;"><b>25<sup>th</sup> - 27<sup>th</sup> FEB</b></h1>

                <h2 class="date"  style="color:white;"> 2026</h2><br>

                <h4 class="subtitle"  style="color:white;">School of Life Sciences,UoH</h4>


            </div>

            <div class="countdown-right"  >

				<h2 align='center' style="font-family:'Roboto Condensed', sans-serif; color:ffffff;"><b>THEMATIC AREAS</b></h2>
		<UL style='color:#000000;letter-spacing: 1px; font-size:17px;'  align="left">
    <li style="color: white;"><b>Plant-environment interactions</b></li>
    <li style="color: white;"><b>Developmental biology</b></li>
    <li style="color: white;"><b>Genomics and epigenetics</b></li>
    <li style="color: white;"><b>Metabolomics and metabolic engineering</b></li>
    <li style="color: white;"><b>Microbiology and phycology</b></li>
    <li style="color: white;"><b>Molecular breeding and physiology</b></li>
</UL>

            </div>

            </div>

        </div>

    </div>

</section>







<!--ABOUT-->

<section >

    <div id="lgx-about" class="lgx-about"  >

    
        <div class="marquee-container" style="border-radius: 0%; background-color:#000000; ">
            <marquee behavior="scroll" direction="left" scrollamount="10" scrolldelay="0" onmouseover="this.stop();" onmouseout="this.start();">
                
                <a >
                <span class="white-text">Deadline for Registration</span> - 31st January 2026 Only
                </a>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <a>
                <span class="white-text">Abstract Submission Deadline</span> - 31st January 2026 Only
                </a>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <a>
                <span class="white-text">Selected Abstracts Notification</span> - 15th February 2026
                </a>
            </marquee>
        </div>

        <style>
        .white-text {
            color: white;
        }
        </style>

    



        <!-- Notice below the scrolling text -->
        <!-- <div class="notice">
        The posters should be portrait (3 ft. wide and 4 ft. tall), and there is no specific format for preparing them.
        </div> -->
        <div class="lgx-inner" >

                          

            <div class="container" style="text-align: center;">


                <div calss="row"  >

                    <!-- <div class="col-sm-12 col-md-6">

                         <h4 class="subheading" align="center">Conference Poster</h4> 

                        <div class="lgx-about-img">

                          <img src="meet_images/ICACCR 2025_First Announcement-Corrected_Jayakumar_pages.jpg" alt="about">

                        </div>
				

                        <br>

                        <a href='meet_images/ICACCR 2025_First Announcement-Corrected_Jayakumar_pages.jpg' download class="lgx-btnn lgx-red lgx-scroll"><button  align="center" style='font-family:"Roboto Condensed", sans-serif;'><i class="fa fa-download"></i> Download</button>

                        </a><br>

                    </div> -->
			

                    <br>

                    <!-- <div class="col-sm-12 col-md-6" style="text-align: center;"> -->

                        <div class="lgx-about-content-area">

                            <div class="lgx-heading">

                                <h3 class="heading" style="text-align: center;  font-family: 'Roboto Condensed', sans-serif;">About The Conference</h3>

                            </div>


                            <div class="lgx-about-content">
    <p class="text" style="text-align: justify; padding: 20px 20px;">
        The National Conference on Advances in Plant and Environmental Interactions (APEI–2026) aims to provide a dynamic platform for researchers, academicians, and students to share recent insights into how plants perceive, respond, and adapt to their ever-changing environment. The conference will focus on the multifaceted interactions between plants and environmental factors—including biotic and abiotic stresses, climate change, soil–plant–microbe dynamics, and sustainable agricultural practices. By integrating perspectives from plant physiology, molecular biology, ecology, and biotechnology, the event seeks to foster interdisciplinary discussions that can inform future strategies for enhancing crop productivity and ecosystem resilience. The program will feature keynote lectures by eminent scientists, invited talks, oral and poster presentations, and interactive sessions to encourage collaboration and idea exchange among participants from diverse domains of plant and environmental sciences.
 </p>
                                <h3 class="heading" style="margin-left:50px;  font-family: 'Roboto Condensed', sans-serif;">Focus Points</h3>

    <ul class="text" style="padding: 0 60px;">
    <li style="background-color: #fff9c4; padding: 8px 12px; margin-bottom: 8px; border-radius: 5px;"><b>Keynote lectures</b></li>
    <li style="background-color: #fff9c4; padding: 8px 12px; margin-bottom: 8px; border-radius: 5px;"><b>Invited research presentations</b></li>
    <li style="background-color: #fff9c4; padding: 8px 12px; margin-bottom: 8px; border-radius: 5px;"><b>Poster session </b></li>
    <li style="background-color: #fff9c4; padding: 8px 12px; margin-bottom: 8px; border-radius: 5px;"><b>interactive discussions</b></li>
</ul>

    <p class="text" style="text-align: justify; padding: 20px 20px;">
Through these various activities the conference aims to deepen our understanding on how plants and environment interact with each other and shape the life on the planet    </p>
</div>


                        </div>

                        <hr style="width:80%;border:0;height:2px;background-color:#001F54;margin:7rem auto;">
                        

                        <div class="lgx-about-content-area">

                            <div class="lgx-heading">

                                <h3 class="heading" style="text-align: center;  font-family: 'Roboto Condensed', sans-serif;">ABOUT THE DEPARTMENT </h3>
                                
                            </div>

                            <div class="lgx-about-content">

                                <p class="text" style="text-align: justify; padding: 20px 20px;">

                             

The department of plant Sciences, university of Hyderabad is globally known for imparting high-quality teaching and research in the frontier areas of plant sciences and microbiology. It has been supported under UGC Special Assistance Programme and the DST-Funds for Infrastructure in Science and Technology (FIST) Level-II and is marching towards achieving the status of the UGC Centre for Advanced Studies. The foundations for the rapid growth of the Department over the years have been laid with its philosophy to provide a well-balanced training to the students in modern Plant Sciences to enable them to choose careers in both advanced teaching and high quality research. The Department offers Master degrees in (i) Plant Biology and Biotechnology and (ii) Molecular Microbiology and Ph.D. in (i)Plant Sciences and (ii)Microbiology, Department also offers integrated M.Sc. degree as per NEP.  One of the regular features of the Department is to host distinguished scholars from abroad for short duration under the international exchange programmes. The individual research laboratories are well equipped, apart from the availability of major equipment in central facilities of the Department, sister Departments in the School, and also at Central Instrumentation Lab of the University.
      
                            </div>

                        </div>

                        <hr style="width:80%;border:0;height:2px;background-color:#001F54;margin:7rem auto;">
                        
                        

                        <div class="lgx-about-content-area">

                            <div class="lgx-heading">

                                <h3 class="heading" style="text-align: center;  font-family: 'Roboto Condensed', sans-serif;">ABOUT THE UNIVERSITY OF HYDERABAD</h3>

                            </div>


                            <div class="lgx-about-content">

<p class="text" style="text-align: justify; padding: 20px 20px;">
The University of Hyderabad (UoH), also known as Hyderabad Central University, is a premier public central university located in Gachibowli, Hyderabad, Telangana. Established in 1974 by an Act of Parliament, UoH is recognized as an Institution of Eminence (IoE) by the Government of India in 2019.

    </p>

<p class="text" style="text-align: justify; padding: 20px 20px;">
    For further information, please visit our webpage: <strong><a href="https://www.uohyd.ac.in" target="_blank">www.uohyd.ac.in</a></strong><br>
    For the School of Life Sciences: <strong><a href="https://www.sls.uohyd.ac.in" target="_blank">www.sls.uohyd.ac.in</a></strong>
</p>

</div>



                        </div>

                    <!-- </div> -->

                </div>

            </div><!-- //.CONTAINER -->

        </div><!-- //.INNER -->

    </div>

</section>

<!--ABOUT END-->





<!-- participants start -->

<section style="background-color: white;">

    


    <div id="lgx-sponsors" class="lgx-sponsors" style="background-color:#ffffff">
        

<div class="container" id="lgx-speakers">
    <!-- <hr id="lgx-speakers" style="width:80%;border:0;height:2px;background-color:#001F54;margin:7rem auto;"> -->


    <div  class="row">

    <div  calss="col-xs-12"><h2 class="heading" align="center" style='font-family:"Roboto Condensed", sans-serif;font-weight: bold;letter-spacing: 1px;text-shadow: 3px 3px 2px rgb(200, 191, 191);'>Patrons</h2></div>

<br>

<div class="container">
    
    <div style="display: flex; flex-wrap: wrap; justify-content: center; gap: 30px; max-width: 1200px; margin: 0 auto;">



<div style="display: flex; flex-direction: column; align-items: center; width: 250px; text-align: center;">
    <h2 style="margin: 10px 0 5px; font-weight: bold; font-size: 14px;"><b>Chief Patron</b></h2>
    <img src="pics/Cheif Patron/1.png" alt="Prof. B. J. Rao" style="width: 200px; height: 200px; border-radius: 50%; object-fit: cover; border: 3px solid #fff; box-shadow: 0 3px 6px rgba(0, 0, 0, 0.16);">
    <h3 style="margin: 10px 0 5px; font-weight: bold; font-size: 14px;">Prof. B. J. Rao</h3>
    <p style="margin: 0; font-size: 14px; color: #666;">Vice Chancellor<br>University of Hyderabad</p>
</div>

<div style="display: flex; flex-direction: column; align-items: center; width: 250px; text-align: center;">
    <h2 style="margin: 10px 0 5px; font-weight: bold; font-size: 14px;"><b>Patron</b></h2>   
    <img src="pics/Patron/1.png" alt="Prof. Anand Kumar Kondapi" style="width: 200px; height: 200px; border-radius: 50%; object-fit: fill; border: 3px solid #fff; box-shadow: 0 3px 6px rgba(0, 0, 0, 0.16);">
    <h3 style="margin: 10px 0 5px; font-weight: bold; font-size: 14px;">Prof. Anand Kumar Kondapi</h3>
    <p style="margin: 0; font-size: 14px; color: #666;">Dean, School of Life Sciences<br>University of Hyderabad</p>
</div>

<div style="display: flex; flex-direction: column; align-items: center; width: 250px; text-align: center;">
    <h2 style="margin: 10px 0 5px; font-weight: bold; font-size: 14px;"><b>Convener</b></h2>   
    <img src="pics/Patron/3.jpg" alt="Prof.Ragiba Makandar" style="width: 200px; height: 200px; border-radius: 50%; object-fit: fill; border: 3px solid #fff; box-shadow: 0 3px 6px rgba(0, 0, 0, 0.16);">
    <h3 style="margin: 10px 0 5px; font-weight: bold; font-size: 14px;">Prof.Ragiba Makandar</h3>
    <p style="margin: 0; font-size: 14px; color: #666;">Head , Department of<br> Plant Sciences</p>
</div>

</div>

</div>



<br><br>


<div  calss="col-xs-12"><h2 class="heading" align="center" style='font-family:"Roboto Condensed", sans-serif;font-weight: bold;letter-spacing: 1px;text-shadow: 3px 3px 2px rgb(200, 191, 191);'>Advisory Board</h2></div>

<br>

<div class="container">
    
    <div style="display: flex; flex-wrap: wrap; justify-content: center; gap: 30px; max-width: 1200px; margin: 0 auto;">

<div style="display: flex; flex-direction: column; align-items: center; width: 200px; text-align: center;">
    <img src="pics/Advisory Board/3.png" alt="AS Raghavendra " style="width: 150px; height: 150px; border-radius: 50%; object-fit: cover; border: 3px solid #fff; box-shadow: 0 3px 6px rgba(0, 0, 0, 0.16);">
    <h3 style="margin: 10px 0 5px; font-weight: bold; font-size: 14px;">AS Raghavendra </h3>
    <!-- <p style="margin: 0; font-size: 14px; color: #666;">IoE-Chair Professor (SLS)</p> -->
</div>

<div style="display: flex; flex-direction: column; align-items: center; width: 200px; text-align: center;">
    <img src="pics/Advisory Board/2.png" alt="Appa Rao Podile  " style="width: 150px; height: 150px; border-radius: 50%; object-fit: fill; border: 3px solid #fff; box-shadow: 0 3px 6px rgba(0, 0, 0, 0.16);">
    <h3 style="margin: 10px 0 5px; font-weight: bold; font-size: 14px;">Appa Rao Podile </h3>
    <!-- <p style="margin: 0; font-size: 14px; color: #666;">Director, ICMR - National Institute of Nutrition<br>Hyderrbad</p> -->
</div>

<div style="display: flex; flex-direction: column; align-items: center; width: 200px; text-align: center;">
    <img src="pics/Advisory Board/1.png" alt="Ch. Venkataramana" style="width: 150px; height: 150px; border-radius: 50%; object-fit: cover; border: 3px solid #fff; box-shadow: 0 3px 6px rgba(0, 0, 0, 0.16);">
    <h3 style="margin: 10px 0 5px; font-weight: bold; font-size: 14px;">Ch. Venkataramana</h3>
    <!-- <p style="margin: 0; font-size: 14px; color: #666;">Director CDFD, Hyderabad</p> -->
</div>



       


</div>

</div>

<br><br>

        <div  calss="col-xs-12"><h2 class="heading" align="center" style='font-family:"Roboto Condensed", sans-serif;font-weight: bold;letter-spacing: 1px;text-shadow: 3px 3px 2px rgb(200, 191, 191);'>Speakers</h2></div>

        <br>

        <div class="container">
        
            <div style="display: flex; flex-wrap: wrap; justify-content: center; gap: 30px; max-width: 1200px; margin: 0 auto;">
                    <div style="display: flex; flex-direction: column; align-items: center; width: 200px; text-align: center;">
                        <img src="assets/speakers/18" alt="Anil K Tripathi" style="width: 150px; height: 150px; border-radius: 50%; background-color: #343030ff;object-fit: cover; border: 3px solid #fff; box-shadow: 0 3px 6px rgba(0, 0, 0, 0.16);">
                        <h3 style="margin: 10px 0 5px; font-weight: bold; font-size: 14px;">Anil K Tripathi</h3>
                    </div>
  
                    <div style="display: flex; flex-direction: column; align-items: center; width: 200px; text-align: center;">
                        <img src="assets/speakers/1.png" alt="S.Venkata Mohan " style="width: 150px; height: 150px; border-radius: 50%; object-fit: cover; border: 3px solid #fff; box-shadow: 0 3px 6px rgba(0, 0, 0, 0.16);">
                        <h3 style="margin: 10px 0 5px; font-weight: bold; font-size: 14px;">S.Venkata Mohan</h3>
                    </div>

                    <div style="display: flex; flex-direction: column; align-items: center; width: 200px; text-align: center;">
                        <img src="assets/speakers/2.png" alt="Prabodh Kumar Trivedi" style="width: 150px; height: 150px; border-radius: 50%; object-fit: cover; border: 3px solid #fff; box-shadow: 0 3px 6px rgba(0, 0, 0, 0.16);">
                        <h3 style="margin: 10px 0 5px; font-weight: bold; font-size: 14px;">Prabodh Kumar Trivedi</h3>
                    </div>

                    <div style="display: flex; flex-direction: column; align-items: center; width: 150px; text-align: center;">
                        <img src="assets/speakers/3.png" alt="Ashwani Pareek" style="width: 150px; height: 150px; border-radius: 50%; object-fit: fill; border: 3px solid #fff; box-shadow: 0 3px 6px rgba(0, 0, 0, 0.16);">
                        <h3 style="margin: 10px 0 5px; font-weight: bold; font-size: 14px;">Ashwani Pareek</h3>
                    </div>

                    <div style="display: flex; flex-direction: column; align-items: center; width: 200px; text-align: center;">
                        <img src="assets/speakers/16.png" alt="Subhra Chakraborty" style="width: 150px; height: 150px; border-radius: 50%; object-fit: fill; border: 3px solid #fff; box-shadow: 0 3px 6px rgba(0, 0, 0, 0.16);">
                        <h3 style="margin: 10px 0 5px; font-weight: bold; font-size: 14px;">Subhra Chakraborty</h3>
                    </div>

                    <div style="display: flex; flex-direction: column; align-items: center; width: 200px; text-align: center;">
                        <img src="assets/speakers/4.png" alt="Alok Krishna Sinha" style="width: 150px; height: 150px; border-radius: 50%; object-fit: fill; border: 3px solid #fff; box-shadow: 0 3px 6px rgba(0, 0, 0, 0.16);">
                        <h3 style="margin: 10px 0 5px; font-weight: bold; font-size: 14px;">Alok Krishna Sinha</h3>
                    </div>

                    <!-- second row -->

                    <div style="display: flex; flex-direction: column; align-items: center; width: 200px; text-align: center;">
                        <img src="assets/speakers/5.png" alt="Anjan Banerjee" style="width: 150px; height: 150px; border-radius: 50%; object-fit: cover; border: 3px solid #fff; box-shadow: 0 3px 6px rgba(0, 0, 0, 0.16);">
                        <h3 style="margin: 10px 0 5px; font-weight: bold; font-size: 14px;">Anjan Banerjee</h3>
                    </div>

                    <div style="display: flex; flex-direction: column; align-items: center; width: 200px; text-align: center;">
                        <img src="assets/speakers/17.png" alt="Manjula Reddy " style="width: 150px; height: 150px; border-radius: 50%; object-fit: cover; border: 3px solid #fff; box-shadow: 0 3px 6px rgba(0, 0, 0, 0.16);">
                        <h3 style="margin: 10px 0 5px; font-weight: bold; font-size: 14px;">Manjula Reddy</h3>
                    </div>

                    <div style="display: flex; flex-direction: column; align-items: center; width: 200px; text-align: center;">
                        <img src="assets/speakers/6.png" alt="Jagadish Gupta Kapuganti" style="width: 150px; height: 150px; border-radius: 50%; object-fit: fill; border: 3px solid #fff; box-shadow: 0 3px 6px rgba(0, 0, 0, 0.16);">
                        <h3 style="margin: 10px 0 5px; font-weight: bold; font-size: 14px;">Jagdis Gupta Kapuganti</h3>  
                    </div>

                    <div style="display: flex; flex-direction: column; align-items: center; width: 200px; text-align: center;">
                        <img src="assets/speakers/7.png" alt="Bidyut Sarmah" style="width: 150px; height: 150px; border-radius: 50%; object-fit: fill; border: 3px solid #fff; box-shadow: 0 3px 6px rgba(0, 0, 0, 0.16);">
                        <h3 style="margin: 10px 0 5px; font-weight: bold; font-size: 14px;">Bidyut Sarmah</h3>  
                    </div>

                    <div style="display: flex; flex-direction: column; align-items: center; width: 200px; text-align: center;">
                        <img src="assets/speakers/8.png" alt="A.P. Sane" style="width: 150px; height: 150px; border-radius: 50%; object-fit: cover; border: 3px solid #fff; box-shadow: 0 3px 6px rgba(0, 0, 0, 0.16);">
                        <h3 style="margin: 10px 0 5px; font-weight: bold; font-size: 14px;">A.P. Sane</h3>
                    </div>

                    <!-- third row -->

                    <div style="display: flex; flex-direction: column; align-items: center; width: 200px; text-align: center;">
                        <img src="assets/speakers/9.png" alt="Amalraj Ramesh Sundar" style="width: 150px; height: 150px; border-radius: 50%; object-fit: cover; border: 3px solid #fff; box-shadow: 0 3px 6px rgba(0, 0, 0, 0.16);">
                        <h3 style="margin: 10px 0 5px; font-weight: bold; font-size: 14px;">Amalraj Ramesh Sundar</h3>
                    </div>

                    <div style="display: flex; flex-direction: column; align-items: center; width: 200px; text-align: center;">
                        <img src="assets/speakers/10.png" alt="Samir V Sawant" style="width: 150px; height: 150px; border-radius: 50%; object-fit: fill; border: 3px solid #fff; box-shadow: 0 3px 6px rgba(0, 0, 0, 0.16);">
                        <h3 style="margin: 10px 0 5px; font-weight: bold; font-size: 14px;">Samir V Sawant</h3>
                    </div>

                    <div style="display: flex; flex-direction: column; align-items: center; width: 200px; text-align: center;">
                        <img src="assets/speakers/11.png" alt="Satendra Mangrauthia" style="width: 150px; height: 150px; border-radius: 50%; object-fit: fill; border: 3px solid #fff; box-shadow: 0 3px 6px rgba(0, 0, 0, 0.16);">
                        <h3 style="margin: 10px 0 5px; font-weight: bold; font-size: 14px;">Satendra Mangrauthia</h3>
                    </div>

                    <div style="display: flex; flex-direction: column; align-items: center; width: 200px; text-align: center;">
                        <img src="assets/speakers/12.png" alt="Swaroop K.Parida" style="width: 150px; height: 150px; border-radius: 50%; object-fit: cover; border: 3px solid #fff; box-shadow: 0 3px 6px rgba(0, 0, 0, 0.16);">
                        <h3 style="margin: 10px 0 5px; font-weight: bold; font-size: 14px;">Swaroop K.Parida</h3>
                    </div>

                    <div style="display: flex; flex-direction: column; align-items: center; width: 200px; text-align: center;">
                        <img src="assets/speakers/13.png" alt="Senthil Kumar-Muthappa" style="width: 150px; height: 150px; border-radius: 50%; object-fit: cover; border: 3px solid #fff; box-shadow: 0 3px 6px rgba(0, 0, 0, 0.16);">
                        <h3 style="margin: 10px 0 5px; font-weight: bold; font-size: 14px;">Senthil Kumar-Muthappa</h3>
                    </div>

                    <!-- fourth row -->

                    <div style="display: flex; flex-direction: column; align-items: center; width: 200px; text-align: center;">
                        <img src="assets/speakers/14.png" alt="Nataraja Karaba Nalkur" style="width: 150px; height: 150px; border-radius: 50%; object-fit: fill; border: 3px solid #fff; box-shadow: 0 3px 6px rgba(0, 0, 0, 0.16);">
                        <h3 style="margin: 10px 0 5px; font-weight: bold; font-size: 14px;">Nataraja Karaba Nalkur</h3>
                    </div>

                    <div style="display: flex; flex-direction: column; align-items: center; width: 200px; text-align: center;">
                        <img src="assets/speakers/15.png" alt="Vinita Gowda" style="width: 150px; height: 150px; border-radius: 50%; object-fit: cover; border: 3px solid #fff; box-shadow: 0 3px 6px rgba(0, 0, 0, 0.16);">
                        <h3 style="margin: 10px 0 5px; font-weight: bold; font-size: 14px;">Vinita Gowda</h3>
                    </div>

                    <!-- <div style="display: flex; flex-direction: column; align-items: center; width: 200px; text-align: center;">
                        <img src="assets/speakers/18.jpg" alt="Dr. Ravi Kumar" style="width: 150px; height: 150px; border-radius: 50%; object-fit: cover; border: 3px solid #fff; box-shadow: 0 3px 6px rgba(0, 0, 0, 0.16);">
                        <h3 style="margin: 10px 0 5px; font-weight: bold; font-size: 14px;">Dr. Ravi Kumar</h3>
                        <p style="margin: 0; font-size: 14px; color: #666;">JNU, New Delhi</p>
                    </div>

                    <div style="display: flex; flex-direction: column; align-items: center; width: 200px; text-align: center;">
                        <img src="assets/speakers/19.jpg" alt="Dr. Santos Chauhan" style="width: 150px; height: 150px; border-radius: 50%; object-fit: cover; border: 3px solid #fff; box-shadow: 0 3px 6px rgba(0, 0, 0, 0.16);">
                        <h3 style="margin: 10px 0 5px; font-weight: bold; font-size: 14px;">Dr. Santos Chauhan</h3>
                        <p style="margin: 0; font-size: 14px; color: #666;">CCMB, Hyderabad</p>
                    </div>

                    <div style="display: flex; flex-direction: column; align-items: center; width: 200px; text-align: center;">
                        <img src="assets/speakers/20.jpg" alt="Prof Jagan Pongubala" style="width: 150px; height: 150px; border-radius: 50%; object-fit: cover; border: 3px solid #fff; box-shadow: 0 3px 6px rgba(0, 0, 0, 0.16);">
                        <h3 style="margin: 10px 0 5px; font-weight: bold; font-size: 14px;">Prof Jagan Pongubala</h3>
                        <p style="margin: 0; font-size: 14px; color: #666;">UoH - University of Hyderabad</p>
                    </div> -->

</div>

        </div>

        <br><br>

        <div id="lgx-registration" calss="col-xs-12"><h2 class="heading" align="center" style='font-family:"Roboto Condensed", sans-serif;font-weight: bold;letter-spacing: 1px;text-shadow: 3px 3px 2px rgb(200, 191, 191);'>REGISTRATION & FEES</h2></div><br>
      

<div class="registration-section">

  <div class="container1">

    <!-- Important Dates -->
    <div class="card1">
      <h2 class="card1-title">Important Dates</h2>

      <div class="deadline-item1">
        <span class="label" style="color:black;">Registration Opens:</span>
        <span class="date1">7th December 2025</span>
      </div>

      <div class="deadline-item1">
        <span class="label" style="color:black;">Abstract Submission Opens:</span>
        <span class="date1">7th December 2025</span>
      </div>

      <div class="deadline-item1">
        <span class="label" style="color:black;">Abstract Submission Closes:</span>
        <span class="date1">31st January 2026</span>
      </div>

      <div class="deadline-item1">
        <span class="label"  style="color: black;">Abstract Results:</span>
        <span class="date1">15th February 2026</span>
      </div>

      <div class="deadline-item1">
        <span class="label" style="color:black;">Registration Closes:</span>
        <span class="date1">31st January 2026</span>
      </div>

      <div class="deadline-item1">
        <span class="label" style="color:black;">Payment gateway Opens:</span>
        <span class="date1">1st December 2025</span>
      </div>


      <div class="note1">
        <strong>Note:</strong> Selected abstracts for short talks and posters will be notified by 15th February 2025.
      </div>
    </div>

    <!-- Registration Fees -->
    <div class="card1">
      <h2 class="card1-title">Registration Fees</h2>

      <table class="fees-table">
        <tr>
          <th>Category</th>
          <th>Fees</th>
        </tr>
        <tr>
          <td>Students</td>
          <td class="highlight">Rs. 3,000</td>
        </tr>
        <tr>
          <td>Faculties</td>
          <td class="highlight">Rs. 4,000</td>
        </tr>
        <tr>
          <td>Industry Persons</td>
          <td class="highlight">Rs. 6,000</td>
        </tr>
      </table>

      <p><strong>Note:</strong> GST (18%) is applicable as per Govt norms.</p>

      <div class="note1">
        <strong>Accommodation: </strong> 
        Limited guest house/hostel accommodation for students available on payment basis on first come first service. Contact person: Prof. Rahul Kumar , email id: <strong>rksl@uohyd.ac.in</strong>
      </div>
    </div>

  </div>
</div>
<style>
/* -------- General Layout -------- */
.registration-section {
  padding: 20px;
  background-color: #f9fafc;
}

.container1 {
  max-width: 1000px;
  margin: 0 auto;
  display: flex;
  flex-wrap: wrap;
  gap: 20px;
  justify-content: space-between;
}

/* -------- Card Styling -------- */
.card1 {
  background: #fff;
  border-radius: 10px;
  flex: 1 1 48%;
  padding: 20px;
  box-shadow: 0px 4px 12px rgba(0, 0, 0, 0.08);
  box-sizing: border-box;
}

.card1-title {
  text-align: center;
  color: #003366;
  font-size: 1.5rem;
  border-bottom: 1px solid #ccc;
  padding-bottom: 10px;
  margin-bottom: 20px;
}

/* -------- Important Dates -------- */
.deadline-item1 {
  display: flex;
  justify-content: space-between;
  align-items: center;
  margin: 12px 0;
  flex-wrap: wrap;
}

.label1 {
  font-weight: 600;
  color: #333;
}

.date1 {
  background: #ffecec;
  color: #cc0000;
  padding: 6px 12px;
  border-radius: 5px;
  font-weight: 600;
  text-align: right;
}

/* -------- Notes -------- */
.note1 {
  background: #f5faff;
  border-left: 4px solid #0077cc;
  padding: 10px 15px;
  margin-top: 15px;
  font-size: 1.2rem;
  border-radius: 5px;
  line-height: 1.5;
}

/* -------- Fees Table -------- */
.fees-table {
  width: 100%;
  border-collapse: collapse;
  margin: 15px 0;
  font-size: 1.2rem;
}

.fees-table th,
.fees-table td {
  border: 1px solid #ccc;
  padding: 12px;
  text-align: center;
  word-break: break-word;
  font-size: 1.5rem;
}

.fees-table th {
  background-color: #003366;
  color: white;
  font-weight: 800;
}

.fees-table td.highlight {
  background-color: #f9f9f9;
}

/* -------- Responsive Design -------- */
@media (max-width: 900px) {
  .card1 {
    flex: 1 1 100%;
  }
}

@media (max-width: 768px) {
  .container1 {
    padding: 0 10px;
  }

  .card1 {
    padding: 18px;
  }

  .card1-title {
    font-size: 1.35rem;
  }

  .deadline-item {
    flex-direction: column;
    align-items: flex-start;
    margin-bottom: 15px;
  }

  .date1 {
    margin-top: 6px;
    width: 100%;
    text-align: left;
  }

  .fees-table {
    width: 100%;
    border-collapse: collapse;
    border-radius: 6px;
  }

  .fees-table thead {
    display: none;
  }

  .fees-table tr {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 0;
    margin-bottom: 12px;
    border: 1px solid #ccc;
    border-radius: 6px;
    overflow: hidden;
  }

  .fees-table th,
  .fees-table td {
    font-size: 0.9rem;
    padding: 10px;
    text-align: left;
    border: none;
    word-break: break-word;
  }

  .fees-table th {
    display: none;
  }

  .fees-table td {
    background-color: #fff;
  }

  .fees-table td:first-child {
    font-weight: 600;
    background-color: #f0f0f0;
    color: #003366;
  }

  .fees-table td.highlight {
    background-color: #fff;
    font-weight: 600;
    color: #cc0000;
  }
}

@media (max-width: 480px) {
  .registration-section {
    padding: 15px 8px;
  }

  .card1 {
    padding: 15px;
    border-radius: 8px;
  }

  .card1-title {
    font-size: 1.2rem;
  }

  .deadline-item1 {
    margin: 10px 0;
  }

  .label1 {
    font-size: 0.95rem;
  }

  .date1 {
    font-size: 0.9rem;
    padding: 5px 10px;
  }

  .note1 {
    font-size: 0.9rem;
  }

  .fees-table tr {
    grid-template-columns: 1fr 1fr;
    margin-bottom: 10px;
  }

  .fees-table th,
  .fees-table td {
    font-size: 0.85rem;
    padding: 8px;
  }

  .fees-table td:first-child {
    font-weight: 600;
  }

  .fees-table td.highlight {
    font-weight: 600;
  }
}

</style>

        
        <div class="card" style="max-width: 100%; margin-top: 30px;text-align: center;">
            <h2 class="card-title">What's Included in Your Registration</h2>
            
            <ul class="benefits-list" style="list-style:none;">
                <li>Conference materials and welcome kit</li>
                <li>Access to all conference sessions</li>
                <li>Conference dinner</li>
                <li>Food and drinks during coffee breaks</li>
                <li>Lunches for all conference days</li>
            </ul>
        </div>
    </div>

        </div>

        <div class="container">
    <!-- <p class="text">
       
        <h3>Marshall Awards for Student</h3>
        <p>
            3 Awards (Chemistry & Environmental-1; Agriculture & Biotechnology-1; Healthcare-1)<br>
            <strong><u>Criteria:</u></strong> Research student with a minimum 5 as total impact factor of their publications. Application should be forwarded by the student's Guide, and each Guide/Faculty should recommend only one student. Students should send their Curriculum Vitae (CV) with details of their publications and other achievements as a single PDF file to the Secretary, ICCS (Email: <a href="mailto:rangasamyjayakumar1971@gmail.com">rangasamyjayakumar1971@gmail.com</a>).
        </p>
        <h3>Marshall Awards for Researcher</h3>
        <p>
            1 Award<br>
            <strong><u>Criteria:</u></strong> Researcher should have a high research profile in the field of chitin/chitosan and a minimum 50 as total impact factor of their publications. Preference will be given to researchers involved in product development in the field of chitin/chitosan. Scientists/Researchers can individually send their Curriculum Vitae (CV) with details of their publications and other achievements as a single PDF file to the Secretary, ICCS (Email: <a href="mailto:rangasamyjayakumar1971@gmail.com">rangasamyjayakumar1971@gmail.com</a>).
        </p>
        <h3>Shri Vinayak M. Deshpande Young Scientist Award</h3>
        <p>
            1 Award<br>
            <strong><u>Criteria:</u></strong> This award is for a researcher (below 40 years) working on chitin/chitosan related to any aspect and published papers in high-impact journals (from India), or who has exceptionally transferred a technology related to chitin/chitosan to the industry, in the previous calendar year. The recipient should preferably be a member of the society, attend the meeting, and give a talk to receive the award. The award is not given in absentia.<br>
            <strong>Application:</strong> Include a covering letter highlighting the contribution (max. 150 words), brief CV, list of publications, and subject-related reprints (not more than 5); names of 2 referees who can provide additional information, if required. One signed hard copy and the same as a soft copy can be submitted to the Secretary, ICCS (Email: <a href="mailto:rangasamyjayakumar1971@gmail.com">rangasamyjayakumar1971@gmail.com</a>).
        </p>
    </p> -->
</div>



</div>

    <div>
    </div><br>

    <!-- Payment Gateway Instructions -->
    <div class="container mt-5 mb-5" style="max-width: 90%;">
        <div class="row justify-content-center">
            <div class="col-12">
                <div class="card shadow-lg border-0" style="border-top: 4px solid #003366;">
                    <div class="card-header bg-gradient" style="background: linear-gradient(to right, #38ef7d, #52c234); padding: 25px; border-radius: 10px 10px 0 0;">
                        <h2 class="card-title mb-0" style="color: white; font-family: 'Roboto Condensed', sans-serif; font-weight: 800; font-size: 2.2rem; text-align: center;">
                            <i class="fa fa-credit-card"></i> Instructions to Operate Payment Gateway
                        </h2>
                    </div>
                    <div class="card-body p-4 p-md-5">
                        <ol class="list-group list-group-flush" style="font-family: 'Poppins', sans-serif;">
                            <li class="list-group-item border-0 pl-0 pb-4" style="font-size: 1.3rem; line-height: 1.8; color: #333;">
                                <span class="badge badge-primary" style="background-color: #003366; font-size: 1.1rem; padding: 10px 14px;">1</span>
                                <span class="ml-3">Use internet explorer or Mozila fire fox browser</span>
                            </li>
                            <li class="list-group-item border-0 pl-0 pb-4" style="font-size: 1.3rem; line-height: 1.8; color: #333;">
                                <span class="badge badge-primary" style="background-color: #003366; font-size: 1.1rem; padding: 10px 14px;">2</span>
                                <span class="ml-3">All participants will have to register by providing the basic details like email and mobile number.</span>
                            </li>
                            <li class="list-group-item border-0 pl-0 pb-4" style="font-size: 1.3rem; line-height: 1.8; color: #333;">
                                <span class="badge badge-primary" style="background-color: #003366; font-size: 1.1rem; padding: 10px 14px;">3</span>
                                <span class="ml-3">After successful registration, the participants shall login & click on <strong class="text-success">Pay Now</strong>.</span>
                            </li>
                            <li class="list-group-item border-0 pl-0 pb-4" style="font-size: 1.3rem; line-height: 1.8; color: #333;">
                                <span class="badge badge-primary" style="background-color: #003366; font-size: 1.1rem; padding: 10px 14px;">4</span>
                                <span class="ml-3">Here the participants will select his / her conference / workshop.</span>
                            </li>
                            <li class="list-group-item border-0 pl-0 pb-4" style="font-size: 1.3rem; line-height: 1.8; color: #333;">
                                <span class="badge badge-primary" style="background-color: #003366; font-size: 1.1rem; padding: 10px 14px;">5</span>
                                <span class="ml-3">On clicking on <strong class="text-success">Pay Now</strong>, the refund policy screen will appear, and participants check the accept box and click on <strong class="text-success">Proceed</strong>.</span>
                            </li>
                            <li class="list-group-item border-0 pl-0 pb-4" style="font-size: 1.3rem; line-height: 1.8; color: #333;">
                                <span class="badge badge-primary" style="background-color: #003366; font-size: 1.1rem; padding: 10px 14px;">6</span>
                                <span class="ml-3">On submission, the participants will be directed to confirmation & payment page.</span>
                            </li>
                            <li class="list-group-item border-0 pl-0 pb-4" style="font-size: 1.3rem; line-height: 1.8; color: #333;">
                                <span class="badge badge-primary" style="background-color: #003366; font-size: 1.1rem; padding: 10px 14px;">7</span>
                                <span class="ml-3">On successful payment the participant can download the receipt.</span>
                            </li>
                            <li class="list-group-item border-0 pl-0 pb-4" style="font-size: 1.3rem; line-height: 1.8; color: #333;">
                                <span class="badge badge-primary" style="background-color: #003366; font-size: 1.1rem; padding: 10px 14px;">8</span>
                                <span class="ml-3">To check the status of his payment, the participant can login and see his transactions.</span>
                            </li>
                            <li class="list-group-item border-0 pl-0 pb-0" style="font-size: 1.3rem; line-height: 1.8; color: #333;">
                                <span class="badge badge-primary" style="background-color: #003366; font-size: 1.1rem; padding: 10px 14px;">9</span>
                                <span class="ml-3">Once registered, the participant can use the same login for any other conference / events in UoH.</span>
                            </li>
                        </ol>
                        <div class="alert alert-info mt-4" style="background-color: #e7f3ff; border-left: 4px solid #003366; font-size: 1.25rem; font-family: 'Poppins', sans-serif;">
                            <i class="fa fa-info-circle"></i> <strong>Note:</strong> Ensure that you have JavaScript enabled and use a secure internet connection while making payments.
                        </div>
                        <div class="text-center mt-5">
                            <a class="lgx-btn lgx-btn-big" href="https://payuoh.uohyd.ac.in/" target="_blank"><span style="font-family:'Roboto Condensed', sans-serif;">Click Here To Register</span></a>
                            <p style="margin-top: 20px; font-size: 1.5rem; color: #003366; font-family: 'Poppins', sans-serif; font-weight: 600;">
                                <i class="fa fa-arrow-circle-right"></i> After registration come back to original window for abstract submission with payment details
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div><br>

</div>

</div>

</section>

<!-- participants end -->







<!-- <section>

    <div id="lgx-about" class="lgx-about">

        <div class="lgx-inner">

            <div class="container">

                <div class="row">

                    <div class="col-sm-12 col-md-6">

                        <div class="lgx-about-content-area">

                            <div class="lgx-heading">

                                <h2 class="subheading" style="font-family: 'Roboto Condensed',sans-serif;">Department of Plant Sciences at a Glance</h2>

                            </div>

                            <div class="lgx-about-content">

                                <p class="text">

                                    The Department of Plant Sciences (est. 1993) is renowned for imparting high-

                                    quality teaching and research in the frontier areas of plant sciences and

                                    microbiology. The vision of the Department is to discover and exploit plant and

                                    microbiological resources for the betterment of the environment and human

                                    welfare through systematic and focused research, and teaching in plant and

                                    microbiological sciences. The teaching and research in the Department are

                                    supported by UGC-SAP (DRS-1, Phase 1), DST-FIST Level I and II (Phase 1

                                    and 2), and the Institute of Eminence grant awarded to the University of

                                    Hyderabad. Further, the faculties of the Department have secured extra-mural

                                    grants from national and international funding bodies to pursue individual and

                                    collaborative research. The outcomes of the research projects are published

                                    in peer-reviewed journals of international repute, and the faculties have also

                                    filed several national and international patents. The Department also has the

                                    distinction of establishing the state-of-art facility 'Repository of Tomato'

                                    Genomics Resources,' which is a DBT-Center of Excellence.

                                </p>

								<div class="section-btn-area" align="right">

                                    <a class="lgx-btn lgx-scroll" href="http://sls.uohyd.ac.in/new/departments.php?dept_id=2" target="_new" style="font-family: 'Roboto Condensed', sans-serif;">KNOW MORE!</a>

                                </div>



                            </div>

                        </div>

                    </div>



                    <div class="col-sm-12 col-md-6">

                     

                        <br>

                        <div class="lgx-about-img">

                            <img src="meet_images/plant.png" alt="about">

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </div>

</section> -->








<!--SCHEDULE-->

<!--SCHEDULE END-->
                                                                  


    <!--REGISTRATION-->

    



<!-- ABSTRACT SUBMISSION SECTION -->
<section style="background-color: #ffffff;">
    <div class="lgx-about">
        <div class="lgx-inner">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="lgx-heading">
                            <h2 class="heading" style="font-family: 'Roboto Condensed', sans-serif;">ABSTRACT SUBMISSION GUIDELINES</h2>
                        </div>
                    </div>
                </div>
                
                <div class="row" style="margin-top: 30px;">
                    <div class="col-md-6">
                        <div style="background: #f9f9f9; padding: 30px; border-radius: 10px; border-left: 4px solid #38ef7d; margin-bottom: 20px;">
                            <h3 style="font-family: 'Roboto Condensed', sans-serif; color: #003366; margin-bottom: 20px; font-size: 20px;">
                                <i class="fa fa-file-text" style="color: #38ef7d; margin-right: 10px;"></i>Guidelines
                            </h3>
                            <ul style="list-style: none; padding: 0; line-height: 2;">
                                <li style="margin-bottom: 10px;"><i class="fa fa-check-circle" style="color: #38ef7d; margin-right: 10px;"></i>The abstract should be between <strong>300-400 words</strong></li>
                                <li style="margin-bottom: 10px;"><i class="fa fa-check-circle" style="color: #38ef7d; margin-right: 10px;"></i>Font: <strong>Times New Roman, Size 12, Regular</strong></li>
                                <li style="margin-bottom: 10px;"><i class="fa fa-check-circle" style="color: #38ef7d; margin-right: 10px;"></i>Line Spacing: <strong>Single</strong></li>
                                <li style="margin-bottom: 10px;"><i class="fa fa-check-circle" style="color: #38ef7d; margin-right: 10px;"></i>Abstract must be submitted <strong>online only</strong></li>
                            </ul>
                        </div>
                    </div>
                    
                    <div class="col-md-6">
                        <div style="background: #f9f9f9; padding: 30px; border-radius: 10px; border-left: 4px solid #52c234; margin-bottom: 20px;">
                            <h3 style="font-family: 'Roboto Condensed', sans-serif; color: #003366; margin-bottom: 20px; font-size: 20px;">
                                <i class="fa fa-list-alt" style="color: #52c234; margin-right: 10px;"></i>Required Information
                            </h3>
                            <ul style="list-style: none; padding: 0; line-height: 2;">
                                <li style="margin-bottom: 10px;"><i class="fa fa-angle-right" style="color: #52c234; margin-right: 10px;"></i>Title of paper</li>
                                <li style="margin-bottom: 10px;"><i class="fa fa-angle-right" style="color: #52c234; margin-right: 10px;"></i>Name(s) of author(s)</li>
                                <li style="margin-bottom: 10px;"><i class="fa fa-angle-right" style="color: #52c234; margin-right: 10px;"></i>Affiliation(s) and contact details</li>
                                <li style="margin-bottom: 10px;"><i class="fa fa-angle-right" style="color: #52c234; margin-right: 10px;"></i>Purpose of study</li>
                                <li style="margin-bottom: 10px;"><i class="fa fa-angle-right" style="color: #52c234; margin-right: 10px;"></i>Research methodology</li>
                                <li style="margin-bottom: 10px;"><i class="fa fa-angle-right" style="color: #52c234; margin-right: 10px;"></i>Results and conclusion</li>
                                <li style="margin-bottom: 10px;"><i class="fa fa-angle-right" style="color: #52c234; margin-right: 10px;"></i>Keywords</li>
                            </ul>
                        </div>
                    </div>
                </div>
                
                <div class="row">
                    <div class="col-xs-12">
                        <div style="background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); padding: 25px; border-radius: 10px; color: white; margin-bottom: 20px;">
                            <p style="margin: 0; font-size: 16px; line-height: 1.8;">
                                <i class="fa fa-info-circle" style="margin-right: 10px; font-size: 20px;"></i>
                                <strong>Important:</strong> The presenting author name should be <u>underlined</u> and email of both presenting author and corresponding author should be provided.
                            </p>
                        </div>
                        
                        <div class="text-center" style="margin-top: 30px;">
                            <a class="lgx-btn lgx-btn-big" href="register.php" target="blank" style="background: linear-gradient(to right, #38ef7d, #52c234); padding: 15px 40px; font-size: 18px; cursor: pointer;">
                                <i class="fa fa-upload" style="margin-right: 10px;"></i>
                                <span style="font-family:'Roboto Condensed', sans-serif;">Upload Abstract</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ABSTRACT SUBMISSION SECTION END -->


    <section style="background-color: #fef3f4;">

        <div id="lgx-team" class="lgx-travelinfo">

            <div class="lgx-inner">

                <div class="container">

                    <div class="row">

                        <div class="col-xs-12">

                            <div class="lgx-heading">

                                <h2 class="heading" style="font-family: 'Roboto Condensed', sans-serif;">ORGANIZING TEAM</h2>

                                 <h3 class="subheading">Conferences dedicated to building remarkable events.</h3> 

                            </div>

                        </div>

                        

                    </div>

                    <div class="container">

                    <div class="row">

                    <table align="center">


                            <tr>
                                <td style="font-family: 'Montserrat', sans-serif;"><b>ORGANIZING SECRETARIES</b></td>

                                <td>

                                <ul style="list-style:none;">

                            <li>Sribash Roy	</li>
                            <li>Vadivelmurugan Irulappan</li>
                            </ul>

                            </td>

                            </tr>



                            <tr>

                                <td style="font-family: 'Montserrat', sans-serif;"><b>ORGANIZING COMMITTEE</b></td>

                                <td>

                                <ul style="list-style:none;">

                            <li>Padmaja Gudipalli</li>
                            <li>Rajagopal Subramanyam</li>
                            <li>Sreenivasulu Yelam</li>
                            <li>Santosh R Kanade</li>
                            <li>Irfan Ahmad Ghazi</li>
                            <li>Y. Sreelakshmi</li>
                            <li>Rahul Kumar</li>
                            <li>Gopinath Kodetham</li>
                            <li>Jogi Madhuprakash</li>
                            <li>Siddharthan S</li>
                            <li>M Muthamilarasan</li>
                            

                            </ul>

                            </td>

                            </tr>



                            <tr>

   

                        </table>



                        </div>

                        </div>

                    </div>

				</div> 	

                    

                </div>

                

            </div>

        </div>

    </section> 




<!--//.LGX SITE CONTAINER-->

<!-- *** ADD YOUR SITE SCRIPT HERE *** -->

<!-- JQUERY  -->

<script src="assets/js/vendor/jquery-1.12.4.min.js"></script>



<!-- BOOTSTRAP JS  -->

<script src="assets/libs/bootstrap/js/bootstrap.min.js"></script>



<!-- Smooth Scroll  -->

<script src="assets/libs/jquery.smooth-scroll.js"></script>



<!-- SKILLS SCRIPT  -->

<script src="assets/libs/jquery.validate.js"></script>



<!-- if load google maps then load this api, change api key as it may expire for limit cross as this is provided with any theme -->

<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDQvRGGtL6OrpP5xVMxq_0NgiMiRhm3ycI"></script>



<!-- CUSTOM GOOGLE MAP -->

<script type="text/javascript" src="assets/libs/gmap/jquery.googlemap.js"></script>



<!-- adding magnific popup js library -->

<script type="text/javascript" src="assets/libs/maginificpopup/jquery.magnific-popup.min.js"></script>



<!-- Owl Carousel  -->

<script src="assets/libs/owlcarousel/owl.carousel.min.js"></script>







<!-- COUNTDOWN   -->

<script src="assets/libs/countdown.js"></script>

<script src="assets/libs/timer/TimeCircles.js"></script>



<!-- Counter JS -->

<script src="assets/libs/waypoints.min.js"></script>

<script src="assets/libs/counterup/jquery.counterup.min.js"></script>



<!-- SMOTH SCROLL -->

<script src="assets/libs/jquery.smooth-scroll.min.js"></script>

<script src="assets/libs/jquery.easing.min.js"></script>



<!-- type js -->

<script src="assets/libs



<!-- header parallax js -->

<script src="assets/libs/header-parallax.js"></script>



<!-- instafeed js -->



<script src="assets/libs/instafeed.min.js"></script>



<!-- CUSTOM SCRIPT  -->

<script src="assets/js/custom.script.js"></script>















</body>

</html>
<?php include "footer.php"; ?>

