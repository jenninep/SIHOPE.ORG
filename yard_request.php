<?php
if(count($_POST)>0) {
	$first_name = $_POST['first-name'];
	$last_name = $_POST['last-name'];
	$email = $_POST['email'];
	$phone = $_POST['phone'];
	$address = $_POST['address'];
	$zip = $_POST['zip'];
	$amount = $_POST['amount'];
	$size_small = $_POST['size_small'];
	$size_medium = $_POST['size_medium'];
	$size_large = $_POST['size_large'];

	$message = "First name: ".$first_name ."\r\n".
	"Last name: ".$last_name ."\r\n".
	"Email: ".$email ."\r\n".
	"Phone: ".$phone ."\r\n".
	"Address: ".$address ."\r\n".
	"Amount ".$amount ."\r\n".
	"Size Small: ".$size_small ."\r\n".
	"Size Medium: ".$size_medium ."\r\n".
	"Size Medium: ".$size_large ."\r\n".
	"Date:" . date("Y-m-d H:i:s");

	$header =  "From: info@sihope.org" . "\r\n".
		   "Reply-To: info@sihope.org" . "\r\n".
		   "X-Mailer: PHP/" .phpversion();

	$from = "info@sihope.org";
	$to = "jennine@optonline.net"; //sihopecampaign@gmail.com
	mail($to, "Yard Sign Request", $message, $header);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>SIHOPE</title>

  <meta charset="UTF-8">
  <meta name="description" content="SIHOPE.org is a one-stop-shop for those battling addiction, those with a loved one who is struggling, or those who simply want to get involved in helping end this terrible crisis.
">
  <meta name="keywords" content="drugs, overdose, recovery, treatment centers, Staten Island">

  <!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />

  <!-- Google Fonts -->
  <link href='http://fonts.googleapis.com/css?family=Montserrat:400,700%7CPT+Serif:400,700,400italic' rel='stylesheet'>
  <link href="https://fonts.googleapis.com/css?family=Archivo+Black" rel="stylesheet">


  <!-- Css -->
  <link rel="stylesheet" href="css/bootstrap.min.css" />
  <link rel="stylesheet" href="css/font-icons.css" />
  <link rel="stylesheet" href="revolution/css/settings.css" />
  <link rel="stylesheet" href="css/rev-slider.css" />
  <link rel="stylesheet" href="css/sliders.css">
  <link rel="stylesheet" href="css/style.css" />
  <link rel="stylesheet" href="css/style2.css" />
  <link rel="stylesheet" href="css/responsive.css" />
  <link rel="stylesheet" href="css/spacings.css" />
  <link rel="stylesheet" href="css/animate.css" />
  <link rel="stylesheet" href="css/j-forms.css">
  <link rel="stylesheet" href="css/color.css" />

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome-animation/0.0.10/font-awesome-animation.min.css">
    <link rel="stylesheet" href="css/imagehover.min.css">
 

  <!-- Favicons -->
  <link rel="shortcut icon" href="img/favicon.png">
</head>

<body data-spy="scroll" data-offset="60" data-target=".navbar-fixed-top">

  <!-- Preloader -->
  <div class="loader-mask">
    <div class="loader">
      "Loading..."
    </div>
  </div>



  <!-- Navigation -->
  <header class="nav-type-1" id="home">
    <nav class="navbar navbar-fixed-top">
      <div class="navigation-overlay">
        <div class="container-fluid relative">
          <div class="row">

            <div class="navbar-header">
              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>

              <!-- Logo -->
              <div class="logo-container">
                <div class="logo-wrap local-scroll">
                  <a class="si-logo" href="index.html">SIHOPE.ORG</a>
                </div>
              </div>
            </div> <!-- end navbar-header -->


            <div class="nav-wrap">
              <div class="collapse navbar-collapse text-center" id="navbar-collapse">

                <ul class="nav navbar-nav local-scroll text-center">

                  <li>
                    <a href="index.html">home</a>
                  </li>
                  <li>
                    <a href="ineed-help.html">i need help</a>
                  </li>
                  <li class="active">
                    <a href="loved-one-help.html">my loved one needs help</a>
                  </li>
                  <li>
                    <a href="want-to-help.html">i want to help</a>
                  </li>
                   <li>
                    <a href="want-to-help.html">i want to learn more</a>
                  </li>  
                  <li>
                    <a href="want-to-help.html">Contact Us</a>
                  </li>                         
                </ul>
              </div>
            </div> <!-- end col -->
          </div> <!-- end row -->
        </div> <!-- end container -->
      </div> <!-- end navigation -->
    </nav> <!-- end navbar -->
  </header> <!-- end navigation -->


<!-- NYC well section-->
<section>
  <div class="container-fluid sign-banner">
    <div class="row nopadding nomargin">
      <div class="col-md-12 text-center pb-30">
        <div class="nyc-banner-div">
         <h1 class="nyc-title" style="font-size:43px">Ready to <span class="yellow-text">help? </span></h1>
           <p class="nyc-subtitle">Winning the battle against substance use & addiction on Staten Island<br> will take a borough-wide effort.</p>
         
        </div>
      </div>
    </div>
  </div>
</section>

 <div class="container">
    <div class="row">
      <div class="col-md-12">
        <!-- Nav tabs -->
        <ul class="nav-tabs" role="tablist">
          <li class="active"> <a href="#breakfast" data-toggle="tab">Request a Yard Sign</a> </li>
          <li> <a href="#lunch" data-toggle="tab">Report Illegal Drug Activity</a> </li>
          <li> <a href="#dessert" data-toggle="tab">Get Involved</a> </li>
        </ul>
        <!-- Tab panes -->
        <div class="tab-content">
          <div class="tab-pane active" id="breakfast">
            <div class="row nomargin nopadding">
              <div class="col-md-6 talk-col col-md-offset-3">
                <h2 class="text-center bottom-line">Thank you for your request.</h2>
                <p class="text-center">Please allow up to 2 weeks for delivery.</p>
              </div>
            </div> 
            <div class="form-wrapper">
          </div>
        </div>
            
        
          <!--tab-pane 1-->
          
          <!--Lunch menu-->
          <div class="tab-pane" id="lunch">
            <div class="row">
            </div>
          </div>
          <!--tab-pane 2-->
          <!--dessert menu-->
          <div class="tab-pane" id="dessert">
            <div class="row">
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>



    


    <!-- Footer -->
<section id="footer" class="">
  <div class="footer-top">
    <div class="container">
      <div class="row nomargin nopadding">
        <div class="col-md-4">
          <div class="footer-cont">
            <img class="da-photo" src="img/DA-photo.jpg" alt="da's photo">
            <p class="intro pb-10">Richmond County District Attorney<br>Michael E. McMahon</p>
            <a href="http://rcda.nyc.gov/" class="footer-links">http://rcda.nyc.gov/</a>
          </div>
        </div>
        <div class="col-md-4">
          <div class="footer-cont">
            <h4>Pages</h4>
            <ul>
              <li><a href="#">Home</a></li>
              <li><a href="ineed-help.html">I Need Help</a></li>
              <li><a href="#">My Loved One Needs Help</a></li>
              <li><a href="#">I Want To Help</a></li>
              <li><a href="#">I Want To Learn More</a></li>
              <li><a href="#">Contact</a></li>
            </ul>
          </div>
        </div>
        <div class="col-md-4">
          <div class="footer-cont">
            <h4>Contact Us</h4>
            <p class="contact-info"><i class="fa fa-map-marker"></i> Richmond County District Attorney’s Office<br>130 Stuvesant Place<br>Staten Island, NY 10301</p>
            <p class="contact-info"><i class="fa fa-phone"></i> 718 556 7113</p>
            <p class="contact-info"><i class="fa fa-envelope"></i> <a class="footer-links" href="mailto:sihopecampaign@gmail.com">sihopecampaign@gmail.com</a></p>
            <div class="socials footer-socials">
              <a href="#" target="_blank"><i class="fa fa-facebook"></i></a>
              <a href="#" target="_blank"><i class="fa fa-twitter"></i></a>
             <!--  <a href="#"><i class="fa fa-google-plus"></i></a> -->
              <a href="#" target="_blank"><i class="fa fa-linkedin"></i></a>
            </div>
            </div> <!-- end socials -->
          </div>
        </div>
      </div>
    </div>
  <div class="footer-bottom">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <p class="text-left">Copyright @ 2017 Richmond County District Attorneys Office. All Rights Reserved</p>
        </div>
      </div>
    </div>
  </div>
</section>

    <div id="back-to-top">
      <a href="#top"><i class="fa fa-angle-up"></i></a>
    </div>

  
  
  <!-- jQuery Scripts -->
  <script src="js/jquery-2.1.1.js"></script>
<script src="js/masonry.pkgd.min.js"></script>
<script src="js/jquery.flexslider-min.js"></script>
<script src="js/main.js"></script> <!-- Resource jQuery -->
  <script type="text/javascript" src="js/jquery.min.js"></script>
  <script type="text/javascript" src="js/bootstrap.min.js"></script>
  <script type="text/javascript" src="http://maps.google.com/maps/api/js"></script>
  <script type="text/javascript" src="js/plugins.js"></script>
  <script type="text/javascript" src="js/scripts.js"></script>
 
</body>
</html>

