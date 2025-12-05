<?php include "header.php"; ?>

<!doctype html>

<html class="no-js" lang="en">
<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
    <!-- The above 3 meta tags *must* come first in the head -->

    <!-- SITE TITLE -->
    <title>CTFPPB 2025</title>
    <meta name="description" content="International Conference on Virus Evolution, Infection and Disease Control (ICVEIDC) 2022"/>
    <meta name="keywords" content="International, Conference, Virus, Evolution, Infection, Disease Contro, ICVEIDC, 2022"/>
    <meta name="author" content="Dept of Biotechnology & Bioinformatics, UoH, Hyderabad"/>


    <!--  FAVICON AND TOUCH ICONS -->
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.ico"/>
    <!-- this icon shows in browser toolbar -->
    <link rel="icon" type="image/x-icon" href="assets/img/favicon.ico"/>

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
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Oswald:400,700%7cPoppins:300,400,400i,600,600i,700,800,900"/>

    <!-- MASTER  STYLESHEET  -->
    <link id="lgx-master-style" rel="stylesheet" href="assets/css/style-default.min.css" media="all"/>

    <link rel="stylesheet" href="alert/dist/sweetalert.css">

    <!-- MODERNIZER CSS  -->
    <script src="assets/js/vendor/modernizr-2.8.3.min.js"></script>
	
	<style>
                @import url('https://fonts.googleapis.com/css2?family=Roboto+Condensed&display=swap');

                @import url('https://fonts.googleapis.com/css2?family=Montserrat:wght@500&family=Poppins:wght@300&family=Roboto+Condensed&display=swap');

	/* gradient source: https://uigradients.com/#Wiretap */
/* decreased transparency to 80% */
/* .highlight {
  background-image: linear-gradient(to right, #4776e6, #8e54e9);
  border-radius: 6px;
  padding: 3px 6px;
} */
.highlight2 {
  background-color: #ffffff;
  border-radius: 6px;
  opacity:0.5;
  padding: 3px 6px;
  
}

.err
{
	color:Yellow;
	font-weight:bold;
	margin-bottom:5px;
	text-decoration: underline;
}

	</style>
	
</head>

<body class="home">

<div class="lgx-container ">
<!-- ***  ADD YOUR SITE CONTENT HERE *** -->




<!--BANNER-->
<section>
    <div class="lgx-banner" style="background-image: url(assets/img/bg.png);">
        <div class="lgx-banner-style">
            <div class="lgx-inner">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12">
						
                                    <h2 class="highlight" style='color:#ebe9ef;padding:10px;background: linear-gradient(to right, #38ef7d, #52c234); border-radius: 20px; font-family:"Roboto Condensed", sans-serif; font-weight: bold;letter-spacing: 1px;' align="center">CTFPPB 2025 REGISTRATION</h2>
                        </div>
                    </div>
                    <!--//.ROW-->
                </div>
                <!-- //.CONTAINER -->
            </div>
            <!-- //.INNER -->
        </div>
    </div>
</section>
<!--BANNER END-->

<!--REGISTER-->

            <section>

                <div id="lgx-about" class="lgx-about">
                    <div class="lgx-inner">
                            <div class="container">
                            <div class="row">
                                <div class="col-sm-12 col-md-3">
                                    <div class="lgx-about-img">
                                        
                                    </div>
                                </div>
                                <div class="col-sm-12 col-md-6">
                                    
                                    <div class="lgx-registration-form-box lgx-about-registration-box">
                            <h4 class="title" style='line-height:0.7;'>REGISTRATION<br><span style='font-size:20px;color: white;'>& ABSTRACT SUBMISSION</span></h6></h4>
							
                            

                            <div class="lgx-registration-form" id="success" >
                                
                            <form action="registration.php" method="post"  enctype="multipart/form-data" onsubmit="return(validate());"> 

                                <input name="name" value="" class="wpcf7-form-control form-control" placeholder="Your Full Name ..." type="text" id="name" required>
								<span id='name_err' class='err'></span>
								
								<input name="email" value="" class="wpcf7-form-control form-control" placeholder="Your Email ID..." type="email" id="email" required>
								
								<input name="mobile" value="" class="wpcf7-form-control form-control" placeholder="Your Mobile Number ..." type="text" id="mobile" required>
                                <span id='mobile_err' class='err'></span>

								<select name="role" class="wpcf7-form-control wpcf7-select lgx-select" id="role" required>
                                    <option value=''>-- Registration Type --</option>
                                    <option value="Faculty" >Faculty</option>
                                    <option value="Student" >Student</option>
                                    <option value="Industry" onchange="karthik()">Industry Participant</option>
                                    <option value="International">International Participant</option>
                                    <!--<option value="others" >Others</option>-->
                                </select>
                                <span id='role_err' class='err'></span>

<div id="reveal">
                                <input type="text" name="country" class="wpcf7-form-control form-control" placeholder="Country" id="country">
                                <span id='country_err' class='err'></span>

                                <input type="text" name="state" class="wpcf7-form-control form-control" placeholder="State" id="state">
                                <span id='state_err' class='err'></span>

                                <input type="text" name="city" class="wpcf7-form-control form-control" placeholder="City" id="city">
                                <span id='city_err' class='err'></span>
</div>

                                <input type="text" name="transaction" class="wpcf7-form-control form-control" placeholder="Transaction ID for payment of registration fee" id="transaction">
                                <span id='transaction_err' class='err'></span>

                                <input name="desig" value="" class="wpcf7-form-control form-control" placeholder="Designation" type="text" id="desig" required>
								<span id='designation_err' class='err'></span>

                                <input name="dept" value="" class="wpcf7-form-control form-control" placeholder="Department" type="text" id="dept" required>
								<span id='dept_err' class='err'></span>

                                <input name="institution" value="" class="wpcf7-form-control form-control" placeholder="Institution" type="text" id="institution" required>
								<span id='institution_err' class='err'></span>
<div style="color: rgb(247, 240, 240);" align='left'>
<label >Date of Payment of Registration fee</label>

                                <input type="date" name="dpayment" id="dpayment" placeholder="Date of Payment of Registration fee"
                                class="wpcf7-form-control form-control">
                                <span id="date_err" class="err"></span></div>

                                

								<div align='left' style='color:#ffffff;'><b>Presentation Type:</b> 
                                <input type='radio' name="ptype" id='oral' value='Oral' onchange="abs();" checked> Oral
                                <input type='radio' name='ptype' id='poster' value="Poster" onchange="abs();"> Poster
                                <input type='radio' name='ptype' id='participant' value="Participant" onchange="abs();"> Participant 
                                </div>
<br>
                                <div align='left' style='color:#ffffff;'><b>Select Your Gender:</b> 
                                    <input type='radio' name="gender" id='male' value='Male' onchange="abs();" > Male
                                    <input type='radio' name='gender' id='female' value="Female" onchange="abs();" checked> Female
                                    </div>
							
								<!-- <p style='color:#ffffff;'><br>Your Abstract Text (250-300 Words)</p>
								<textarea name='abstract' id='abstract' class="wpcf7-form-control form-control" required></textarea>
                                <div style='color:#ffffff;'>Total Words: <span id="countWord">0</span></div>
                            <span id='abs_err' class='err'></span> -->
                                <br>
                                <label align="left" style='color:#ffffff;'>Upload Payment Receipt</label><p style="font-family:'Montserrat', sans-serif;color: white;">(upload only "<i style="color: rgb(239, 209, 16);"> .png</i> " or " <i style="color: rgb(239, 209, 16);">.jpg</i> " files)</p>
                                        <input type="file" name="receipt" value="Upload Payment Receipt" required class="lgx-btn lgx-scroll lgx-btn-red" accept=".png,.jpg" />
                                        <br><br>
<p style="font-family:'Montserrat', sans-serif;color: white;"><a href="assets/files/CTFPPB-2023_Abstract-Template.docx" download style="color: rgb(239, 209, 16);">Download</a> Abstract Template</p><br>
                                        <label align="left" style='color:#ffffff;'>Upload Your Abstract</label>
                                        <p style="font-family:'Montserrat', sans-serif;color: white;">(upload only " <i style="color: rgb(239, 209, 16);">.doc</i> " or "<i style="color: rgb(239, 209, 16);"> .docx</i> " files)</p>
                                        <input type="file" name="abstract" class="lgx-btn lgx-scroll lgx-btn-red" required accept=".doc,.docx,.word,.document" />
                                        <br><br>
                                

                                </div>
                                <input value="SUBMIT REGISTRATION" class="wpcf7-form-control wpcf7-submit lgx-submit" type="submit" name='register'onclick="JSalert()">

                                <marquee behavior="scroll" direction="left"></marquee>
                                
                            
                            </form>  
                            </div>
	
                                                </div>
                                </div>
                            </div>
                        </div><!-- //.CONTAINER -->
                   </div><!-- //.INNER -->
                </div>
            </section>
<!--REGISTER-->

<script type="text/javascript">
    function JSalert(){
        swal("You Have Registered Successfully!");
    }
    </script>




<script>

function validate(){
	
	document.getElementById("name_err").innerHTML="";
	document.getElementById("mobile_err").innerHTML="";
	document.getElementById("role_err").innerHTML="";
	document.getElementById("affiliation_err").innerHTML="";
	document.getElementById("abs_err").innerHTML="";	
		
    var name = document.getElementById("name").value;
	var nre = /^[a-zA-Z. ]{2,100}$/;
    if(!nre.test(name))
	{
	  document.getElementById("name_err").innerHTML="Invalid Name! Name should contain only Alphabets and .";
	return false;
	}
	
    var email = document.getElementById("email").value;
    var mobile = document.getElementById("mobile").value;
	
    var role = document.getElementById("role").value;
    var affiliation = document.getElementById("affiliation").value;
	
	if(affiliation.length < 5)
	{
	  document.getElementById("affiliation_err").innerHTML="Please write correct affiliation!";
  	  return false;
	}

    var abs = document.getElementById("abstract").value;
    var cnt = document.getElementById("countWord").innerHTML;
	
	if(cnt > 300)
	{
	  document.getElementById("abs_err").innerHTML="Abstract has more than 300 words!";
	  return false;
	}
	
/*	if(name.match(/^\d+/))
	{
		alert("Invalid Name");
	}
	
	alert(name);
	*/
	return true;
   
 } 
 
function abs()
{

    var ptype = document.getElementById("participant").checked;
	
    if(ptype)
	{
   	  document.getElementById("abstract").innerHTML="I would like to attend as a Participant (No Abstract).";	
	}
   else
    {
     document.getElementById("abstract").innerHTML="";	
	}
}	
 
</script>

<script>

function count_word( val ){
    var wom = val.match(/\S+/g);
    return {
        words : wom ? wom.length : 0
    };
}


var textContent = document.getElementById("abstract");
var showWordCount   = document.getElementById("countWord");

textContent.addEventListener("input", function(){
  var v = count_word( this.value );
  showWordCount.innerHTML = (v.words);
}, false);
</script>


</div>
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
<script type="text/javascript" src="https://goo.gl/maps/tQLo4RaHbYLF9hRD7"></script>

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
<script src="assets/libs/typed/typed.min.js"></script>

<!-- header parallax js -->
<script src="assets/libs/header-parallax.js"></script>

<!-- instafeed js -->

<script src="assets/libs/instafeed.min.js"></script>

<!-- CUSTOM SCRIPT  -->
<script src="assets/js/custom.script.js"></script>

</body>
<script>'undefined'=== typeof _trfq || (window._trfq = []);'undefined'=== typeof _trfd && (window._trfd=[]),_trfd.push({'tccl.baseHost':'secureserver.net'},{'ap':'cpbh-mt'},{'server':'sg2plmcpnl492402'},{'dcenter':'sg2'},{'id':'8721005'}) // Monitoring performance to make your website faster. If you want to opt-out, please contact web hosting support.</script><script src='https://img1.wsimg.com/traffic-assets/js/tccl.min.js'></script><script src='https://img1.wsimg.com/traffic-assets/js/tccl-tti.min.js' onload='window.tti.calculateTTI()'></script></html>
    <?php include "footer.php"; ?>